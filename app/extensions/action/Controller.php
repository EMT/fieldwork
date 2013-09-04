<?php 


/**
 * Handles application-wide controller actions
 */


namespace app\extensions\action;

use lithium\core\Environment;



class Controller extends \lithium\action\Controller {


	

	public function render(array $options = array()) {
		
        
        //	Make some contextual available to the view template
        //	Don’t do this for json responses, as all data is outputted
        if ($this->request->type !== 'json') {
	        $this->set(array(
	        	'env' => Environment::get(),
	        	'build' => Environment::get('build'),
	        	'external_js' => (isset($this->external_js)) ? $this->external_js : array(),
	        	'img_base' => 'http://35c587949a5e6c4ab4cc-fe99d1e1a6eca87157ebc4c97a827cc2.r58.cf2.rackcdn.com/img'
	        ));
	        if (!isset($options['data']['body_classes'])) {
		        $options['data']['body_classes'] = (isset($this->body_classes)) ? $this->body_classes : '';
	        }
	        if (!isset($options['data']['body_data'])) {
		        $options['data']['body_data'] = (isset($this->body_data)) ? $this->body_data : array();
	        }
	    }
		
		parent::render($options);
 
    }
    
    
    


}

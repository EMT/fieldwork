<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

/**
 * This controller is used for serving static pages by name, which are located in the `/views/work`
 * folder. Pages are wrapped by the work_wrapper.html.php template
 */
class WorkController extends \lithium\action\Controller {


	public function view() {
		$options = array();
		$path = join('/', func_get_args());
	
		$pages = array(
			'big-pedal',
			'carbon-coop',
			'sewsew',
			'clarence-fredericks',
			'mini-bugs'
		);
		foreach($pages as $key => $page) {
			if ($page === $path) {
				$this_page = $key;
			}
		}
		
		$options['template'] = 'work_wrapper';
		$options['data'] = array(
			'partial' => $path,
		) + compact('pages', 'this_page');
		return $this->render($options);
	}
	
	
}

?>
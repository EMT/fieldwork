<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */


use lithium\core\ErrorHandler;
use lithium\action\Response;
use lithium\net\http\Media;
use lithium\core\Environment;
use app\models\Users;
use lithium\security\Auth;



ErrorHandler::apply('lithium\action\Dispatcher::run', array(), function($info, $params) {
	$response = new Response(array(
		'request' => $params['request'],
		'status' => $info['exception']->getCode()
	));
		
	if ($info['exception']->getCode() === 404) {
		$template = '404';
		$message = false;
	}
	else {
		$template = '500';
		$message = $info['exception']->getMessage();
	}
	
	$data = array(
		'env' => Environment::get(),
		'message' => $message
	);
	
	
	Media::render($response, compact('info', 'params'), array(
		'library' => true,
		'controller' => '_errors',
		'layout' => Environment::is('production') ? 'default' : 'error',
		'template' => Environment::is('production') ? $template : 'development',
		'layout' => 'default',
		'template' => $template,
		'request' => $params['request'],
		'data' => $data
	));
	return $response;
});




use lithium\analysis\Logger;

Logger::config(array(
    'simple' => array('adapter' => 'File')
));

?>
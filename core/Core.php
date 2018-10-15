<?php
class Core {
	public function run(){

		$url = '/';
		$params = array();

		if (isset($_GET['url']) && !empty($_GET['url']) && $_GET['url'] != '/') {
			$url .= $_GET['url'];
		}

		$url = explode('/', $url);
		array_shift($url);

		global $_info;
		$_info['url'] = $url;

		if (isset($url[0]) && !empty($url[0])) {
			$currentController = $url[0].'Controller';
			array_shift($url);
			
			if (isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
				
				if (isset($url[0]) && !empty($url[0])) {
					$params = $url;
				}
			} else {
				$currentAction = 'index';
			}
		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		$_info['controller'] = $currentController;
		$_info['action'] = $currentAction;
		$_info['params'] = $params;


		if (!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)) {
			$currentController = 'notfoundController';
			$currentAction = 'index';
		}
	
		$document = new $currentController();
		call_user_func_array(array($document, $currentAction), $params);
	}
}

?>
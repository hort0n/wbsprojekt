<?php

class Routing {

	public static function buildRoute() {

		/*default controller*/
		$controllerName = "IndexController";
		$modelName = "IndexModel";
		$action = "index";
		
		$route = explode("/", $_SERVER['REQUEST_URI']);

		/*defenieren controller*/
		if($route[1] != '') {
			$controllerName = ucfirst($route[1]. "Controller");
			$modelName = ucfirst($route[1]. "Model");
		}


		require_once CONTROLLER_PATH . $controllerName . ".php"; //
		require_once MODEL_PATH . $modelName . ".php"; //IndexModel.php

		if(isset($route[2]) && $route[2] !='') {
			$action = $route[2];

		}
        /* action defeniren */
		$controller = new $controllerName();
		$controller->$action(); // $controller->index();
	}

	public function errorPage() {

	}


}
<?php 

	require_once 'core/model.php';
	require_once 'core/view.php';
	require_once 'core/controller.php';
	require_once 'controller/errores.php';


	class app{

		function __construct(){
			$view = isset($_GET['view']) ? $_GET['view'] : null;
			$view = rtrim($view, '/');
			$view = explode('/', $view);

			
			if (empty($view[0])) {
				require_once 'controller/index.php';
				$controller = new index();
				$controller->loadModel('index');
				$controller->getView();
				return false;
			}

			$routeController = 'controller/'.$view[0].'.php';


			if (file_exists($routeController)) {
				require_once $routeController;
				$controller = new $view[0];
				$controller->loadModel($view[0]);
				if (isset($view[1])) {
					if (method_exists($controller, $view[1])) {
						$controller->{$view[1]}();
						$controller->getView();
					} else {
						$controller->getView();
					}
				} else {
					$controller->getView();
				}
			} else {
				$controller = new Errores();
				$controller->getView();
			}

		}

	}

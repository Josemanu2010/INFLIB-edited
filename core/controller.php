<?php 

	class controller{

		function __construct(){
			$this->view = new view();
		}

		function loadModel($model){
			$url = 'model/'.$model.'Model.php';
			if (file_exists($url)) {
				require_once $url;
				$modelName = $model.'Model';
				$this->model = new $modelName();
			}
		}

	}
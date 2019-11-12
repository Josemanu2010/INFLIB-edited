<?php 

	class festividades extends controller{

		function __construct(){
			parent::__construct();
		}

		function getView(){
			require_once 'view/metadatas.php';
			require_once 'view/header.php';
			$this->view->getView('festividades/index');
			require_once 'view/footer.php';
		}

	}
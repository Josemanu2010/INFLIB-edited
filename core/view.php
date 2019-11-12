<?php 


	class view{

		function __construct(){

		}

		function getView($view){
			#require_once 'view/metadatas.php';
			#require_once 'view/header.php';
			require_once 'view/'.$view.'.php';
			#require_once 'view/footer.php';
		}

	}
<?php 

	class conexion{

		function __construct(){
			$host = HOST;
			$user = USER;
			$pass = PASS;
			$db = DB;
		}

		function conectDB(){
			$conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
			$conn->query('SET CHARSET UTF8');
			return $conn;
		}

	}
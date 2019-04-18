<?php 	
		
		function db_connect(){
			$PDO = new PDO("mysql:host=localhost;dbname=crudvick", "root" , "");
			return $PDO;
		}

 ?>
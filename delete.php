<?php 
	
	include_once 'functions.php';
	include_once 'init.php';

	$id = isset($_GET['id']) ? (int)$_GET['id']:null;

	$PDO = db_connect();
	$sql = "DELETE FROM cliente WHERE id = :ID";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':ID' , $id, PDO::PARAM_INT);

	if ($stmt->execute()){
	    header('Location: form-list.php');
	}
	else{
	    echo "Erro ao cadastrar";
	    print_r($stmt->errorInfo());
	}

 ?>
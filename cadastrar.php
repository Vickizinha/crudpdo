<?php 
	include_once 'functions.php';
	include_once 'init.php';

	$nome = isset($_POST['nome']) ? $_POST['nome']:null;
	$dataNasc = isset($_POST['dataNasc']) ? $_POST['dataNasc']:null;
	$end = isset($_POST['end']) ? $_POST['end']:null;
	$PDO = db_connect();

	$sql = "INSERT INTO cliente(nome, dataNasc, endereco) VALUES(:NOME, :DATA, :ENDERECO)";

	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':NOME', $nome);
	$stmt->bindParam(':DATA', $dataNasc);
	$stmt->bindParam(':ENDERECO', $end);
	
	if ($stmt->execute()){
	    header('Location: form-cadastro.php');
	}
	else{
	    echo "Erro ao cadastrar";
	    print_r($stmt->errorInfo());
	}
?>
<?php 
	include_once 'functions.php';
	include_once 'init.php';

	$nome = isset($_POST['nome']) ? $_POST['nome']:null;
	$dataNasc = isset($_POST['dataNasc']) ? $_POST['dataNasc']:null;
	$end = isset($_POST['end']) ? $_POST['end']:null;
	$id =  isset($_POST['id']) ? $_POST['id']:null;

	$PDO = db_connect();

	$sql = "UPDATE cliente SET nome = :NOME, dataNasc = :DATA, endereco = :ENDERECO WHERE id = :ID";

	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':NOME', $nome);
	$stmt->bindParam(':DATA', $dataNasc);
	$stmt->bindParam(':ENDERECO', $end);
	$stmt->bindParam(':ID', $id, PDO::PARAM_INT);


	if ($stmt->execute()){
	    header('Location: form-cadastro.php');
	}
	else{
	    echo "Erro ao cadastrar";
	    print_r($stmt->errorInfo());
	}
?>
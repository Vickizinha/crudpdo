<?php 
	include_once 'functions.php';
	include_once 'init.php';

	$PDO = db_connect();
	$sql = "SELECT *FROM cliente ORDER BY nome ASC";

	$stmt = $PDO->prepare($sql);
	$stmt->execute();
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<title>Listagem</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

 </head>
 <body>
 	<p class="display-4 text-center"><i class="fas fa-user"></i> Lista de Usuários

 	<table class="table">
 		<thead class="bg-info text-white">
 			<tr>
 				<th>Nome</th>
 				<th>Data de Nascimento</th>
 				<th>Endereço</th>
 				<th></th>
 				<th></th>
 			</tr>
 		</thead>

 		<tbody>
 			<?php 
 				include_once'functions.php';
 				include_once'init.php';

 				$consulta = $PDO->query("SELECT *FROM cliente");

 				while ($listagem = $consulta->fetch(PDO::FETCH_ASSOC)) {
 					echo "
 						<tr>
 							<td>{$listagem['nome']}</td>
 							<td>{$listagem['dataNasc']}</td>
 							<td>{$listagem['endereco']}</td>

 							  <td>
                                <a href='form-edit.php?id={$listagem['id']}'><i class='fas fa-edit ml-5' style='font-size:23px;'></i></a>
                                <a href='delete.php?id={$listagem['id']}' onclick='return confirm('Tem certeza de que deseja remover?');'><i class='fas fa-times-circle text-danger ml-4' style='font-size:23px;'></i></a>
                            </td>
 						</tr>

 					";
 				}
 			 ?>
 		</tbody>
 	</table>

 	<script type="text/javascript" src="js/all.min.js"></script>
 </body>
 </html>
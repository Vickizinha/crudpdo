<?php 
	include_once'functions.php';
	include_once'init.php';
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">	
			<form method="post" action="cadastrar.php" class="form-group">	
				<h1 class="display-4 text-center">Cadastrar</h1>
					<div class="row">	
							<div class="col-sm-12 md-12 lg-12">	
								<label>Nome:</label>
								<input type="text" name="nome" class="form-control">
							</div>	
							<div class="col-sm-12 md-12 lg-12">	
								<label>Data de Nascimento:</label>
								<input type="text" name="dataNasc" class="form-control">
							</div>	
							<div class="col-sm-12 md-12 lg-12">	
								<label>Endereço:</label>
								<input type="text" name="end" class="form-control">
							</div>	
							<div class="row">
								<div class="col-sm-4 md-4 lg-4">
									<input type="submit" name="" value="Cadastrar" class="btn btn-dark ml-3 mt-4 ">
								</div>
							</div>


					</div>
			</form>
	</div>	
		<!-- fontawesome -->
		<script type="text/javascript" src="js/all.min"></script>
</body>
</html>
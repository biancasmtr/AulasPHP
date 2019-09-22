<?php 

	$arrayNome = ["Bianca","Maria","Juliana","Cátia","Ivone","Lucia","Carla"];
	$nome = filter_input(INPUT_GET, "txtNome", FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_GET, "txtEmail", FILTER_SANITIZE_STRING);
	$funcionario = "";
	$funcionarioCod = filter_input(INPUT_GET, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);

	
	if ($funcionarioCod) {
		$funcionario = $arrayNome[$funcionarioCod];
	}

	if (isset($_GET["txtNome"])) {
		$nome = $_GET["txtNome"];
	}

	if (isset($_GET["txtEmail"])) {
		$email = $_GET["txtEmail"];
	}

	if (isset($_GET["slFuncionario"])) {
		$funcionario = $arrayNome[$_GET["slFuncionario"]];
	}

	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<meta charset="utf-8">
</head>
<body>
	<style>
		ul {
			list-style: none;
		}

		input, select {
			padding: 5px;
			margin-top: 10px;
		}
	</style>


	<form method="GET">
		<ul>
			
			<li>Nome: <input type="text" name="txtNome"></li>
			<li>E-mail: <input type="text" name="txtEmail"></li>
			<li>Funcionário:
				<select name="slFuncionario">
				<?php 
				for ($i=0; $i < count($arrayNome); $i++) { 
					?>
					<option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
				<?php } ?>
					
				</select>
			</li>
			<li><input type="submit" name="btnSubmit" value="Cadastrar"></li>
		</ul>
	</form>Nome: <?= $nome; ?></p>
	<p>E-mail: <?= $email; ?></p>
	<p>Funcionario: <?= $funcionario; ?></p>
</body>
</html>
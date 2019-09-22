<?php 

$cep = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_STRING);

$cep = str_replace("-", "", $cep);

$cep = "06132142";

if (isset($_POST["cep"])) {
	$cep = $_POST["cep"];
}

$str = file_get_contents('https://viacep.com.br/ws/'.$cep.'/json');

$arrCidade = json_decode($str);

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Busca Cep</title>

	<style>
		ul {
			list-style: none;
		}

		input {
			padding: 5px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<form method="POST">
		<ul>
			<li>Insira seu CEP: <input type="string" name="cep"></li>
			<li><input type="submit" name="btnSubmit" value="Enviar"></li>
			<hr>
		</ul>
	</form>

	<p>CEP: <?= $arrCidade->cep; ?> <br></p>
	<p>Cidade: <?= $arrCidade->logradouro; ?> <br></p>
	<p>Bairro: <?= $arrCidade->bairro; ?> <br></p>
	<p>Localidade: <?= $arrCidade->localidade; ?> <br></p>
	<p>UF: <?= $arrCidade->uf; ?> <br></p>

</body>
</html>

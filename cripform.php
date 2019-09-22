<!DOCTYPE html>
<html>
<head>
	<title>	Criptografias</title>
	<meta charset="utf-8">
	<style>
		ul {
			list-style: none;
		}
		input, select {
			padding: 5px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<form method="POST">
		<ul>
			<li>Usuário: <input type="text" name="txtUsuario"></li>
			<li>Senha: <input type="password" name="txtSenha2"></li>
			<li><input type="submit" name="btnSubmit" value="Entrar">
				<a href="http://localhost/Cursos_PHP_2/cripform.php"></a></li>
		</ul>

		<?php 
echo "Usuário: ". filter_input(INPUT_POST, "txtUsuario", FILTER_SANITIZE_STRING);
echo"<br/>";
echo "Senha: ". md5(filter_input(INPUT_POST, "txtSenha2", FILTER_SANITIZE_STRING));
?>
	</form>
</body>
</html>
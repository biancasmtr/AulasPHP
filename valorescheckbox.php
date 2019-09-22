<?php 
	 $arrayIds = [];
	 if (filter_input(INPUT_POST, "btnSubmit", FILTER_SANITIZE_STRING)) {
	 	$checkboxChecked = filter_input(INPUT_POST,"ckUsuarios", FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);

	foreach ($checkboxChecked as $ck) {
		$arrayIds[] = $ck;
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Obtendo valores do checkbox</title>
</head>
<body>
	
	<div style="padding: 10px; background: #ccc;"></div>
	<form method="POST">
		<label>
			<input type="checkbox" name="ckUsuarios[]" value="1">
			Angélica
		</label>
		<br>
			<input type="checkbox" name="ckUsuarios[]" value="2">
			Lucas
		</label>
		<br>
			<input type="checkbox" name="ckUsuarios[]" value="3">
			Maria
		</label>
		<br>
			<input type="checkbox" name="ckUsuarios[]" value="4">
			Carla
		</label>
		<br>
			<input type="checkbox" name="ckUsuarios[]" value="5">
			Juliana
		</label>
		<br>
		<input type="submit" name="btnSubmit" value="Enviar" style="padding: 10px;">
	</form>
	<br>
	<div style="padding: 10px; background: #ccc;"></div>
	<?php 
	for ($i=0; $i < count($arrayIds); $i++) { 
		echo "<p>Id Selecionado: </p> {$arrayIds[$i]}";
	}

	 ?>
</body>
</html>



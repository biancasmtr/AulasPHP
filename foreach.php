<?php 
	$arrFrutas = [
1 => "Abacaxi",
2 => "Banana",
3 => "Goiaba",
4 => "Manga",
5 => "Uva"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Foreach</title>
	<meta charset="utf-8">
</head>
<body>
	<ul>
		<?php 
		foreach ($arrFrutas as $value) {
			?>
			<li> <?= $value ?> </li>
		<?php 
		}
		?>
	</ul>
</body>
</html>
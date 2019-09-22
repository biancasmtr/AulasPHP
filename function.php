<?php 
function Ajuste($p1,$p2){
	return (($p1 * $p2) / 4);
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Function</title>
</head>
<body>
	<h1> <?= Ajuste (3, 10); ?> </h1>
</body>
</html>

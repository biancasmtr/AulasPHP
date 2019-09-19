<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Do While</title>
</head>
<body>
	<ul>
		<?php 
		$i = 0;
		do { ?>
			<li>Valor = <?= $i; ?> </li>
			<?php 
			$i++;
			} while ($i <= 10); 
			?>
	</ul>
</body>
</html>
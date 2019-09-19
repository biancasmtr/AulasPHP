<?php 
$arrayNome = ["Selecionar", "Lucas","Marcelo","Bianca","Thiago","Benilson","Leandro","Juliana","Jaqueline","Rita","Marcos","Luiz","Arthur",];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Array</title>
 </head>
 <body>
 	<select id="slProf" name="slProf">

 		<?php 
 		for ($i=0; $i < count($arrayNome); $i++) {
 		 ?>
 		<option value="<?= $i; ?>"><?= $arrayNome[$i]?> </option>

 		<?php } ?>
 	</select>


 		<button onclick="alert(document.getElementById('slProf').value);">Selecionar</button>
 </body>
 </html>
<?php 
$jsonStr = '{"titulo":"Titanic","sinopse":"lalalala","ano":2017,"horarios":["16:00","19:00","21:00"]}';

$arrFilme = json_decode($jsonStr);

echo "<p><b>Título: </b>" .$arrFilme->titulo."</p>";
echo "<p><b>Sinopse: </b>" .$arrFilme->sinopse."</p>";
echo "<p><b>Ano: </b>" .$arrFilme->ano."</p>";
echo "<p><b>Horários: </b></p>";

for ($i=0; $i < count($arrFilme->horarios); $i++) { 
	echo "------------ " .$arrFilme->horarios[$i] . "<br/>";
}
 ?>
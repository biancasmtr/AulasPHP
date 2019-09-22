<?php 

$arrayFilme = array(
	"titulo" => "Titanic",
	"sinopse" => "lalalalalalala",
	"ano" => 2017,
	"horarios" => array("16:00", "19:00", "20:00")
);

$jsonStr = json_encode($arrayFilme);
echo $jsonStr;

 ?>

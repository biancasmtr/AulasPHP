<?php 

define("min", 17); // contante chamada de 'min' com valor '15'
define("max", 30); 

$idade = 15;

//---------------------------

echo "MIN: " . min . "<br>";
echo "MAX: " . max . "<br>";
echo "Idade: " . $idade . "<br>";

//---------------------------

if ($idade >= min && $idade <= max) {
	echo "Acesso liberado...";
} else {
	echo "Acesso Bloqueado!";
}

 ?>
<?php 
	//SHA1
	$s = sha1("Olá, mundo!");
	echo "SHA1 ".$s;

	echo "<br/> <hr>";

	//MD5
	$m = md5("PHP intermediário");
	echo "MD5 " .$m;

	echo "<br/> <hr>";

	//Base64_encode

	$b = base64_encode("criptografias");
	echo "BASE64_ENCODE ".$b;
	echo "<br/> <hr>";
	echo "BASE64_DECODE " .base64_decode($b);

 ?>
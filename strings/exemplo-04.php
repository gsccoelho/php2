<?php 	

$frase = "A repetição é a mãe da retenção.";
$palavra = "mãe";
$q = strpos($frase, $palavra);
$texto = substr($frase, 0,19);

//var_dump($q);
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
echo "<br>";
var_dump($texto2);

 ?>
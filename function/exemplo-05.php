<?php 


$a = 10;


function trocaValor(&$a){//valor por referência
	
	$a += 50;

	return $a ;
}

echo trocaValor($a);
echo "<br>";

echo $a;//o que acontece na função, fica na função!!!

 ?>
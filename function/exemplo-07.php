<?php 


function soma(int ...$numeros){

	return array_sum($numeros);
}

	echo soma(2,2);
	echo "<br>";
	echo soma(25,25);
	echo "<br>";
	echo soma(2.1,2.9);
	echo "<br>";

 ?>
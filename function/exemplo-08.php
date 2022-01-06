<?php 


function soma(float ...$numeros) :float {// define o tipo de variavel que o método retorna

	return array_sum($numeros);
}

	echo var_dump(soma(2,2));
	echo "<br>";
	echo soma(25,25);
	echo "<br>";
	echo soma(2.1,2.8);
	echo "<br>";

 ?>
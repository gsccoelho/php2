<?php 	

//////////////////////////////////////////////////////////////
//VETOR
//////////////////////////////////////////////////////////////

//vetor, pois tem apenas uma dimensão
$frutas = array("laranja","abacaxi","melancia"); // exemplo de um vetor
print_r($frutas);

//////////////////////////////////////////////////////////////
//ARRAY BIDIMENCIONAL
//////////////////////////////////////////////////////////////
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Ecosport";

//exibe uma informação em específico
echo $carros[0][3];

//exibe a última informação do array
echo end($carros[1]);



//////////////////////////////////////////////////////////////
//ARRAY
//////////////////////////////////////////////////////////////

$pessoa = array();


array_push($pessoa, array(
	"nome" => "Guilherme",
	"idade" => 29,
));

array_push($pessoa, array(
	"nome" => "Kellen",
	"idade" => 27,
));


print_r($pessoa[0][nome]);



 ?>
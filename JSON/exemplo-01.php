<?php 

$pessoa = array();


array_push($pessoa, array(
	"nome" => "Guilherme",
	"idade" => 29,
));

array_push($pessoa, array(
	"nome" => "Kellen",
	"idade" => 27,
));


json_encode($pessoa);
 ?>
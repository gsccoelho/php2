<?php 

require_once("config.php");

$cad = new Cadastro();
$cad->setNome("Guilherme");
$cad->setEmail("Guilherme@gmail.com");
$cad->setSenha("123");



echo $cad;

 ?>
<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Guilherme");
$cad->setEmail("Guilherme@gmail.com");
$cad->setSenha("123");


/*echo $cad->getNome();
echo $cad->getEmail();
echo $cad->getSenha();*/

$cad->registrarVenda();

 ?>
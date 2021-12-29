<?php 

$nome = (int)$_GET['a'];
$teste = (String)$_GET['b'];
$ip = $_SERVER['REMOTE_ADDR'];//pega informações do ambiente
$ip_script = $_SERVER['SCRIPT_NAME'];//pega informações das estruturas de pastas acessadas

//var_dump($nome);
//var_dump($teste);

echo $ip;
echo $ip_script;

 ?>
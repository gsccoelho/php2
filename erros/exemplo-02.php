<?php 

error_reporting(E_ALL & ~E_WARNING);//se tiver essa linha não vai aparecer os Warning em tela, ou usar isset na variável

$nome = $_GET['nome'];

echo $nome;



 ?>
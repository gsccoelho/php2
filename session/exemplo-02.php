<?php 

//session_start(); //inicia o armazenagento de session
require_once("config.php"); //start definido no arquivo e chamado em outro

//apagando session
//session_unset($_SESSION["nome"]);//limpa var de sessao mas não remove o usuário
//session_destroy($_SESSION["nome"]);// elimina totalmente e remove o usuário

echo $_SESSION["nome"];


 ?>
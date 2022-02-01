<?php 

require_once("Config.php");

$db = new Sql("(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.31.1.33)(PORT = 1521)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = falcon) ))");

//$usuarios = $db->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//exemplo de 1 registro
/*$root = new Usuario();
$root->loadById(3);
echo $root;*/

//exemplo de vários registros
//$lista = Usuario::getList();
//echo json_encode($lista);


//exemplo do m'etodo search
//$result = Usuario::search("login2");
//echo json_encode($result);


//exemplo de credenciais de acesso
$aut = new Usuario();
$aut->autenticaLogin("login123","123");
echo $aut;


 ?>
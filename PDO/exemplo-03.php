<?php 

    $server         = "172.31.1.33";
    $db_username    = "unimed";
    $db_password    = "falcon";
    $service_name   = "falcon";
    $sid            = "falcon";
    $port           = 1521;
    $dbtns          = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = $server)(PORT = $port)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = $service_name) ))";

$dbh = new PDO("oci:dbname=" . $dbtns . ";charset=utf8", $db_username, $db_password);


$stmt = $dbh->prepare("INSERT INTO TB_USUARIOS (id_usuario,deslogin,desenha) values(:ID, :LOGIN, :SENHA)");

$id = 3;
$login = "login3";
$senha = "123";


$stmt->bindParam(":ID", $id);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();

echo "Inserido OK!";



 ?>

<?php 

    $server         = "172.31.1.33";
    $db_username    = "unimed";
    $db_password    = "falcon";
    $service_name   = "falcon";
    $sid            = "falcon";
    $port           = 1521;
    $dbtns          = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = $server)(PORT = $port)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = $service_name) ))";

$dbh = new PDO("oci:dbname=" . $dbtns . ";charset=utf8", $db_username, $db_password);


$stmt = $dbh->prepare("UPDATE TB_USUARIOS SET deslogin = :LOGIN, desenha = :SENHA WHERE ID_USUARIO = :ID");

$id = 3;
$login = "login33";
$senha = "456";


$stmt->bindParam(":ID", $id);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();

echo "Alterado OK!";



 ?>

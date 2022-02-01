<?php 

    $server         = "172.31.1.33";
    $db_username    = "unimed";
    $db_password    = "falcon";
    $service_name   = "falcon";
    $sid            = "falcon";
    $port           = 1521;
    $dbtns          = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = $server)(PORT = $port)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = $service_name) ))";

$dbh = new PDO("oci:dbname=" . $dbtns . ";charset=utf8", $db_username, $db_password);

$dbh->beginTransaction();

$stmt = $dbh->prepare("DELETE TB_USUARIOS WHERE ID_USUARIO = ?");

$id = 3;

$stmt->execute(array($id));

//$dbh->rollback();
$dbh->commit();

echo "Delete OK!";



 ?>

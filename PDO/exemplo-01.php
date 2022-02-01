<?php 


$host     = "odaunism-scan.unimedsm.com.br";
$server   = "unimedsm";
$user     = "unimed";
$password = "admin";
$port     = "1521";
$tns      = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = $host)(PORT = $port)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = $server) ))";
//$tns      = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.31.133)(PORT = 1521)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = falcon) ))";

//$pdo = new oci_connect("oci:dbname=".$tns, $user, $password);
//$pdo = new PDO("oci:dbname=".$tns, $user, $password);

$pdo = new oci_connect("oci:dbname=". $tns, $user, $password);
//$pdo = new PDO("oci:dbname=unimed", "unimed", "admin");



//$con = new PDO("mysql:dbname=dbphp7; host=localhost","root","");//banco,user,senha

//$conn = oci_connect(username, password)

/*$stmt = $con->prepare("SELECT * FROM cad_rede_atd ORDER BY 1");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($results);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>". $key . "</strong>". $value . "<br>";
	}
	echo "=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+<br>";
}*/






 ?>

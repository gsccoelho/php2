<?php 

$con = PDO("mysql:dbname=dbphp7; host=localhost","root","root");//banco,user,senha

$stmt = $con->prepare("SELECT * FROM TB_USUARIOS ORDER BY DESLOGIN");

$stmt->execute();


$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($results);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>". $key . "</strong>". $value . "<br>"  ;
	}
	echo "=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+<br>";
}






 ?>

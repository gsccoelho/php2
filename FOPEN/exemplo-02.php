<?php 

require_once("Config.php");

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY DESLOGIN");
$separator = ",";


$header = array();
foreach ($usuarios[0] as $key => $value) {
	array_push($header, ucfirst($key));
}

$file = fopen("arquivo.csv", "a+");
fwrite($file, implode($separator,$header)."\r\n");

foreach ($usuarios as $row) 
{
	$data = array();
	foreach ($row as $key => $value) 
	{
		array_push($data,$value);
	}//foreach de coluna
	fwrite($file, implode($separator,$data)."\r\n");
}//foreach de linha




fclose($file);

echo implode($separator,$header);
//echo json_encode($header);

 ?>
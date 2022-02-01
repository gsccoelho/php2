<?php 


$filename = "arquivo.csv";

if (file_exists($filename)) {
	$file = fopen($filename, "r");

	$header = explode(",", fgets($file));//retira a virgula(separador)
	$data = array();

	while ($row = fgets($file)) {
		$rowData = explode(",", $row);
		$linha = array();

		for ($i=0; $i < count($header); $i++) { 
			$linha[$header[$i]] = $rowData[$i];
		}

		array_push($data, $linha);
	}
	fclose($file);
}

echo json_encode($data);


 ?>
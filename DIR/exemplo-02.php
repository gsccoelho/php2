<?php 

$images = scandir("Images PHP");
$data = array();

foreach ($images as $img) {
	if (!in_array($img, array(".",".."))) //in_array retira o . e .. do array que nao eh importante no contexto do codigo
	{
		$file = "Images PHP". DIRECTORY_SEPARATOR . $img;
		$info = pathinfo($file);
		$info["size"] = filesize($file);//add uma nova tag size e pega o tamanho do arquivo em Bytes
		$info["modified"] = date('d/m/Y H:i:s', filemtime($file));//mostra quando o arquivo foi modificado
		$info["url"] = "http://localhost/DIR/". str_replace("\\", "/", $file);
		//var_dump($info);
		array_push($data, $info);
	}


}

echo json_encode($data);



 ?>
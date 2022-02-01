<?php 


$file_name = "Images PHP";


if (!is_dir($file_name)) {
		mkdir($file_name);
		echo "Diretorio ".$file_name." criado com sucesso!";
}else {
	rmdir($file_name);
	echo "Diretorio j'a existe, removido!";
}




 ?>
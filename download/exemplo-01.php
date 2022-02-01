<?php 

$link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse["path"]);


$file = fopen($basename, "w+");//aqui recebemos o arquivo, gera o nome do arquivo
fwrite($file, $content); // aqui estamos escrevendo no nosso dico rígido
fclose($file);


//var_dump($path);

 ?>

 <img src="<?=$basename?>">
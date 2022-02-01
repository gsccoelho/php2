<?php 

$cep = "97110580";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);// true define para virar um array, se não houver, vira um objeto qlqr;

//print_r($data);//inf completa
print_r($data["logradouro"]);//inf específica


 ?>
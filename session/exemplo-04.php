<?php 

session_id('mpfkj5e8g9lagineau3l3nu5od');

require_once("config.php");

session_regenerate_id();//gera uma nova session_id

echo session_id();

echo "<br>";

//var_dump($_SESSION["nome"]);
var_dump($_SESSION);


 ?>
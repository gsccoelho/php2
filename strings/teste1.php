<?php
 
$name = 'Hcode Treinamentos';
 
$replace = 'Cursos';
 

$new_name = substr($name, strpos($name, "T") . $replace );
var_dump($new_name) ;

?>
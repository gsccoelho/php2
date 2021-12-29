<?php 
//exemplo de escopo de variável
$nome = "Guilherme";



function teste()
{
	global $nome;
	echo $nome;
}

function teste2()
{
	$nome = " Silveira Coelho";
	echo $nome ." agora no teste2";
}

function teste3()
{
	global $valor;
	$valor = "testess";
}

//teste();
//teste2();
teste3();
echo $valor;



 ?>
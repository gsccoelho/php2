<?php 

$anoNascimento = 1992;
$nome1 = "Guilherme";
$sobrenome = "Coelho";

//concatenação
$nomeCompleto = $nome1 . " - " . $sobrenome;

echo $nomeCompleto;

unset($nomeCompleto);

//Valida se existe
if (isset($nomeCompleto)) {
echo $nomeCompleto;
}







 ?>
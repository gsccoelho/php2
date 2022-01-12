<?php 	

class Pessoa{
	public $nome;

	public function falar(){

		return "O meu nome é: ".$this->nome;
	}
}

$coelho = new Pessoa();
$coelho->nome = "Guilherme Silveira";
echo $coelho->falar();
?>
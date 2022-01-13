<?php 


class Pessoa{

	public $nome = "Guilherme Silveira Coelho";
	protected $idade = 29;
	private $senha = "123455";

	public function exibirDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}



}


class Programador extends Pessoa{
	public function exibirDados(){

 		echo get_class($this);

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$pessoa = new Programador();

$pessoa->exibirDados();

 ?>
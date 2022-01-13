<?php 


class Endereco {
	private $logradouro;
	private $numero;
	private $cidade;



	public function __construct($valueL, $valueN, $valueC){

		$this->logradouro = $valueL;
		$this->numero = $valueN;
		$this->cidade = $valueC;
	}

	public function __destruct(){

		echo "<br> DESTRUIR";
	}

	public function __toString(){

		return $this->logradouro." - ".$this->numero." - ".$this->cidade;
	}


}


$meuEndereco = new Endereco("Rua Gaspar Martins", "1482","Santa Maria");
//var_dump($meuEndereco);

//unset($meuEndereco);

echo $meuEndereco;


 ?>
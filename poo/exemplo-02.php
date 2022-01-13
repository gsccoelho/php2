<?php 	


class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($value){
		$this->modelo = $value;
	}

	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($value){
		$this->motor = $value;
	}

	public function getAno():int{
		return $this->ano;
	}

	public function setAno($value){
		$this->ano = $value;
	}

	public function exibir(){

		return array(
			'modelo' =>  $this->getModelo(),
			'motor' => $this->getMotor(),
			'ano' => $this->getAno()
			 );
	}
}

$carro = new Carro();
$carro->setModelo("Gol GT");
$carro->setMotor("1.6");
$carro->setAno("2022");

//print_r($carro->exibir());
var_dump($carro->exibir());//mostra tbm o tipo de dado


 ?>
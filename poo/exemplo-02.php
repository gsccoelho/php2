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

	public function getMotor(){
		return $this->motor;
	}

	public function setMotor($value){
		$this->motor = $value;
	}

	public function getAno(){
		return $this->ano;
	}

	public function setAno($value){
		$this->ano = $value;
	}

	public exibir(){

		return array(
			'modelo' =>  $this->getModelo(),
			'motor' => $this->getMotor(),
			'ano' => $this->getAno()
			 );
	}
}

$carro = new Carro();
$carro->setModelo("Gol GT");
//echo $carro->getModelo();


 ?>
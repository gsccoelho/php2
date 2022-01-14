<?php 	

interface Veiculo {
	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);
}

/**
 * 
 */
class Civic implements Veiculo
{
	public function acelerar($velocidade){
		echo "O veiculo acelerou até: ".$velocidade;
	}
	public function frear($velocidade){
		echo "O veiculo Frenou até: ".$velocidade;
	}
	public function trocarMarcha($marcha){
		echo "O veiculo está na marcha: ".$marcha;
	}
	
}

$carro = new Civic();
$carro->trocarMarcha(5);



 ?>
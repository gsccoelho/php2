<?php 	

interface Veiculo {
	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);
}

/**
 * 
 */
abstract class Automovel implements Veiculo
{
	public  function acelerar($velocidade){
		echo "O veiculo acelerou até: $velocidade km/h";
	}
	public  function frear($velocidade){
		echo "O veiculo Frenou até: $velocidade km/h";
	}
	public   function trocarMarcha($marcha){
		echo "O veiculo está na marcha: $marcha";
	}
	
}

class Delrey extends Automovel{
	public function empurrar(){
		echo "Empurrando carro;";
	}
}

$carro = new Delrey();
$carro->acelerar(180);



 ?>
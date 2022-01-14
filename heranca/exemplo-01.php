<?php 


/**
 * 
 */
class Documento //extends AnotherClass
{
	private $numero;

	public function getNumero(){
		return $this->numero;
	}
	
	public function setNumero($value){
		$this->numero = $value;
	}

	
}


/**
 * 
 */
class CPF extends Documento
{
	
	public function validarCPF():bool {
		$numeroCPF = $this->getNumero();
		return true;
	}
}

$doc = new CPF();
$doc->setNumero("03113798000");
var_dump($doc->validarCPF());

echo "<br>";

echo $doc->getNumero();

 ?>
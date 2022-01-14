<?php 


abstract class Animal 
{	
	public function falar()
	{
		return "Fala";
	}

	public function mover()
	{
		return "Anda";
	}
}

class Cachorro extends Animal
{
	public function falar()
	{
		return "Late";
	}
}

class Gato extends Animal
{
	public function falar()
	{
		return "Mia";
	}
}


class Passaro extends Animal
{
	public function falar()
	{
		return "Pia";
	}

	public function mover()
	{
		return "Voa e " . parent::mover();//Chama inclusive o método da classe Pai
	}
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "--------------------------------------------- <br>";

$garfield = new Gato();
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

echo "--------------------------------------------- <br>";


$ave = new Passaro();
echo $ave->falar() . "<br>";
echo $ave->mover() . "<br>";
 ?>
<?php 	
/*
Neste exemplo iremos falar sobre polimorfismo, o que é poliformismo? Polimorfismo é usado quando queremos criar uma função na classe filha com mesmo nome da classe pai mas que tenha um resultado diferente como mostra o exemplo abaixo, também podemos trazer o resultado da classe pai utilizando a palavra "parent::NomeDaSuaFuncaoNaClassePai". 
*/
abstract class Animal{
	public function falar(){
		return "Som";
	}

	public function mover(){
		return "anda";
	}
}

class Cachorro extends Animal{
	public function falar(){
		return "AuAu";
	}
}

class Gato extends Animal{
	public function falar(){
		return "Miau";
	}
	public function mover(){
		return "preguiça";
	}
}

class Passaro extends Animal{
	public function falar(){
		return "Cantar";
	}
	public function mover(){
		return "Voa e ".parent::mover();
	}
}

$pluto = new Cachorro();
echo $pluto->falar();
echo '<br>';
echo $pluto->mover();
echo '<br>';
echo '============';
echo '<br>';
$garfield = new Gato();
echo $garfield->falar();
echo '<br>';
echo $garfield->mover();
echo '<br>';
echo '============';
echo '<br>';
$canarinho = new Passaro();
echo $canarinho->falar();
echo '<br>';
echo $canarinho->mover();
 ?>
<?php 
/*
Neste exemplo iremos falar sobre classes abstratas, o que são classes abstratas? 
São classes que não podem ser diretamente instanciadas e sim apenas extendidas para classes filhas, podem ter seus metódos e atributos próprios e utilizar interfaces próprias também.
a palavra reservada para criação de uma classe abstrata é "abstract class Nomedasuaclasse{}"
*/
interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function marcha($nMarcha);

}


abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){
		echo "O veículo acelerou até $velocidade km/h";
		echo '<br>';
	}
	public function frenar($velocidade){
		echo "O veículo freiou até $velocidade km/h no bagulho";
		echo '<br>';
	}

	public function marcha($nMarcha){
		echo "O veículo engatou a $nMarcha º e saiu cantando galo";
		echo '<br>';
	}

}

class Belina extends Automovel{

	public function empurrar(){

	}
}
// $carro = new Automovel();
$carro = new Belina();
$carro->acelerar(330);
?>
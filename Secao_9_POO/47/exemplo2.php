<?php 
/*
Nesse exemplo podemos ver a implementação de uma inface, vemos também que o código só compila
caso nós atendamos todos os requisitos, caso não atenda ele da erro e não compila o código.
A palavra chave para implementarmos a interface usamos a palavra chave "implements".
*/
require 'exemplo1.php';

class Civic implements Veiculo{

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

$carro = new Civic;

$carro->acelerar(500);
$carro->frenar(0);
$carro->marcha(5);

 ?>
<?php 	

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
 ?>
<?php 
/*
Neste exemplo vemos como criar metodos gets e sets o 
get é usado para buscar os dados encapsulados e o set para enviar os dados
por isso o set não tem return, pq ele só recebe a porra do valor e por isso tem o parametro
porque o parametro é o valor que tu joga nele e ele insere na variável criada na instância pra enviar
FINALMENETE ESSA PORRA FEZ SENTIDO, PQ N ENSINAM ESSA MERDA? 
*/
class Carro{
	private  $modelo;
	private  $motor;
	private  $ano;

	public function getModelo():String{
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno():int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	public function exibir(){
		return nl2br("Modelo: $this->modelo
					  Motor: $this->motor
					  Ano: $this->ano");	
	}
}

$opalao = new Carro(); 
$opalao->setModelo("topp");
$opalao->setMotor(155);
$opalao->setAno("1998");
echo $opalao->exibir();


 ?>
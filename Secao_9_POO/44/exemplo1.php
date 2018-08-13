<?php 

class Endereco{
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){
		var_dump("Destruindo");
	}

	public function __toString(){
		return nl2br("logradouro: $this->logradouro
					  numero: $this->numero
					  cidade: $this->cidade");			
	}
}


$meuEndereco = new Endereco('Rua dos Alfanereiros', 123, 'Nova Jersey');

print_r($meuEndereco);
echo '<br>';
echo $meuEndereco;
echo '<br>';
echo '<pre>';
var_dump($meuEndereco);
echo '</pre>';

unset($meuEndereco);
 ?>
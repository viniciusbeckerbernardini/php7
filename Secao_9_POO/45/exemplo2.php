<?php 	

class Pessoa{

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){
		echo $this->nome;
		echo '<br>';
		echo $this->idade;
		echo '<br>';
		echo $this->senha;
	}

}

class Programador extends Pessoa{
	public function verDados(){
		echo get_class($this);
		echo '<br>';
		echo $this->nome;
		echo '<br>';
		echo $this->idade;
		echo '<br>';
		echo $this->senha;
	}

}

$guri = new Programador;

// echo $guri->nome;
echo $guri->verDados();

?>
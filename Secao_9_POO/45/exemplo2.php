<?php 	
/*
Aqui podemos ver um exemplo de herança acessando metódos publicos mesmo com a classe privada.
Neste caso ele obtem acesso, mas como podem ver se descomentarem a linha 37 ele não acessa o 
atributo private pois ele não pode ser herdado por uma classe filho, apenas public e protected.
*/
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

// echo $guri->senha;
echo $guri->verDados();

?>
<?php 	
/*
Nesse exemplo iremos estudar os encapsulamentos, os encapsulamentos servem para dar
mais segurança ao seu código de uma maneira geral e determinar quem pode acessar determinado 
atributo ou função, existem 3 níveis de encapsulamento, são eles: 
Público - geral tem acesso (classe,objetos, classes extendidas)
Protected - A classe e a classe extendida tem acesso
Private - geral tem acesso 
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

$guri = new Pessoa;

// echo $guri->nome;
echo $guri->verDados();

 ?>
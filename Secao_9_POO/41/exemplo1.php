<?php 

class Pessoa {
	// Criando as variáveis com os encapsulamentos
	public $nome;

	// Criando os metodos 
	public function falar(){
		return "O meu nome é "./*Isso retorna a variavel já instanciada =>*/$this->nome;
	}

}

$vini = new Pessoa();

$vini->nome = "Vini";
echo $vini->falar();
 ?>
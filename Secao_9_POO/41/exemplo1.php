<?php 
/*
Neste exemplo veremos como podemos criar um classe, mas, o que é uma classe? 
Uma classe é um conjunto de atributos e metodos resumidamente, pode olhar na pasta 40 que eu explico melhor lá, para criar uma classe usamos a palavra reservada "class" como no exemplo abaixo, para acessar uma classe nós precisamos instancia-la, criar uma cópia para usarmos ela, para fazer isso nós usamos a palavra reservada "new" como no exemplo abaixo, após isso poderemos manipular os valores da classe, buscar, excluir, inserir etc. Claro, tudo isso dependerá de uma série de fatores mas para uma classe basica como esta abaixo isto é válido. 
*/
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
<?php 
// Variáveis locais e globais

$nome = "Vinicius"; //Isso é uma variável global

echo $nome;

// Essa função ira retornar um erro pois não está ouvindo a variável global, tudo que há fora do escopo da função é ignorado
function mostraNome(){
	echo $nome;
}
// Essa função retornará undefined
mostraNome();

// Essa função irá retornar o valor global da variável $nome, no caso, Vinicius
function mostraNomeGlobal(){
	global $nome;
	echo $nome;
}
// Essa função retornara vinicius
mostraNomeGlobal();

/* Essa função ira retornar o valor local da variável que está sendo criada na função, note que os nomes mesmo sendo iguais não inteferem entre si devido ao escopo */
function mostraNomeLocal(){
	$nome = "Jeremias Cabra Cega";
	echo '<br>'.$nome;
}
mostraNomeLocal();

 ?>
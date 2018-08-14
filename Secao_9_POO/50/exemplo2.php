<?php 	
/*
Nesse exemplo iremos falar sobre inclusão de arquivos utilizando autoload e as 
spl functions, para que serve o autoload? o autoload serve para que possamos incluir arquivos que estejam em outra pasta de forma dinamica como mostra o exemplo abaixo em que ao instancia a classe Belina (que se extende da classe automovel) ele busca a classe automovel também fazendo com que tudo funcione lindamente meu galinho véio rinho de briga
*/
function incluirClasses($nomeClasse){
	if(file_exists("$nomeClasse.class.php") === true){
		require_once("$nomeClasse.class.php");
	}
}
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
	if(file_exists("abstratc". DIRECTORY_SEPARATOR ."$nomeClasse.class.php") === true){
		require_once("abstratc". DIRECTORY_SEPARATOR  ."$nomeClasse.class.php");
	}
});
$carro = new Belina();
echo $carro->Acelerar(105);

?>
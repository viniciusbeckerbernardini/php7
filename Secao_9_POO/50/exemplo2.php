<?php 	
/*
Nesse exemplo iremos falar sobre inclusão de arquivos utilizando autoload e as 
spl functions, para que serve o autoload? o autoload serve para que possamos incluir arquivos que estejam em outra pasta de forma dinamica sem precisarmos fazer um require para cada arquivo que formos usar, esse tipo de requisição funciona de forma dinamica então se houverem outras instâncias nas classes que foram invocadas ele também o fará como mostra o exemplo abaixo em que ao instancia a classe Belina, a classe belina por sua vez se extende de Veiculo que também é chamado dinâmicamente através da spl function de autoload
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
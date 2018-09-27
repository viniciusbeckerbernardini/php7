<?php 	
function __autoload($nomeClasse){
	require_once("$nomeClasse.class.php");
	var_dump($nomeClasse);
}

$carro = new Belina();
echo $carro->Acelerar(105);
 ?>
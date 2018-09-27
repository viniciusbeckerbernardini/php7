<?php 
require_once('config.php');
 

// Para usar o NameSpace usamos a palavra reservada "use" seguido do nome do namespace/nomedaclasse
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Vini");
$cad->setEmail('vini@vini.com');
$cad->setSenha('132456');
$cad->setEpica("sim");		
$cad->registrarVenda();
 ?>
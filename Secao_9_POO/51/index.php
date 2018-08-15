<?php 
require_once('config.php');

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Vini");
$cad->setEmail('vini@vini.com');
$cad->setSenha('132456');

$cad->registrarVenda();
 ?>
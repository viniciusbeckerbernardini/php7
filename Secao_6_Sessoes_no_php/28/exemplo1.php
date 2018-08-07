<?php 	
/*
Neste exemplo iremos falar de sessões no PHP, o que é uma sessão? uma sessão nada mais é do que um arquivo que coliga 
sua máquina com a do servidor criando um arquivos temporarios nas duas maquinas criando a sessão, as sessões são usadas para
manter informações entre as páginas dos sites e recuperalas em caso de formulários de compras por exemplo
*/
require_once('config.php');

$_SESSION["nome"] = "Vinicius";

 ?>
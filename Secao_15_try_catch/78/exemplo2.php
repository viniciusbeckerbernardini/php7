<?php 
/* 
Error reporting é usado para definir o que irá ou não ser mostrado para o usuário
a função recebe constantes pre definidas do php 

~constante = não mostrar
& = separador  
*/
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET['nome'];

echo $nome;
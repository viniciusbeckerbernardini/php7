<?php 
/*
Nesse exemplo vamos ver como utilizar as variáveis super globais e algumas delas
Variáveis abordadas neste exemplo;
$_GET[]
$_SERVER[]
*/
// Essas variáveis vão receber os parametros inseridos atráves da url
$nome = $_GET['a'];
$sobrenome = $_GET['b'];
// Exibindo os valores obtidos através da URL
echo $nome.' '.$sobrenome;

// Essa variavel irá receber o ip do usuário
$ip = $_SERVER["REMOTE_ADDR"];
// Exibindo o valor do ip do usuário
echo $ip;

// Essa variável irá receber o caminho do script que está em uso
$script= $_SERVER["SCRIPT_NAME"];
// Exibindo o script em uso
echo $script;


 ?>
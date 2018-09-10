<?php 
/*
Neste exemplo iremos aprender como criar cookies.
Para criar um cookie utilizamos a função setcookie().
Esta recebe 3 parametros, o 1º parâmetro é o nome do cookie
que é o identificador do mesmo, o segundo é o valor do cookie 
que pode ser como o mostrado no exemplo um array ou mesmo um valor padrão
como 10, gremio tri da libertadores ou renato gaúcho é o cara etc, o terceiro
parametro é o tempo que o cookie irá durar na máquina do usuário, caso não definamos
este valor o cookie ira ser eliminado ao fecharmos o browser.
*/

// Criando o array que irá ser o valor do cookie
$data = [
	"ip" => /*Usando a superglobar server para buscar o ip de quem está acessando o site*/$_SERVER['REMOTE_ADDR'],
	];

// Usando a função setcookie
setcookie(/*Criando o nome do cookie =>*/"URLACESSADA",/*Definindo o valor para o cookie =>*/json_encode($data),/*Definindo o tempo de expiração do cookie, em timestamp*/time() + 3600 * 30);

// Exibindo mensagem de sucesso
echo "COOKIE CRIADO COM SUCESSO";

?>
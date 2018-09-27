<?php
// Tipos novos de operadores do PHP 7
/*
Você pode ver na documentação do php pra tirar dúvidas, da uma olhada lá:
https://secure.php.net/manual/pt_BR/migration70.new-features.php
Spaceship = Epaçonave, é usado para comparar se o valor $a é igual, maior ou menor que valor b
caso o valor a seja maior o retorno é 1, caso os dois sejam iguais o retorno é 0 e caso o b seja maior o retorno é 0
*/
$a = 35;
$b = 55;

var_dump($a <=> $b);

 ?>

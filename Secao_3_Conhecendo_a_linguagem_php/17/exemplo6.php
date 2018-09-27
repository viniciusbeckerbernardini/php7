<?php
// Tipos novos de operadores do PHP 7
/*
Você pode ver na documentação do php pra tirar dúvidas, da uma olhada lá:
https://secure.php.net/manual/pt_BR/migration70.new-features.php
Operador null coalescência nula
Usado para tratar valores nulos
*/
$a = null;
$b = 8;
$c = 10;
// o ?? faz com que se o valor for nulo ele pule até que a próxima variável tenha um valor diferente
echo $a ?? $b ?? $c;

?>

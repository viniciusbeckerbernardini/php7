<?php
/*
Neste exemplo iremos falar sobre while, o while diferente dos outros laços não atua com valor definido,
utilizamos uma condição para sua criação e ele irá imprimir até que esta condição seja válida, seja 1 ou 103293 vezes
não precisando que nós especifiquemos isso.
Neste exemplo iremos usar o do while que diferente do while irá executar pelo menos 1 vez.
*/

$total = 200;
$desconto = 0.9;

do{
  $total *= $desconto;
} while ($total > 100);

echo $total;
?>

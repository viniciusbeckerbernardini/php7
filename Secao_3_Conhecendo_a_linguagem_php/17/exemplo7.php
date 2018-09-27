<?php
// Operadores incrementais e decrementais
$a = 10;
$b = 10;
$c = 10;
/* Nesta linha estamos incrementando 1 ao valor de a, ele vai imprimir 10 mas na proxima impressão
de a já teremos o valor acrescido que será 11, é como se fizessemos a seguinte operação: $a = $a+1*/
echo $a++;
echo '<br>';
echo $a;
/* Também podemos acrescer o valor antes da variável ser impressa fazendo com que o primeiro echo já
traga o valor acrescido. */
echo '<br>';
echo ++$b;
echo '<br>';
/* Nesta linha estamos decrescendo 1 ao valor de c, ele vai imprimir 10 mas ná proxima impressão de c já teremos o
valor decrescido de 9, é como se fizessemos a seguinte operação: $c = $c - 1*/
echo $c--;
echo '<br>';
echo $c;
/* Também podemos decrescer o valor antes da variável ser impressa fazendo com que o primeiro echo já
traga o valor decrescido. */
echo '<br>';
echo --$c;
 ?>

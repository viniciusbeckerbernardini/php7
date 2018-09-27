<?php
/*
Neste exemplo iremos falar sobre while, o while diferente dos outros laços não atua com valor definido,
utilizamos uma condição para sua criação e ele irá imprimir até que esta condição seja válida, seja 1 ou 103293 vezes
não precisando que nós especifiquemos isso
*/
$condicao = true;

while ($condicao) {
  $numero = rand(1,10);
  if ($numero === 3){
    echo "três ";
    $condicao = false;
  }else{
    echo $numero.' ';
  }
}
 ?>

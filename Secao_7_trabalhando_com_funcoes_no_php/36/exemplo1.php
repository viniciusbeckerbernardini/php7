<?php
/*
Neste exemplo iremos abordar as funções anonimas e como podemos evocalas, a função anonima como o próprio nome já diz
não possui nome e também não possui return, podemos evocala de  2 maneiras, por meio de parametros e por meio de
variaveis como mostram os exemplos 1 e 2 desta pasta
*/
function test($callback){
  // Processo lento
  $callback();
}

test(function(){
    echo "Terminou!";
});

 ?>

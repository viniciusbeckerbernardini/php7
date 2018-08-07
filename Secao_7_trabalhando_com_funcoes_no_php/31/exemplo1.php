<?php
/*
Neste exemplo iremos falar sobre funções,


Função com return = Função
Função sem return = Subrotina
*/
// Subrotina
/*
Na subrotina criamos igualmente a função propriamente dita apenas com a falta do return,
quando executamos a sub rotina ele faŕa o que estiver dentro do escopo da mesma, no caso o echo "ola mundo"
*/
function ola(){
  echo "Olá mundo<br>";
}

ola();


//Função propriamente dita
/*
Na função propriamente dita nós returnamos uma string ao invés de darmos um echo fazendo com que o valor retorne
sem ser imprimido, se quisermos imprimir teremos que usar o echo fora do escopo quando formos chamar
*/
function ola(){
  return "Olá mundo<br>";
}

echo ola();

/*
Qual a diferença? a diferença é que com o return nós obtemos a liberdade para trazer mais recursos para a função
como usar recursos nela, enviar para o banco de dados, atribuir o return a varaveis, etc.
*/

 ?>

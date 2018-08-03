<?php
/*
Neste exemplo iremos ver como inserir dados dentro de um array usando o array push,
o array push é uma função de inserção de dados no array, essa função é nativa do wordpress
assim como diversas outras, você pode ver melhor na documentação
https://secure.php.net/manual/pt_BR/ref.array.php
A função array push recebe 2 parametros, o primeiro é a variável com o array que irá receber os dados e a segunda
são os próprios dados
*/
// Criando a variável que receberá o array
$pessoas = [];
// Usando o array push para "empurrar os dados para o array"
array_push($pessoas,[
  'Nome'=>'Vinicius',
  'idade'=>19
]);

array_push($pessoas,[
  'Nome'=>'Vinobin',
  'idade'=>25,
]);

//Imprimindo na tela o nome do indice  0 do array, no caso Vinícius  
print_r($pessoas[0]['Nome']);
 ?>

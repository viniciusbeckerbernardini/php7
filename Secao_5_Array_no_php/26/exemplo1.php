<?php 
/*
Nesse exemplo iremos ver sobre JSON, JSON (JavaScript Object Notation) é usado para transportar informações
entre sistemas independente da linguagem. Substituiu o XML pois é mais leve e trafega informações com menos caracteres
Iremos ver funções de JSON como o DECODE e o ENCODE
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
echo json_encode($pessoas);

 ?>
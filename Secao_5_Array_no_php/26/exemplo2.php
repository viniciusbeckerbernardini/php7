<?php 
/*
Nesse exemplo iremos ver sobre JSON, JSON (JavaScript Object Notation) é usado para transportar informações
entre sistemas independente da linguagem. Substituiu o XML pois é mais leve e trafega informações com menos caracteres
Iremos ver funções de JSON como o DECODE e o ENCODE
*/
// Criando a variável que receberá o json encodado
$encoded = '[{"Nome":"Vinicius","idade":19},{"Nome":"Vinobin","idade":25}]'; 
/*
 Transformando o json em array usando o função json decode, essa função recebe 2 parametros
 o primeiro é a variavel que devera ser decodada e o segundo e um boolean que define se irá jogar como array ou como 
 objetos, true para array e false para objetos
*/
$data = json_decode($encoded, true);
var_dump($data);
 ?>
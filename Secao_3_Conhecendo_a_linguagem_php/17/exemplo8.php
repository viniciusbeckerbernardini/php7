<?php
// Prioridade de operadores
/* Neste exemplo como na matemática em si o resultado será 11.5 pois primeiro ele
ira fazer a divisão e depois somar.*/
$resultado = 10 + 3 / 2;
echo $resultado;
/*Caso quisermos dar prioridade a execução de X calculo a frente da ordem natural
iremos usar os ( ) sempre lembrando que diferente da matemática convencional os [] e as {} são usados para
criação e array e aberturas de escopos
*/
// Este resultado será 6.5
echo '<br>';
$resultado = (10 + 3) / 2;
echo $resultado;
// Utilizando a priorização com operadores lógicos
echo '<br>';
// Operador and: Todas as condições precisam ser verdadeiras para ele retornar true
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 30;
// Operador or: alguma das variaveis tem que ser true para ele retornar true
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 30;
var_dump($resultado);

 ?>

<?php 
/*
Neste exemplo iremos falar sobre parametros de função, o parametro de função nada mais é do que um valor que a função requisita ou não quando é chamada, como mostra o exemplo a abaixo, o return da função varia de acordo com o parametro passado
pelo ola("exemplo"), as funções podem ter um parametro ou mais com valores padrão fazendo com que caso o usuário não escreva nada ela não fique sem um dos parametros. Também é importante ressaltar que os valores da direita da função devem ter um valor padrão pois caso não tenham tornam os da esquerda obrigados  a passar um valor na função quando é chamada.
veja mais sobre parametros de funções na documentação completa aqui: 
https://secure.php.net/manual/pt_BR/functions.arguments.php
*/
function ola($texto = "cabra", $numero = 47){
	return "ola $texto <br> Seu numero é : $numero";
}

echo ola("meu cumpim");
echo ola("chuchi", 155);
echo ola("meu querido");

 ?>
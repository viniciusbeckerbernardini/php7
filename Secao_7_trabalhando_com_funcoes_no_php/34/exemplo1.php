<?php 	
/*
Nesse exemplo iremos falar sobre funções e seus tipos de seus novos recursos
o primeiro deles é o recurso de retisencias, ele determina que podemos passar inumeros parametros dentro da função
com tipagem já determinada, como segue o exemplo abaixo, o segundo é a determinação do retorno da função, no exemplo abaixo
estamos informando valores inteiros para a função que por padrão deveria retornar um inteiro, porém, a tipagem do retorno 
converte fazendo um cast e retornando uma string
*/
function soma(int ...$valores):string /*<= Tipo de retorno da função */{
	return array_sum($valores);
}

var_dump(soma(2,2,2,2,2,2,2,2,2,2));
echo '<br>';
echo soma(123812,20392);
echo '<br>';


 ?>
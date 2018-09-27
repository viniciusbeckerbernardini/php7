<?php 

/*Neste exemplo iremos falar sobre constantes, mas, o que é uma constante?
A variável é um espaço alocado na memória que recebe diferente informações, correto? 
A constante também é um espaço alocado na memória só que diferente da variável ela tem um valor
fixo. Podemos criar uma constante usando a função DEFINE(), essa função recebe dois parametros, um para o nome
e o segundo para determinar o valor, ultima serve para para definir se é case sensitive ou não. OBS: UMA CONVENÇÃO DE PHP PARA CONSTANTES É QUE ELAS TENHAM
SEU NOME EM MAIUSCULO.
*/


define("SERVIDOR","123.1.1.0");

echo SERVIDOR;

 ?>
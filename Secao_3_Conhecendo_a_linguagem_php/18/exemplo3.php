<?php
/*
Neste exemplo iremos mostrar algumas funções para substituição de strings
Veja todas as funções na documentação do php: http://php.net/manual/pt_BR/ref.strings.php
*/
$nome = "Vinicius";
$sobrenome = "Becker";
/*
A função str_replace() (String replace ou Substituição de string) é umas
função usada para substituir determinado valor dentro de uma string, a
função recebe 3 parametros sendo o 1º a letra que deve ser substituida, o 2º
a letra que ira substitui-la e o 3º a variável que se encontra a string que deve sofrer a alteração.
*/
$nome = str_replace("u","o",$nome);
$nome = str_replace("V","F",$nome);
// Irá retornar Finicios
echo $nome;
/*
A função substr() é uma função usada para pegar uma parte da string, ela recebe 3 parametros
o 1º é a string que deve ser selecionada, o segundo é a posição onde devemos começar a pegar a string e o
3º é a quantidade de caracteres que devemos pegar da string
*/
$formatSobrenome = substr($sobrenome,0,3);
echo '<br>';
// Ira retornr bec
echo $formatSobrenome;
/*
A função strpos() é uma função usada para buscar a posição da palavra selecionada na string, ela recebe dois
parametros, a string em questão e a palavra que deve ser buscada e ela retorna a posição da mesma
*/
$frase = "Lorem ipsum dort siamet";
$palavra = "ipsum";
$query = strpos($frase, $palavra);
// Retornara 6 que é o numero de casas que contara no array da string até chegar ao ipsum
echo '<br>';
var_dump($query);
/*
A função strlen é uma função usada para contar o número de caracteres que existem em uma string, ela só recebe
1 parametro que é a própria string em questão
*/
// Retornara  que é o número de caracteres da string
echo '<br>';
echo strlen($frase);
// Fazendo um exemplo usando substr, strpos e strlen
$strExample = substr($frase, $query, strlen($frase));
echo $strExample;

 ?>

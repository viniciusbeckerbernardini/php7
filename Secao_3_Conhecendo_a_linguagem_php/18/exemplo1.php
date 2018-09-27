<?php
/*
Neste exemplo iremos ver sobre Strings no PHP
Veja todas as funções na documentação do php: http://php.net/manual/pt_BR/ref.strings.php
*/
/*
Qual afinal é a diferença das aspas duplas para simples se podemos usar ambas que o resultado é o "mesmo"?
Simples, as aspas simples apenas irão ler o texto, e as aspas duplas irão interpretar variáveis caso haja alguma.
*/
$nome = "Vinicius";
$sobrenome = 'Becker';
// Ambas vão retornar como string, padrão.
var_dump($nome);
var_dump($sobrenome);
echo '<br>';
// Mas, se incluirmos alguma variavel nelas, apenas as com aspas duplas irão interpretar
echo "Usando aspas duplas temos: $nome, $sobrenome";
echo '<br>';
echo 'Usando aspas simples temos: $nome, sobrenome';
 ?>

<?php
/*
Neste exemplo iremos mostrar algumas funções úteis para tratamento de strings
Veja todas as funções na documentação do php: http://php.net/manual/pt_BR/ref.strings.php
*/
// Atribuindo o valor as variáveis
$nome = "vinicius becker";
$nomeM = "VINICIUS BECKER";
// Usaremos a função strtoupper (string para maiusculo) para que todas as letras retornem maiusculas
echo strtoupper($nome);
// Usaremos a função strtolower (string para minusculo) para que todas as letras retornem minusculas
echo '<br>';
echo strtolower($nomeM);
/* Usaremos as funções ucfirst (uppercase first ou primeira letra maiuscula) para que
a primeira palavra da string retorne com letra maiuscula e a ucwords (uppercase words ou palavras maiusculas)
para que todas as palavras retornem com a primeira letra maiusculas
*/
// Exemplo ucfirst
echo '<br>';
echo ucfirst($nome);
// Exemplo ucwords
echo '<br>';
echo ucwords($nome);

 ?>

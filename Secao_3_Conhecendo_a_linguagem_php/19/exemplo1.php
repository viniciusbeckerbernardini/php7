<?php
/*
Neste exemplo iremos ver como funcionam as inclusões de arquivos usando o
include, include once e require
Leia a documentação do include completa aqui: http://php.net/manual/pt_BR/function.include.php
Leia a documentação do include once completa aqui: http://php.net/manual/pt_BR/function.include-once.php
Leia a documentação do require completa aqui: http://php.net/manual/pt_BR/function.require.php
Leia a documentação do require once completa aqui: http://php.net/manual/pt_BR/function.require-once.php
*/
/*
O include apenas inclui o arquivo que será invocado, caso ele não existe o sistema nos avisara
Informando que o arquivo que foi incluido está em falta, em suma tem mais recursos do que o require,
Utilizamos o include_once para quando houver multiplas chamadas ele não tenha conflito entre as funções.
*/
include 'inc/includeexemplo1.php';
/*
O require impõe que o arquivo exista e que não tenha erros para a execução do sistema, em suma é mais
seguro que o include pois não permite importação de arquivos remotos, Utilizamos o include_once para
quando houver multiplas chamadas ele não tenha conflito entre as funções. A partir do do PHP7 o erro do require
não traz mais o erro fatal e sim uma exeção no sistema
*/
require 'inc/requireexemplo1.php';

$resultado = somar(10,20);
echo $resultado;

$time = cdb('Grêmio');
echo '<br>';
echo $time;
?>

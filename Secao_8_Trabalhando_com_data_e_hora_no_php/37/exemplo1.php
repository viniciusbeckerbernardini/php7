<?php 
/*
Neste exemplo iremos aprender sobre datas
timestamp conta os segundos de 1/1/1970 até hoje
date() é case sensitive como mostra o exemplo abaixo e aceita como segundo parametro uma data em timestamp
como mostra no exemplo 2 de date, strtotime (string para tempo) converte strings em timestamps e aceita
expressões como now, day, etc.
*/

echo date("d/m/Y H:i:s", 1533743272);
echo '<br>';
echo time();
echo '<br>';
$ts =  strtotime("2001-09-11");
echo '<br>';
echo date('l, d/m/Y',$ts);
echo '<br>';
echo strtotime("now");
echo '<br>';
echo strtotime("day");
 ?>
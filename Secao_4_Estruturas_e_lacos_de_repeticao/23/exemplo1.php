<?php
/*
Neste exemplo iremos aprender sobre foreachs (for each = para cada) que é usado para percorrer
arrays e executar para cada elemento encontrado, o foreach recebe 3 parametros assim como o for,
o 1º parametro é o array que será percorrido, o segundo é como ele será chamado no singular,
assim como no exemplo abaixo em que o nome do array é meses e ele é chamado como mes
*/
$meses = [
  'janeiro',
  'fevereiro',
  'março',
  'abril',
  'maio',
  'junho',
  'julho',
  'agosto',
  'setembro',
  'outubro',
  'novembro',
  'dezembro'
];
// Sem mostrar o índice
foreach ($meses as $mes) {
  echo "O mês é: $mes";
  echo '<br>';
}
echo '<br>';
// Com índice
foreach ($meses as $indice => $mes) {
    echo "O Índice é: $indice";
    echo '<br>';
    echo "O mês é: $mes";
    echo '<br>';
}
 ?>

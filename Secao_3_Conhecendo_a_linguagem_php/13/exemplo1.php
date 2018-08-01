<?php 
// Este exemplo mostra comandos como isset, exit e concatenação de variáveis
// Variáveis
$nomeCompleto = "Vinícius Becker Bernardini";
$profissao = "Analista";
// Fazendo a concatenação entre variaveis
$pessoa = $nomeCompleto.', '.$profissao;
// Exibindo a string
echo $nomeCompleto;
echo '<br>';
echo $pessoa;
// O comando exit faz com que tudo abaixo dele não seja interpretado pelo php
exit;
echo '<br>';
// Limpando a variável $nomeCompleto, após isso ela não tera mais valor na memória
unset($nomeCompleto);
// Usando o comando isset (se está em uso) para exibir a variável após o unset
if(isset($nomeCompleto)){
echo $nomeCompleto;
}else{
  echo "Variável foi limpa.";
}


 ?>

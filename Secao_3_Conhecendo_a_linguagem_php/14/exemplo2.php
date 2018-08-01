<?php
/* 
Neste exemplo iremos ver os tipos de dados primitivos, compostos e especiais do php, são eles:
PRIMITIVOS:
int (Inteiros, ex:15)
String (Caracteres, exemplo:abc)
float (Numeros de ponto flutuante, ex: 15.48)
boolean (verdadeiro ou falso, ex: O Grêmio é o time mais copeiro do brasil? Verdadeiro)

COMPOSTOS:
array (lista, ex: lista de carros)
objetos

ESPECIAIS:
Resource (Abertura de arquivos, exemplo: fopen(Gremio1x0Lanus.mp4))
Null (Valor nulo, não existe na memória)
*/
// Strings
$nome = "Vinícius";
$time = "Grêmio";

//Int's
$qtdCDB = 5;
$qtdLibertadores = 3;
echo "Quantidade de copas do brasil: ".$qtdCDB.". Quantidade de libertadores: ".$qtdLibertadores;
echo '<br>';
// Floats
$mediaDePublicoBR2018 = 26.542;
echo "Média de público: ".$mediaDePublicoBR2018;
echo '<br>';
// Boolean
$perdeuProMazembe = false;
if($perdeuProMazembe == true){
  echo "Time pequeno";
  echo '<br>';
}else{
  echo "Time grande";
  echo '<br>';
}

// Tipos compostos
// ArrayList
$titulos = ["Gaúchão","Recopa"];
// Exibindo array na indice 0
echo $titulos[0];
echo '<br>';
//Objetos
// Acessando o objeto que já existe no php, o datetime, como estamos chamando ele sem parametro ele retornara a data atual
$objeto = new DateTime();
var_dump($objeto);
echo '<br>';

// Resources
// Estamos acessando o arquivo utilizando o metodo fopen
$arquivo = fopen("exemplo1.php", "r");
var_dump($arquivo);

// Null, null é diferente de vázio!!!
$nulo = null;
$vazio = "";
// O NULL realmente não recebe valor enquanto, realmente não existe.  o vázio cria a variavel só não recebeu algum valor ainda.

?>

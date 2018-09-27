<?php 

$file = fopen("log.txt","a+");

fwrite($file, "Teste 123 \r\n");

fclose($file);

echo "Arquivo criado com sucesso";
 ?>
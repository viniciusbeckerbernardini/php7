<?php 
/*
Neste exemplo iremos ver como deletar arquivos. bom, para isso é bem simples, basta usarmos o método unlink(), esse metódo recebe apenas um parametro que é o nome do arquivo que deve ser deletado
*/
// Variável que abre/cria um arquivo
$file = fopen("teste.txt","w+");
// Fecha o arquivo
fclose($file);
// Usando o metodo unlink para excluir o arquivo
unlink("teste.txt");
// Emitindo a mensagem de sucesso
echo "Arquivo removido com sucesso!";

 ?>
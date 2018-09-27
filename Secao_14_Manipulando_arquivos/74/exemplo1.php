<?php 
/*
Neste exemplo iremos ver como podemos mover arquivos no php, 
para fazer isto utilizaremos a função rename(), a função rename 
recebe 2 parâmetros, o primeiro é a alocação atual ou o nome atual do registro,
a segunda é o destino ou o nome futuro do registro, veja mais sobre a função rename 
na documentação oficial: http://php.net/manual/pt_BR/function.rename.php 
*/

// Criando as variáveis que receberão os nomes das pastas
$dir = "pasta1";
$dir2 = "pasta2";
// Criando a variável que receberá o nome do arquivo
$filename = "kumaruusman.champion";

// Verificando se o diretório existe, caso não exista, crialo.
if(!is_dir($dir)){
	mkdir($dir);
}

// Verificando se o diretório existe, caso não exista, crialo.
if(!is_dir($dir2)){
	mkdir($dir2);
}

// Verificando se o arquivo existe no diretório 1, caso não exista crialo e escrever nele
if(!file_exists($dir.DIRECTORY_SEPARATOR.$filename)){
	// Abrinco o arquivo com possibilidade de escrita (caso não exista, ele cria).
	// Arquivo aberto no modo escrita
	$file = fopen($dir.DIRECTORY_SEPARATOR.$filename, "w+");
	// Escrevendo no arquivo
	fwrite($file, "THE NEXT CHAMPION");
	// Fechando arquivo
	fclose($file);
}
/* Utilizando a função rename, 1º parâmetro recebe a localização 
ou o nome do arquivo e o 2º parâmetro recebe a nova(o) localização ou nome do arquivo
*/
rename($dir.DIRECTORY_SEPARATOR.$filename, $dir2.DIRECTORY_SEPARATOR.$filename);
// Imprimindo mensagem de sucesso
echo "Movido com sucesso";
?>
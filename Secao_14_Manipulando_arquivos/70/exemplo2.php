<?php 
// 	Verificando se não existe o diretório images, caso não exista ele cria
if (!is_dir("images")){
	mkdir("images");
}
print_r(scandir("images"));
// Transformando os itens que existem dentro de images em um array
// acessando um a um usando o foreach
foreach (scandir("images") as $item) {
	// Verifcando se não existe no array o item ou os outros 2 pontos
	if(!in_array($item, ['.','..'])){
		// Caso tudo ocorra certo ele excluí todas as fotos que estão no array
		unlink("images".DIRECTORY_SEPARATOR.$item);
	}
}

?>
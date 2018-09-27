<?php 

$filename = "images";

if(!is_dir($filename)){
	mkdir($filename);
	echo "O diretório $filename foi criado com sucesso!";
} else {
	rmdir($filename);
	echo "O diretório $filename já existe, foi removido.";
}

 ?>
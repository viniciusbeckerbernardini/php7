<!-- Formulário para envio de imagens -->
<form method="post" enctype="multipart/form-data">
	<input type="file" name="fileupload">
	<button type="submit">Enviar</button>
</form>


<?php 
/* 
Usando a variável super global server para saber qual 
o 
*/
if($_SERVER["REQUEST_METHOD"] == "POST"){
	// Usando a variável super globas files para criar um arquivo no temporário do servidor com o conteúdo do arquivo enviado
	$file = $_FILES["fileupload"];
	// Verificando se ocorreu algum erro no envio do arquivo
	if($file["error"]){
		// Caso ocorra algum erro disparar exception
		throw new Exception("Erro no envio do arquivo. Erro: ".$file["error"]);
	}
	// Criando o nome do diretório onde o arquivo será armazenado
	$dirUpload = "uploads";
	// Verficando se o diretório existe
	if(!is_dir($dirUpload)){
		// Caso não exista, cria o diretório
		mkdir($dirUpload);
	}
	// Criando condição que envia o arquivo com o nome para o diretório criado anteriormente
	if(move_uploaded_file($file["tmp_name"], $dirUpload.DIRECTORY_SEPARATOR.$file["name"])){
		// Caso tudo dê certo indica mensagem de sucesso
		echo "Upload feito com sucesso!";
	}else{
		// Caso ocorra algum erro joga uma nova excessão
		throw new Exception("Erro no upload");
		
	}
}

	?>
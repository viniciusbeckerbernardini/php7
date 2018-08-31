<form method="post" enctype="multipart/form-data">
	<input type="file" name="fileupload">
	<button type="submit">Enviar</button>
</form>


<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$file = $_FILES["fileupload"];

	if($file["error"]){
		throw new Exception("Erro no envio do arquivo. Erro: ".$file["error"]);

	}

	$dirUpload = "uploads";

	if(!is_dir($dirUpload)){
		mkdir($dirUpload);
	}

	if(move_uploaded_file($file["tmp_name"], $dirUpload.DIRECTORY_SEPARATOR.$file["name"])){
		echo "Upload feito com sucesso!";
	}else{
		throw new Exception("Erro no upload");
		
	}
}

	?>
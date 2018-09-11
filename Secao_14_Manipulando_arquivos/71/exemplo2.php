<?php 	
/*
Neste exemplo iremos falar sobre arquivos com base64, mas, para que serve o base64
o base64 é um tipo de criptografia que pode ser usada em senhas, arquivos, nomes etc,
mas também é muito usado para carregamento de imagens pois uma vez que está salva no servidor 
podemos usar o código da imagem em base 64 para apenas renderizar ela no dispositivo do usuário
poupando assim muito do tempo de carregamento do site
*/
// Variável que irá armazenar no nome do arquivo
$filename = "logo.png";
// Usando metódo base64_encode junto do file get contents para encriptar em base64 o conteúdo da imagem
$base64 = base64_encode(file_get_contents($filename));

// Criando uma instância da classe nativa do php finfo (file info) carregando a constante FILEINFO_MIME_TYPE
$fileinfo = new finfo(FILEINFO_MIME_TYPE);
// Acessando a função file para carregar as informações do arquivo (tipo de arquivo/ formato)
$mimetype = $fileinfo->file($filename);
// Variável que irá receber o conteúdo da imagem em base64
$base64Enconded = "data:".$mimetype.";base64, ".$base64;
?>
<!-- Criando um link para acessar a url da imagem já renderizada -->
<a href="<?=$base64Enconded?>" target="_blank">Img</a>
<!-- Renderizando a imagem direto do servidor, ela não foi baixada -->
<img src="<?=$base64Enconded?>" alt="">
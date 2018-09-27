<?php 

// Defini o tipo de arquivo que será criado, precisa estar com tudo pronto para funcionar
header("Content-Type: image/png");

// a função imagecreate defini o tamanho da area de desenho da imagem
$img = imagecreate(1024,1024);

// a função image color allocate defini a cor sendo a primeira declarada a padrão do fundo da imagem
$black = imagecolorallocate($img, 0, 0, 0);
$red = imagecolorallocate($img, 255, 0, 0);

// Defini o que vai ser escrito na imagem
// imagestring(caminho da imagem, tamanho da fonte , eyxo x, eyxo y, texto, cor do texto);
imagestring($img, 12, 60, 120, "TO FAZENDO IMAGEM CARAIO", $red);
// Gera a imagem, claro que nesse caso png, mas há como gerar em outros formatos
// jpeg ou jpg => imagejpeg(image)
// gif =>imagegif(image)
imagepng($img);
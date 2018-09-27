<?php 

// Defini o tipo de arquivo que será criado, precisa estar com tudo pronto para funcionar
header('Content-Type: image/jpeg');

// função que cria imagem a partir de outra imagem, recebe como parametro o caminho da mesma
$img = imagecreatefromjpeg('certificado.jpg');

// a função image color allocate defini a cor sendo a primeira declarada a padrão do fundo da imagem
$titlecolor = imagecolorallocate($img ,0, 0, 0);
$gray = imagecolorallocate($img, 100, 100, 100);

// Função para escrever utilizando outro tipo de fonte que seja ttf
// imagettftext(image, size, angle, x, y, color, fontfile, text)
imagettftext($img, 32,0, 450, 150, $titlecolor,'fonts'.DIRECTORY_SEPARATOR.'Bevan'.DIRECTORY_SEPARATOR.'Bevan-Regular.ttf', 'Certificado');
imagettftext($img, 32, 0, 440, 350, $titlecolor,'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', 'Seu cuca');
imagestring($img, 7, 450, 370, utf8_decode('Concluído em'.date('d/m/Y')), $titlecolor);
// Criando imagem
imagejpeg($img);
// Destruindo espaço de memória que foi alocado para a criação da imagem
imagedestroy($img);

 ?>
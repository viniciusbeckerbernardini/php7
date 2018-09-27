<?php 


// Defini o tipo de arquivo que será criado, precisa estar com tudo pronto para funcionar
header('Content-Type: image/jpeg');

// função que cria imagem a partir de outra imagem, recebe como parametro o caminho da mesma
$img = imagecreatefromjpeg('certificado.jpg');

// a função image color allocate defini a cor sendo a primeira declarada a padrão do fundo da imagem
$titlecolor = imagecolorallocate($img ,0, 0, 0);
$gray = imagecolorallocate($img, 100, 100, 100);


// Defini o que vai ser escrito na imagem
// imagestring(caminho da imagem, tamanho da fonte , eyxo x, eyxo y, texto, cor do texto);
imagestring($img, 12, 60, 120, "TO FAZENDO IMAGEM CARAIO", $red);
imagestring($img, 5, 450, 150, 'Certificado', $titlecolor);
imagestring($img, 5, 440, 350, 'Seu cuca', $titlecolor);
imagestring($img, 7, 450, 370, utf8_decode('Concluído em'.date('d/m/Y')), $titlecolor);


// Salva nova imagem 
imagejpeg($img, "certificado-".date('Y-m-d').".jpg",100);
// Destói espaço de memória que foi alocado para a criação da imagem
imagedestroy($img);

 ?>
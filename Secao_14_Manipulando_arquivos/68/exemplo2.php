<?php 

$images = scandir("images");

$data = [];

foreach ($images as $v) {
	if(! in_array($v, ['.','..'])){
		$filename = "images".DIRECTORY_SEPARATOR.$v;
		$info = pathinfo($filename);
		$info['size'] = filesize($filename);
		$info['last_modification'] = date('d/m/Y H:i:s',filemtime($filename));
		$info['url'] = 
		'http://localhost/php7/Secao_14_Manipulando_arquivos/68/'.str_replace("\\","/",$filename);
		array_push($data,$info);
	}
}
echo json_encode($data);

 ?>
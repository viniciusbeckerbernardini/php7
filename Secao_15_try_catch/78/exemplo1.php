<?php 

// Função pra trazer erro formatado caso ocorra
function error_handler($code,$message,$file,$line){
	// retornando um json 
	echo json_encode([
		'code'=>$code,
		'message'=>$message,
		'file'=>$file,
		'line'=>$line
	]);
}
// Usando a função set handle error para que quando aconteça um erro ele o envie em forma de parametros para a função especificada em string
set_error_handler('error_handler');

// Error que gerara o handler
echo 100 / 0;
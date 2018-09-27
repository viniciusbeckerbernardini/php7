<?php 
// Usando o try catch
// O try tentara executar tudo que estiver dentro dele
try{
	throw new Exception("Houve um erro", 400);
}
// Caso ocorra um erro ele será armazenado no catch, instanciamos a classe Exception dentro da variavel $e para que possamos tratar este erro
catch(Exception $e){
	// Imprimindo um json com os dados acessados através da classe Exception que esta instanciada na variavel $e
	echo json_encode([
	'message'=>$e->getMessage(),
	'line'=>$e->getLine(),
	'file'=>$e->getFile(),
	'code'=>$e->getCode()
	]);
}
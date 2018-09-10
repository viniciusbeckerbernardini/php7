<?php 

$data = [
	"urlAcessada" => $_SERVER['REMOTE_ADDR'],
	];

setcookie("URLACESSADA",json_encode($data),time() + 3600 * 30);

echo "COOKIE CRIADO COM SUCESSO";
 ?>
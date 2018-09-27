<?php 

// Buscando na máquina usando a superglobar $_cookie se existe o cookie ip
if(isset($_COOKIE['ip'])){
	// Buscando o valor do cookie ip
	$jd = json_decode($_COOKIE['URLACESSADA']);
	// Exibindo o mesmo na tela em forma de objeto
	print_r($jd->urlAcessada);

}

 ?>
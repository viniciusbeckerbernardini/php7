<?php 

if(isset($_COOKIE['URLACESSADA'])){

	$jd = json_decode($_COOKIE['URLACESSADA']);
	print_r($jd->urlAcessada);

}

 ?>
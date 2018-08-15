<?php 

$connection = new mysqli("localhost","root","","dbphp7");

if($connection->connect_error){
	echo "Erro na conexão $connection->connect_error";
	
}

$statemencht = $connection->prepare("INSERT INTO tb_usuario (deslogin,dessenha) VALUES(?, ?)");

$statemencht->bind_param("ss", $login , $pass );

$login = "Milton";

$pass = "1235";

$statemencht->execute();


$login = "Barin";

$pass = "denin";

$statemencht->execute();

 ?>
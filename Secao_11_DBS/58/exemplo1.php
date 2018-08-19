<?php 


$conn = new PDO('mysql:host=localhost;dbname=dbphp7','root','');
// statement = Comando
$statement = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = 'José';
$password = '164864';

$statement->bindParam(":LOGIN",$login);
$statement->bindParam(":PASSWORD",$password);

$statement->execute();

echo "Dados cadastrados!";

 ?>
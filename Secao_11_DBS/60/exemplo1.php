<?php 


$conn = new PDO('mysql:host=localhost;dbname=dbphp7','root','');
// statement = Comando
$statement = $conn->prepare("DELETE FROM tb_usuarios where idusuario = :ID ");

$login = 'Jaba';
$password = 'dawuiodh';
$id= 2 ;

$statement->bindParam(":ID",$id);

$statement->execute();

echo "Dados deletados!";

 ?>	
<?php 


$conn = new PDO('mysql:host=localhost;dbname=dbphp7','root','');
// statement = Comando
$statement = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID ");

$login = 'Jaba';
$password = 'dawuiodh';
$id= 1 ;


$statement->bindParam(":LOGIN",$login);
$statement->bindParam(":PASSWORD",$password);
$statement->bindParam(":ID",$id);

$statement->execute();

echo "Dados alterados!";

 ?>
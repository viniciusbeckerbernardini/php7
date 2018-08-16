<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuario");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$formatR = json_encode($results);
print_r($formatR);
 ?>
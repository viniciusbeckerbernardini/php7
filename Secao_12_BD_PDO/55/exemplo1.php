<?php 
// Php Data Objects
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$formatR = json_encode($results);
print_r($formatR);
 ?>
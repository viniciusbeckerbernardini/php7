
<?php 

$connection = new mysqli("localhost","root","","dbphp7");

if($connection->connect_error){
	echo "Erro na conexão $connection->connect_error";
	
}


$query = $connection->query("SELECT * FROM tb_usuario");
$data = [];
while($row = $query->fetch_assoc()){
	array_push($data,$row);
}

echo json_encode($data);

 ?>
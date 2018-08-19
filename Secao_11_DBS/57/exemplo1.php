<?php 

/*
Nest exemplo iremos aprender como conectar ao banco de dados sqlserver usando pdo. 
Semelhante a conexão com mysql, mas mudaremos os parametros que passam por dentro 
do construct do pdo, são 3 parametros, o primeiro iremos definir o tipo de banco de dados,
nome do banco de dados, servidor do banco de dados\Instância do sql server, também por ultimo recebe 
o termo connectionpooling, o que é o connection pooling? é o cache de uma conexão com o banco de dados, ele recebe
0 para que não aja manutenção do estado de coexão e 1 para que aja, isso é muito usado em aplicações multithread,
 o segundo parâmetro é o nome do usuário que irá acessar o banco de dados e o terceiro por fim é a senha de acesso do usuário, feito isso a conexão será criada como mostra 
o exemplo abaixo
*/

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");

$stmt = $conn->prepare("SELECT * FROM tb_usuario");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$formatR = json_encode($results);

print_r($formatR);
 ?>

<?php 
$conn = new PDO('mysql:host=localhost;dbname=dbphp7','root','');
// statement = Comando

// Transação está amarrada a conexão e não ao statement
$conn->beginTransaction();

$statement = $conn->prepare("DELETE FROM tb_usuarios where idusuario = ?");
// Exibir os dados
$statementS = $conn->prepare("SELECT * FROM tb_usuarios");
// Informando o id do usuario que sera exluido
$id = 16;
// Executando essa merda
$statement->execute([$id]);
// FAZENDO O ROLLBACK, SÓ QUE ESSA MERA N FUNCIONA CARALHO PORRA DOS INFERNO
// Só funciona com tipo de tabela innodb, padrão myisam, muda no phpmyadmin
//$conn->rollback();
// Agora ele funciona e deleta na botinha
$conn->commit();
// Executando busca
$statementS->execute();
echo "Dados deletados!";
$results = $statementS->fetchAll(PDO::FETCH_ASSOC);
$formatR = $results;
foreach ($formatR as $a ) {
	echo '<br>';
	print_r($a);
	echo '<br>';
}

 ?>	
<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Teste de template</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>teste de template</h1>
	<h2>o dev aqui é o <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?> meu cupinxa</h2>
	<h3>e a versão do php é a <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
</body>
</html>
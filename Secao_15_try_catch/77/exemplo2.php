<?php 
// Criando uma função para testar nome
function trataNome($name){
	if(!$name){
		throw new Exception("Nenhum nome foi informado", 1);
	}
	echo ucfirst($name);
}

// O try tentara excutar das duas vezes
try{
	// Nessa ok
	trataNome('Vini');
	// Nessa estourou o exception
	trataNome('');
}
// E o catch pegou o mesmo
catch(Exception $e){
	// Imprimiu a mensagem do erro
	echo '<br>'.$e->getMessage();
}
// Independente de tudo o finally é executado, muito util para enviar uma mensagem com o erro para o administrador por exemplo
finally{
	echo "<br>Executou o bloco try";
}
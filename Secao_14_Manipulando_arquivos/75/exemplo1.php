<!-- Formulário para inserção de CPF -->
<form method="post">
	<input type="text" name="cep">
	<input type="submit">
</form>


<?php 
/*
Neste exemplo iremos falar sobre cURL. para que serve as cURL? Servem básicamente para distribuir informações para diversos sistemas sem ter que criar uma api para cada um deles, são rápidas, geralmente não mudam sua estrutura e podem ser consumidas por diversas linguagens de programação.
*/
// Criando uma váriavel que receberá o valor de cep
$cep = $_POST['cep'];
// Criando a variável que receberá o link da api
$link = "https://viacep.com.br/ws/"./*Passando a variável de cep=>*/$cep."/json/";
// Inicializando a conexão cURL através da função curl_init(), ela recebe como parametro o link da api
$ch = curl_init($link);
// usando a função curl_setopt podemos definir opções para a operação
// Nesta opção podemos ver que estamos dizendo que iremos enviar um valor e esperamos um retorno
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
// Nesta estamos dizendo que não queremos verificar o ssl do link
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
// Armazenando o conteúdo da cURL que vem do curl_exec() que recebe o conteúdo da api
$response = curl_exec($ch);
// Fechando a conexão com o curl_close()
curl_close($ch);
// Transformando o response do curl em um array
$data = json_decode($response,true);
// Acessando o indice de logradouro para trazer somente o nome da rua 
print_r($data['logradouro']);

?>
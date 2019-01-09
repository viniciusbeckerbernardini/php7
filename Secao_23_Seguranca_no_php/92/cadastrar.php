<?php 
// Como executar reCaptcha
// Variavel via post
$email = $_POST['email'];
// Iniciando o cURL
$ch = curl_init();
// Colocando as opções 
// CURLOPT_URL Diz onde será feita a requisição do cURL
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
// Anula a verificação de ssl
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
// Anula a verificação do ponto do ssl
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// Passa via post os campos necessários
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query([
"secret"=>"6Le8TIgUAAAAAHXwfR2s5G6vbXzSvqEwCQEYgdEH",
"response"=>$_POST['g-recaptcha-response'],
"remoteip"=>$_SERVER['REMOTE_ADDR']
]));
// Returna os resultados
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Abriga na variavel a execução do cURL
$recaptcha = json_decode(curl_exec($ch),true);
// Fecha a conexão 
curl_close($ch);
// Faz validação
if($recaptcha['success'] == true){
	echo "Deu certo";
}else{
	header("Location: exemplo1.php");
}

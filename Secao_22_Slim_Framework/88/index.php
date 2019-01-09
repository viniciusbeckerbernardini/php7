<?php 
require_once("vendor/autoload.php");
$app = new \Slim\Slim();

$app->get('/',function(){
	echo "Home page";
	echo "Vai pro <a target='_blank' href='https://google.com'> GOOGLE</a>  meu cupinxeira";
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();
 
?>
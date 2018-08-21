<?php 
require_once('config.php');
// Carregando pelo id
$user = new Usuario();
// $user->loadById(3);
// echo $user;
// echo '<hr>';
// $list = Usuario::listGenerator();
// echo json_encode($list);
// echo '<hr>';
// $listByName = Usuario::searchByName('r');
// echo json_encode($listByName);
// echo '<hr>';
// $user->login("Ratao","164864");
// echo $user;
// echo '<br>';
$user->setDesLogin("swdwd");
$user->setDesSenha("daiowdjawoijd");
$user->insert();

echo $user;
 ?>
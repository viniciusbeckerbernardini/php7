<?php 	
require_once('config.php');

session_unset($_SESSION['nome']);
session_destroy();

echo $_SESSION["nome"];

 ?>
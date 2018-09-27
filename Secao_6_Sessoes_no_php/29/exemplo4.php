<?php
require_once("config.php");


// Essa função é ideal para validação de login, para que o usuário seja re-autenticado e assim evita ataques hackers
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

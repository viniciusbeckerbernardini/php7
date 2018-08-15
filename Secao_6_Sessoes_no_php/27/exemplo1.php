<?php
/*
Neste exemplo vamos falar sobre funções para sessões,
veja as funções completas neste link:
http://php.net/manual/pt_BR/ref.session.php
*/
session_start();
echo session_save_path();
echo session_status();
switch(session_status()){
  case 0:
  echo "PHP_SESSION_DISABLED";
  break;
  case 1:
  echo "PHP_SESSION_NONE";
  break;
  case 2:
  echo "PHP_SESSION_ACTIVE";
}
?>

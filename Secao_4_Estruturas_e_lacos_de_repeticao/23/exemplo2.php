<form>
  <input type="text" name="nome">
  <input type="date" name="nascimento">
  <input type="submit" name="OK">
</form>
<?php
if(isset($_GET)){
  foreach ($_GET as $key => $value) {
    echo '<br>';
    echo "Nome do campo: $key";
    echo '<br>';
    echo "Valor do campo: $value";
    echo '<br>';
    echo '<hr>';
  }
}else{
  echo "<br>";
  echo "Digite para ver os valores";
}
 ?>

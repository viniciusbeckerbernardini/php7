<?php 

spl_autoload_register(function($className){
	$dirClass = "model";
	$filename = $dirClass.DIRECTORY_SEPARATOR."$className.class.php";
	if(file_exists($filename)){
		require_once($filename);
	}
});

 ?>
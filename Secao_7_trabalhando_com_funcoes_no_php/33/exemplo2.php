<?php 	

$pessoa = ['Nome'=>'Vinicius','Idade'=>19];

foreach($pessoa as &$dado){
	if(gettype($dado) === 'integer'){
		$dado +=10;
	}
	echo $dado;
}
print_r($pessoa);
 ?>
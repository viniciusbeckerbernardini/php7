<?php 
/*
Neste exemplo iremos falar de interfaces, interfaces são 
mascaras que definem o que é obrigatório ser implementado em quem as implementa
ex: classes. Nesse exemplo podemos ver que estamos dizendo que para criar uma classe
que implementa a interface de veículo é necessário que a classe possua estes 3 metódos 
para que o php compile a mesma, caso ela não atenda algum ou nenhum desses o código não 
compila e da pau.
*/

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function marcha($nMarcha);

}

 ?>
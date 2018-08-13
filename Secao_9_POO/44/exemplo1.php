<?php
/*
Neste exemplo vemos algums metódos mágicos do php, mas, o que são metódos mágicos? 
Metódos mágicos são metódos já próprios do core do php que nos auxiliam a fazer alguma 
determinada função, exemplo, o metódo __construct é usado para criar os contrutores, para que servem os construtores? os contrutores server oara que possamos passar parametros logo na 
criação da classe e que eles sejam atribuidos a atributos setados pelo construtor, para isso
serve o metódo "__construct", também temos o metódo "__destruct" que faz exatamente o oposto, destói essas variáveis que receberam o valor da memória. Usado para finalizar transações por exemplo. 
Temos o metodo "__toString()" que é usado para retornar alguma coisa quando nos fazemos um echo da classe por exemplo, a classe por padrão não possui retorno, o __toString serve para que quando façamos essa ação ele retorne algo, no caso o __toString(), também possuímos os metódos mágicos set e get que servem para simplificar os gets e sets comums que usamos para cada atributo de nossa classe o que acaba na maioria das vezes deixando a classe muito grande, usando os métodos "__get()" e "__set()" nós criamos 1 para todos, usar os gets e sets mágicos também nos permitem acessar atributos privados diretamente sem precisar passar por um setNome() e um getNome() por exemplo. Como mostra o exemplo abaixo.
*/
class Endereco{
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a = null,$b = null,$c = null){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){
		var_dump("Destruindo");
	}

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo = $valor;
	}

	public function __toString(){
		return nl2br("logradouro: $this->logradouro
					  numero: $this->numero
					  cidade: $this->cidade");			
	}
}


$meuEndereco = new Endereco('Rua dos Alfanereiros', 123, 'Nova Jersey');

print_r($meuEndereco);
echo '<br>';
echo $meuEndereco;
echo '<br>';
echo '<pre>';
var_dump($meuEndereco);
echo '</pre>';

unset($meuEndereco);


echo '<br>';
$meuEnderecoSemConstrutor  = new Endereco();
$meuEnderecoSemConstrutor->numero = "oi";
echo '<br>';
echo $meuEnderecoSemConstrutor->numero;
echo '<br>';



 ?>
<?php 
/*
Neste exemplo iremos falar sobre herança, a herança é usada para que arquivos filho tenham acessos a arquivos pai, é importante destacar que para atributos private nós não podemos herdalos diretamente, apenas quando são protected ou public, também é importante destacar que as funções quando publicas trazem os metódos private nelas inseridas da classe pai para a filha. Não se pode acessar nada da classe filha a partir da classe pai e sim somente o contrário, da classe filha podemos acessar a classe pai. 
A palavra chave para criar uma classe filho é a "extends", ex: 

Mundial1983 extends GremioCampeaoNoJapaoEmCimaDosAlemao  {}

*/
class Documento{
	private $numero;


	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($v){
		$this->numero = $v;
	}
}

class CPF extends Documento{

	public function validar():bool{
		$numeroCPF = $this->getNumero();
		// Aqui vai a validação do cpf
		return true;
	}
}

$doc = new CPF();

$doc->setNumero('123131314141');

var_dump($doc->validar());
echo '<br>';
echo $doc->getNumero();

 ?>
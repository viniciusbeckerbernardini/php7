<?php 
/* 
Neste exemplo iremos falar de namespaces, mas, o que são namespaces? 
Namespaces nada mais são do que espaços reservados onde podemos criar e organizar 
classes em subpastas mesmo que elas tenham o mesmo nome de classes de pastas raízes, 
digamos que você queira criar um cadastro que tenha valores padrão (como nesse exemplo), mas,
existirão mais tipos de cadastro do que apenas aquele e ele será apenas o minímo que é necessário para se cadastrar (por exemplo), para que possamos especificar cada tipo de cadastro nós criariamos subpastas com o nome de cada tipo (cliente,fornecedor,etc) mas para que não haja conflito entre 
as classes (devido ao nome) usamos o namespace, no caso dessa podemos ver que é o nome desta classe é cadastro mas ela está dentro do namespace cliente sendo assim cadastro próprio para cliente mesmo que herde os atributos padrão de cadastro.
*/
namespace Cliente;

class Cadastro extends /* o "\" é usado para indicar caminho, caso não tivesse ela ele ia estender a classe de si próprio. */\Cadastro {
	

	private $epica;

	public function getEpica(){
		return $this->epica;
	}

	public function setEpica($v){
		$this->epica = $v;
	}

	public function registrarVenda(){
		if ($this->getEpica() == "sim") {
			echo "O vendedor ".$this->getNome()." é uma pica, ";
		}
		echo "Foi registrado uma venda pelo cliente :".$this->getNome();
	}	 
}

?>
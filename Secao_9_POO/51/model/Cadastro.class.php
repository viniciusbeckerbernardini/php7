<?php 

class Cadastro{
	private $nome;
	private $email;
	private $senha;

	public function getNome():string{
		return $this->nome;
	}

	public function setNome($valor){
		$this->nome = $valor;
	}
	public function getEmail():string{
		return $this->email;
	}

	public function setEmail($valor){
		$this->email = $valor;
	}
	public function getSenha():string{
		return $this->senha;
	}

	public function setSenha($valor){
		$this->senha = $valor;
	}

	public function __toString(){
		return json_encode(['Nome'=>$this->getNome(),
			'E-mail'=>$this->getEmail(),
			'Senha'=>$this->getSenha()]);
	}



}

?>
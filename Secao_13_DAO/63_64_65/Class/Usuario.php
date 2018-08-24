<?php 
// Criando a classe usuário
class Usuario{
	// Criando as variáveis da classe usuário
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;
	// Criando os métodos get e set das variáveis da classe
	public function getIdUsuario(){
		return $this->idusuario;
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function setIdUsuario($v){
		$this->idusuario = $v;
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function getDesLogin(){
		return $this->deslogin;
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function setDesLogin($v){
		$this->deslogin = $v;
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function getDesSenha(){
		return $this->dessenha;
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function setDesSenha($v){
		$this->dessenha = $v;
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function getDtCadastro(){
		return $this->dtcadastro;
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function setDtCadastro($v){
		$this->dtcadastro = $v;
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function setData($data){
		$this->setIdUsuario($data['idusuario']);
		$this->setDesLogin($data['deslogin']);
		$this->setDesSenha($data['dessenha']);
		$this->setDtCadastro(new DateTime($data['dtcadastro']));
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public static function listGenerator(){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public static function searchByName($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin",array(
			':SEARCH'=>"%".$login."%"
		));
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function login($login,$password){
		$sql = new Sql; 
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD",
			array(":LOGIN"	=> $login,
				":PASSWORD" => $password));

		if(count($results)>0){
			$this->setData($row = $results[0]);
		} else{
			throw new Exception("Vai ti esconde jaguatirica", 1);
		}
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function loadById($id){
		$sql = new Sql; 
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario= :ID",
			array(":ID"	=> $id));
		if(count($results)>0){
			$this->setData($row = $results[0]);
		}
	}


	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function insert(){
		$sql = new Sql;
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			':LOGIN'=>$this->getDesLogin(),
			':PASSWORD'=>$this->getDesSenha()
		));

		if(count($results) > 0 ){
			$this->setData($results[0]);
		}
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function update($login,$password){
		$this->setDesLogin($login);
		$this->setDesSenha($password);
		$sql = new Sql();
		$sql->query("UPDATE tb_usuarios  SET deslogin  = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID", [
			':LOGIN'=> $this->getDesLogin(),
			':SENHA'=> $this->getDesSenha(),
			':ID'=> $this->getIdUsuario()
		]);
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function delete(){
		$sql = new Sql();
		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID",
			[':ID'=>$this->getIdUsuario()]);
		$this->setIdUsuario(null);
		$this->setDesLogin(null);
		$this->setDesSenha(null);
		$this->setDtCadastro(null);
	}

	/**
	* PHP DOC DA FUNÇÃO
	*/

	public function __toString(){
		return json_encode([
			"idusuario"=>$this->getIdUsuario(),
			"deslogin"=>$this->getDesLogin(),
			"dessenha"=>$this->getDesSenha(),
			"dtcadastro"=>$this->getDtCadastro()
		]);
	}
}
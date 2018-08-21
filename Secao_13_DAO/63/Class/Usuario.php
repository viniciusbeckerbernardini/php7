<?php 

class Usuario{
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdUsuario(){
		return $this->idusuario;
	}

	public function setIdUsuario($v){
		$this->idusuario = $v;
	}
	public function getDesLogin(){
		return $this->deslogin;
	}

	public function setDesLogin($v){
		$this->deslogin = $v;
	}
	public function getDesSenha(){
		return $this->dessenha;
	}

	public function setDesSenha($v){
		$this->dessenha = $v;
	}
	public function getDtCadastro(){
		return $this->dtcadastro;
	}

	public function setDtCadastro($v){
		$this->dtcadastro = $v;
	}

	public static function listGenerator(){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
	}

	public static function searchByName($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin",array(
			':SEARCH'=>"%".$login."%"
		));
	}

	public function login($login,$password){
		$sql = new Sql; 
		// $sql = prepare("SELECT * FROM tb_usuarios WHERE idusuario=$id");
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD",
			array(":LOGIN"	=> $login,
				  ":PASSWORD" => $password));

		if(count($results)>0){
			$row = $results[0];

			$this->setIdUsuario($row['idusuario']);
			$this->setDesLogin($row['deslogin']);
			$this->setDesSenha($row['dessenha']);
			$this->setDtCadastro(new DateTime($row['dtcadastro']));
		} else{
			throw new Exception("Vai ti esconde jaguatirica", 1);
		}
	}

	public function loadById($id){
		$sql = new Sql; 
		// $sql = prepare("SELECT * FROM tb_usuarios WHERE idusuario=$id");
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario= :ID",
			array(":ID"	=> $id));

		if(count($results)>0){
			$row = $results[0];

			$this->setIdUsuario($row['idusuario']);
			$this->setDesLogin($row['deslogin']);
			$this->setDesSenha($row['dessenha']);
			$this->setDtCadastro(new DateTime($row['dtcadastro']));
		}
	}

	public function setData($data){
		$this->setIdUsuario($data['idusuario']);
		$this->setDesLogin($data['deslogin']);
		$this->setDesSenha($data['dessenha']);
		$this->setDtCadastro(new DateTime($data['dtcadastro']));
	}

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

	public function __toString(){
		return json_encode([
		"idusuario"=>$this->getIdUsuario(),
		"deslogin"=>$this->getDesLogin(),
		"dessenha"=>$this->getDesSenha(),
		"dtcadastro"=>$this->getDtCadastro()
		]);
	}
}
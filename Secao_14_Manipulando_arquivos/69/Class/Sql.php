<?php 
// Data Acess Object = DAO

class Sql extends PDO{

	private $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
	}

	private function setParams($statements,$parameteres = []){
		foreach ($parameteres as $k => $v) {
			$this->setParam($statements,$k,$v);
		}
	}

	private function setParam($statement,$key,$value){
		$statement->bindParam($key,$value);
	}

	public function query($rawQuery,$params = []){
		$statement = $this->conn->prepare("$rawQuery");
		$this->setParams($statement,$params);
		$statement->execute();
		return $statement;
	}

	public function select($rawQuery,$params = []):array{
		$statement = $this->query($rawQuery,$params);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
}

 ?>
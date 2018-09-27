<?php 
/*
Neste exemplo vemos como usamos metodos estaticos, diferente dos normais, eles são acessados 
através de :: e não de -> e tem a palavra static reservada antes do nome, podem ser acessados sem 
criamos a instância da classe também, recebem como parametro (nesse caso, é claro) o valor da variavel 
que deve passar por ele
*/
class Documento{
	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($cpf){
		$resultado = Documento::validaCpf($cpf);
		if($resultado == true){
		$this->numero = $cpf;
		}else{
		throw new Exception("Tu é um vacilão", 1);
		}
	}

	public static function validaCpf($cpf):bool{
		if(empty($cpf)) {
			return false;
		}

		$cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


		if (strlen($cpf) != 11) {
			echo "length";
			return false;
		}

		else if ($cpf == '00000000000' || 
			$cpf == '11111111111' || 
			$cpf == '22222222222' || 
			$cpf == '33333333333' || 
			$cpf == '44444444444' || 
			$cpf == '55555555555' || 
			$cpf == '66666666666' || 
			$cpf == '77777777777' || 
			$cpf == '88888888888' || 
			$cpf == '99999999999') {
			return false;

	} else {   

		for ($t = 9; $t < 11; $t++) {

			for ($d = 0, $c = 0; $c < $t; $c++) {
				$d += $cpf{$c} * (($t + 1) - $c);
			}
			$d = ((10 * $d) % 11) % 10;
			if ($cpf{$c} != $d) {
				return false;
			}
		}

		return true;
	}		
}
}

$cpf = new Documento();
$cpf->setNumero("123464847684684");

var_dump($cpf->getNumero());

?>

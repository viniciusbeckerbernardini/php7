<?php 
/* 
Neste exemplo iremos falar de abertura de arquivos no php. 
*/
// Criando a variável que receberá o nome do arquivo que deverá ser aberto
$filename = "usuarios.csv";
// Verificando se o arquivo existe
if(file_exists($filename)){
	// Caso o arquivo não exita ele cria o arquivo com permissão de leitura
	$file = fopen($filename,"r");
	// Criando os cabeçalhos, explodindo as virgulae transformando o ponteiro em um array
	$headers = explode(",",fgets($file));
	// Criando um array para que possamos inserir arquivos nele
	$data = array();
	/* 
	Criando um loop usando uma variável que recebe o valor do fgets
	Enquanto esta variável receber este valor que é verdadeiro o loop continua
	Caso não tenha mais nada dentro do fgets ele para de ir para row e para o loop
	*/
	while($row = fgets($file)){
	// Criando as variáveis para ler as linhas do csv
		// Explodindo as linhas do csv e tornando as um array
		$rowData = explode(",",$row);
		// Criando a variável linha para que possamos inserir valores dentro dela 
		$linha = array();

		// Criando um for para que possamos ler as linhas campo a campo dentro do arquivo
		/*
		$i = contador
		count($headers) vê o numero de ponteiros que tem no array headers
		$linha[$headers[$i]] faz com que se alinhe o número da linha com o número 
		do cabeçalho para que seja recebido o valor no endereço correto do array
		$rowData é o número do array igual ao de headers para que seja inserido 
		no array de forma correta.
		*/
		for($i = 0; $i < count($headers); $i++){
			
			$linha[$headers[$i]] = $rowData[$i];

		}
		// Inserindo os dados coletados no array $data
		array_push($data,$linha);
	}
	// Fechando o arquico $file
	fclose($file);
	// Imprimindo um json com o arquivo criado
	echo json_encode($data);
}



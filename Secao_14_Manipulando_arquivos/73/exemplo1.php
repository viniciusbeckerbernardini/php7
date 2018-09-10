<?php 
/*
Neste exemplo veremos como podemos usar o metódo file_get_contents, 
e para que serve o file get contents? como o nome diz, para pegar o conteúdo de um arquivo basicamente. a sacada é que como podemos ver no exemplo abaixo ele pega o conteúdo mesmo, ou seja, não pega a imagem e sim o código que gerá a imagem, por isso temos que tratar o conteúdo para escrever o arquivo de maneira correta senão fica inútil
*/
// Variável que irá armazenar o link do arquivo
$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

// Variável que ira receber o conteúdo do arquivo através do file_get_contents()
// Ele espera o caminho de um arquivo como variável, nesse caso o link. 
$content = file_get_contents($link);
// A função parse url transforma a url em um array para que possamos acessar individualmente o esquema, host e o caminho do mesmo.
$parse = parse_url($link);
// Basename retorna o nome do arquivo retirando o caminho
$basename = basename($parse["path"]);
// Abrindo/criando o arquivo em função de escrita (write)
$file = fopen($basename, "w+");
// Escrevendo o conteúdo no arquivo usando o fwrite()
fwrite($file, $content);
// Fechando o arquivo 
fclose($file);

?>

<img src="<?=$basename; ?>" alt="">
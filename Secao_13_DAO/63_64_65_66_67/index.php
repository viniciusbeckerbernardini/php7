<?php 
require_once('config.php');
// Carregando pelo id
// Instânciando um novo usuário
$user = new Usuario();

// Acessando o método que retorna o usuário pelo ID
echo '<h2>PROCURANDO PELO ID</h2>';
$user->loadById(3);
// Imprimindo o metódo __toString() na tela
echo $user;
echo '<hr>';

/* 
Acessando a função stática sem necessidade de instânciar o objeto
Função retorna a lista de usuários do banco de dados
*/
$list = Usuario::listGenerator();
// Imprimindo um json com o resultado
echo '<h2>PROCURANDO TUDO</h2>';
echo json_encode($list);
echo '<hr>';

/*
Acessando a função estática sem necessidade de instânciar o objeto
Função retorna usuários que que combinem com pesquisa que é informada via parâmetro 
*/
$listByName = Usuario::searchByName('r');
// Imprimindo um json com resultado
echo '<h2>PROCURANDO PELO NOME</h2>';
echo json_encode($listByName);
echo '<hr>';

/*
Usando a função de login, verifica se estes dados existem no banco de dados,
caso existam retorna uma mensagem de boas vindas, caso não existam retorna uma mensagem de erro,
os dados login e senha são passados como primeiro e segundo parâmetro respectivamente
*/
$user->login("Ratao","164864");
// Retornando o valor usando o método __toString()
echo '<h2>LOGIN</h2>';
echo $user;
echo '<hr>';

// Enviando o valor deslogin
$user->setDesLogin("Renteria");
// Enviando o valor dessenha
$user->setDesSenha("123456121");
/*
Utilizando a função insert, essa função espera os valores de setDesLogin e
de setDesSenha, ao inserir os mesmos ela fara a inserção deste usuário por meio de procedure no
banco de dados
*/
$user->insert();
// Retornando o resultado usando o método __toString()
echo '<h2>INSERT</h2>';
echo $user;
echo '<hr>';
/*
Utilizando a função update em conjunto com a loadByID
*/
$user->loadById(27);
$user->update("Javarimba","Coritera");
echo '<h2>UPDATE</h2>';
echo $user;
echo '<hr>';
$user->loadById(27);
$user->delete();
echo '<h2>DELETE</h2>';
echo $user;
echo '<hr>';
 ?>
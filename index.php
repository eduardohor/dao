<?php 

require_once("config.php");


//Carrega um Usuario

//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ri");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha 
//$usuario = new Usuario();
//$usuario->login("Eduardo","qwert");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("Aria", "stark7");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadbyId(8);

$usuario->update("Fatima", "083571");

echo $usuario;

 ?>
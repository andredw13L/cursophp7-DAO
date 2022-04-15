<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("config.php");

//Carregar um usuário
//$jose = new Usuario();
//$jose->loadbyId(3);
//echo $jose;

//Carrega uma lista de usuário 
//$lista = Usuario::getList(); 
//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo nome
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha 

$usuario = new Usuario();
$usuario->login("root","!@#$");

echo $usuario;

?>
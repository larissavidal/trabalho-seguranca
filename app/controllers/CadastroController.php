<?php

require_once("../models/MOUsuario.php");
require_once("../data/DAOUsuario.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$endereco = $_POST['end'];
$tipousuario = 2;
$nomeusuario = $_POST['usuario'];

$mousu = new MOUsuario();
$daousu = new DAOUsuario();

$mousu->setNome($nome) ;
$mousu->setSenha($senha) ;
$mousu->setCpf($cpf) ;
$mousu->setEndereco($endereco)  ;
$mousu->setTipoUsuario($tipousuario) ;
$mousu->setNomeUsuario($nomeusuario) ;

//print_r($mousu);
$daousu->SalvarUsuario($mousu);

header('Location:../pages/usuarios.php');

?>
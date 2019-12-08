<?php

  require_once("connection.php");
  require_once("../models/MOUsuario.php");


class DAOUsuario{

  private $connection;

  public function __construct(){
    $this->connection =  getConnection();
    
  }

  public function SalvarUsuario($Usuario){
    $nome = $Usuario->getNome(); 
    $senha = $Usuario->getSenha(); 
    $endereco = $Usuario->getEndereco(); 
    $cpf = $Usuario->getCpf(); 
    $tipousuario = $Usuario->getTipoUsuario(); 
    $nomeusuario = $Usuario->getNomeUsuario();  
    $sql = "insert into usuario (nome, senha, endereco, cpf, tipousuario, nomeusuario) 
      values('$nome', '$senha', '$endereco', '$cpf', $tipousuario, '$nomeusuario')";
    
    $this->connection->query($sql);

    return $this->connection->affected_rows;
  }

  public function list(){
    $users = [];

    $r = $this->connection->query("select * from usuario");

    for($i=0; $i<$r->num_rows; $i++){
        $row = $r->fetch_array();
        $mousu =  new MOUsuario();
        $mousu->setNome($row['nome']) ;
        $mousu->setSenha($row['senha']) ;
        $mousu->setCpf($row['cpf']) ;
        $mousu->setEndereco($row['endereco'])  ;
        $mousu->setTipoUsuario($row['tipousuario']) ;
        $mousu->setNomeUsuario($row['nomeusuario']) ;
        array_push($users, $mousu);
    }

    return $users;
  }


}

?>

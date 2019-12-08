<?php

class MOUsuario{
    private $idusuario;
    private $nome;
    private $senha;
    private $cpf;
    private $endereco;
    private $tipousuario;
    private $nomeusuario;

/*
  function __construct($nome,$senha,$cpf,$endereco,$tipousuario,$nomeusuario)
  {
    $this->nome=      $nome;
    $this->senha=     $senha;
    $this->cpf=       $cpf;
    $this->endereco=  $endereco;
    $this->tipousuario= $tipousuario;
    $this->nomeusuario= $nomeusuario;

  }*/
    function __construct(){}
    
    public  function getNome(){
        return  $this->nome;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function getSenha(){
    return  $this->senha;
    }
    public function setSenha($senha){
        $this->senha=$senha;
    }
    public function getEndereco(){
    return  $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco=$endereco;
    }
    public function getCpf(){
    return  $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    public function getTipoUsuario(){
    return    $this->tipousuario;
    }
    public function setTipoUsuario($tipousuario){
        $this->tipousuario=$tipousuario;
      }
    public function getNomeUsuario(){
        return  $this->nomeusuario;
    }
    public function setNomeUsuario($nomeusuario){
        $this->nomeusuario=$nomeusuario;
    }
    public function getIdUsuario(){
        return  $this->idusuario;
    }
    public function setIdUsuario($idusuario){
        $this->idusuario=$idusuario;
    }
}

 ?>

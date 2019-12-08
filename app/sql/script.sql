create database treino;

use treino;

drop table usuario;

create table usuario (
	id integer primary key auto_increment,
    nome varchar(20),
    senha varchar(20),
    endereco varchar(50),
    cpf varchar(15),
    tipousuario integer,
    nomeusuario varchar(20)
);
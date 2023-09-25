create database cadastrar;

use cadastrar;

create table conta
(
  cod_usuario int not null primary key auto_increment,
  logar varchar(255) not null,
  senha varchar(255) not null, 
  email varchar(255) not null,
  imgPerfil varchar(255) not null,
  banner varchar(255) not null,
  twitch varchar(255),
  reddit varchar(255),
  youtube varchar(255),
  biografia varchar(255),
  playstation boolean,
  xbox boolean,
  pc boolean,
  switch boolean,
  data_criacao DATETIME
);

select*from conta;
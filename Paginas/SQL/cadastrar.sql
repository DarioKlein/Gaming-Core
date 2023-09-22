create database cadastrar;

use cadastrar;

create table conta
(
  cod_usuario int not null primary key auto_increment,
  logar varchar(200) not null,
  senha varchar(200) not null, 
  email varchar(200) not null,
  imgPerfil varchar(200) not null,
  banner varchar(200) not null,
  instagram varchar(200),
  reddit varchar(200),
  steam varchar(200),
  biografia varchar(255)
);

select*from conta;
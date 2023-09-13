create database cadastrar;

use cadastrar;

create table conta(cod_usuario int not null primary key auto_increment,logar varchar(200) not null,senha varchar(200) not null, email varchar(200) not null);

select*from conta;
create database suportes;

use suportes;

create table suporte(
cod_ticket int not null primary key auto_increment,
email varchar(100) not null,
pergunta varchar(150) not null
) CHARACTER SET utf8 COLLATE utf8_unicode_ci;
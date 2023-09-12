create database jogos;

use jogos;

create table games(
cod_jogo int not null primary key auto_increment,
nome varchar(100),
data_lanc varchar(100),
plataformas varchar (100),
genero1 varchar(50),
genero2 varchar(50),
linkVideo varchar(255),
imagemJogo varchar(100),
imagemVideo varchar(100),
imagemSecundaria1 varchar(100),
imagemSecundaria2 varchar(100),
resumo varchar(255),
developer varchar(70),
curiosidade varchar(70)
) CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO games (
    nome,
    data_lanc,
    plataformas,
    genero1,
    genero2,
    linkVideo,
    imagemJogo,
    imagemVideo,
    imagemSecundaria1,
    imagemSecundaria2,
    resumo,
    developer,
    curiosidade
) VALUES (
    "The Witcher 3: Wild Hunt",
    "18 de maio de 2015",
    "Xbox One, Xbox Series X|S, Playstation 4|5, Nintendo Switch e PC.",
    "RPG",
    "Ação e Aventura", 
    "https://www.youtube.com/watch?v=53MyR_Z3i1w&t=4s",
    "extraAndImg-jogo/imgPrincipal/thewitcher3.jpeg",
    "extraAndImg-jogo/imgVideo/tw3-mobile.jpg",
    "extraAndImg-jogo/imgSecundaria/tw3_2.jpg",
    "extraAndImg-jogo/imgSecundaria/tw3_1.jpg",
    "O jogo conta a aventura do bruxo Geralt de Rívia em busca da sua filha, Ciri, enquanto enfrenta inimigos mortais e explora um mundo cheio de possibilidades, desafios e aventuras.",
    "Produzido por: CD PROJEKT RED.",
    "Eleito melhor jogo do ano em 2015 pelo The Game Awards."
),

(
    "Red Dead Redemption 2",
    "26 de outubro de 2018",
    "Xbox One, Xbox Series X|S, Playstation 4|5 e PC.",
    "Ação e Aventura",
    "Multijogador", 
    "https://www.youtube.com/watch?v=gmA6MrX81z4",
    "extraAndImg-jogo/imgPrincipal/rdr2Principal.jpg",
    "extraAndImg-jogo/imgVideo/rdr2.jpg",
    "extraAndImg-jogo/imgSecundaria/rdr2Secundaria1.jpg",
    "extraAndImg-jogo/imgSecundaria/rdr2Secundaria2.webp",
    "Red Dead Redemption 2 e um jogo de ação em mundo aberto. Siga a história de Arthur Morgan, um fora da lei, em sua jornada no velho oeste americano. Enfrente desafios, tome decisões difíceis e explore um vasto mundo repleto de oportunidades e perigos.",
    "Produzido por: ROCKSTAR GAMES.",
    "Vendeu mais de US$ 725 milhões em cópias em todo o mundo."
);
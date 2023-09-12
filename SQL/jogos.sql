create database games;

use games;

CREATE TABLE jogos (
  cod_jogo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100),
  data_lanc VARCHAR(100),
  genero VARCHAR(50),
  endereco VARCHAR(100),
  imagem VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

insert into jogos(nome,data_lanc,genero,endereco,imagem)
values

("The Witcher 3"," 18 de maio de 2015","RPG","../Jogo/index.php?idJogo=1&nome=The%20Witcher%203","../Template/ImagensJogos/witcher3.jpeg"),

("Red Dead R 2","26 de outubro de 2018","Ação e Aventura","../Jogo/index.php?idJogo=2&nome=Red%20Dead%20Redemption%202","../Template/ImagensJogos/rdr2.jpg"),

("GTA V","17 de setembro de 2013","Ação e Aventura","../Jogo/index.php?idJogo=3&nome=GTA%204","../Template/ImagensJogos/gta5.jpg"),

("Hogwarts Legacy","10 de fevereiro de 2023","RPG","../Jogo/index.php?idJogo=4&nome=Hogwarts%20Legacy","../Template/ImagensJogos/legacy.jpeg"),

("Spider-Man","7 de setembro de 2018","Ação e Aventura","../Jogo/index.php?idJogo=5&nome=Spider%20Man","../Template/ImagensJogos/spidermanmarvel.jpeg"),

("Skyrim","11 de novembro de 2011","RPG","../Jogo/index.php?idJogo=6&nome=Skyrim","../Template/ImagensJogos/skyrim.jpg"),

("GTA SA","10 de fevereiro de 2023","Ação e Aventura","../Jogo/index.php?idJogo=7&nome=GTA%20SA","../Template/ImagensJogos/gtasan.png"),

("FIFA 23","27 de setembro de 2022","Esportes","../Jogo/index.php?idJogo=8&nome=FIFA%2023","../Template/ImagensJogos/fifa23.jpeg"),

("FIFA 22","27 de setembro de 2021","Esportes","../Jogo/index.php?idJogo=9&nome=FIFA%2022","../Template/ImagensJogos/fifa22.jpg"),

("RE 2","25 de janeiro de 2019","Survival horror","../Jogo/index.php?idJ=1&nome=Resident%20Evil%202","../Template/ImagensJogos/re2.jpg"),

("Cyber 2077","10 de dezembro de 2020","RPG","../Jogo/index.php?idJ=1&nome=Cyberpunk%202077","../Template/ImagensJogos/cyberpunk-2077.png"),

("RE 4 Remake","23 de marco de 2023","Survival Horror","../Jogo/index.php?idJ=1&nome=RE%204%20Remake","../Template/ImagensJogos/residentevil4.png"),

("RE Village","7 de maio de 2021","Survival Horror","../Jogo/index.php?idJ=1&nome=RE%20Village","../Template/ImagensJogos/resident-evil-village.png"),

("DB Z: Kakarot","16 de janeiro de 2020","RPG","../Jogo/index.php?idJ=1&nome=DBZ%20Kakarot","../Template/ImagensJogos/dragon-ball-z-kakarot.png"),

("Minecraft","18 de novembro de 2011","Sobrevivência","../Jogo/index.php?idJ=1&nome=Minecraft","../Template/ImagensJogos/mine.png"),

("FF VII Remake","10 de abril de 2020","RPG","../Jogo/index.php?idJ=1&nome=Final%20Fantasy%207%20Remake","../Template/ImagensJogos/final-fantasy-vii-remake-intergrade.png"),

("Ratchet & Clank","11 de junho de 2021","Ação e Aventura","../Jogo/index.php?idJ=1&nome=Ratchet%20Clank","../Template/ImagensJogos/ratchet-clank-rift-apart.png"),

("FNAF Security B","16 de dezembro de 2021","Survival Horror","../Jogo/index.php?idJ=1&nome=FNAF%20Security%20B","../Template/ImagensJogos/five-nights-at-freddys-security-breach.png"),

("Stray","19 de julho de 2022","Ação e Aventura","../Jogo/index.php?idJ=1&nome=Stray","../Template/ImagensJogos/stray.png"),

("TLOU I","2 de setembro de 2022","Ação e Aventura","../Jogo/index.php?idJogo=2&nome=%20TLOU%20I","../Template/ImagensJogos/the-last-of-us-part-i.png"),

("Dark Souls III","24 de marco de 2016","RPG","../Jogo/index.php?idJogo=2&nome=Dark%20Souls%20III","../Template/ImagensJogos/dark-souls-iii-deluxe-edition.png"),

("Atomic Heart","21 de fevereiro de 2023","Ação e Aventura","../Jogo/index.php?idJogo=2&nome=Atomic%20Heart","../Template/ImagensJogos/atomic-heart.png"),

("Monster Hunter R","26 de marco de 2021","RPG","../Jogo/index.php?idJogo=2&nome=Monster%20Hunter%20R","../Template/ImagensJogos/monster-hunter-rise.png"),

("Sonic Frontiers","8 de novembro de 2022","Ação e Aventura","../Jogo/index.php?idJogo=2&nome=Sonic%20Frontiers","../Template/ImagensJogos/sonic-frontiers.png"),

("Crash 4","2 de outubro de 2020","Plataforma","../Jogo/index.php?idJogo=2&nome=Crash%204","../Template/ImagensJogos/crash-bandicoot-4-its-about-time.png"),

("Cult of the Lamb"," 10 de junho de 2022","Roguelike","../Jogo/index.php?idJogo=2&nome=Cult%20of%20The%20Lamb","../Template/ImagensJogos/cult-of-the-lamb.png"),

("JoJo All-Star","29 de agosto de 2013","Luta","../Jogo/index.php?idJogo=2&nome=Jojo%20All%20Star","../Template/ImagensJogos/jojos-bizarre-adventure-all-star-battle-r.png"),

("Dead Island 2","21 de abril de 2023","Ação e Aventura","../Jogo/index.php?idJogo=2&nome=Dead%20Island%202","../Template/ImagensJogos/dead-island-2.png"),

("Dying Light 2","4 de fevereiro de 2022","Ação e Aventura","../Jogo/index.php?idJogo=2&nome=Dying%20Light%202","../Template/ImagensJogos/dying-light-2-stay-human.png"),

("Sons of the F","23 de fevereiro de 2023","Sobrevivência","../Jogo/index.php?idJogo=3&nome=Sons%20Of%20The%20F","../Template/ImagensJogos/sons-of-the-forest.png"),


("GTA IV"," 29 de abril de 2008","Ação e Aventura","../Jogo/index.php?idJogo=3&nome=GTA%20IV","../Template/ImagensJogos/gtaiv.png"),

("GTA III"," 22 de outubro de 2001","Ação e Aventura","../Jogo/index.php?idJogo=3&nome=GTA%20III","../Template/ImagensJogos/gtaiii.png");

select*from jogos;
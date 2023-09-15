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

("Red Dead Redemption 2","26 de outubro de 2018","Ação e Aventura","../Jogo/index.php?idJogo=2&nome=Red%20Dead%20Redemption%202","../Template/ImagensJogos/rdr2.jpg"),

("GTA V","17 de setembro de 2013","Ação e Aventura","../Jogo/index.php?idJogo=3&nome=GTA%20V","../Template/ImagensJogos/gta5.jpg"),

("Hogwarts Legacy","10 de fevereiro de 2023","RPG","../Jogo/index.php?idJogo=4&nome=Hogwarts%20Legacy","../Template/ImagensJogos/legacy.jpeg"),

("Cyberpunk 2077","10 de dezembro de 2020","RPG","../Jogo/index.php?idJogo=5&nome=Cyberpunk%202077","../Template/ImagensJogos/cyberpunk-2077.png"),

("Resident evil 4 Remake","23 de março de 2023","Survival Horror","../Jogo/index.php?idJogo=6&nome=RE%204%20Remake","../Template/ImagensJogos/residentevil4.png"),

("Dark Souls III","24 de março de 2016","RPG","../Jogo/index.php?idJogo=7&nome=Dark%20Souls%20III","../Template/ImagensJogos/dark-souls-iii-deluxe-edition.png"),

("Dead Space Remake", "27 de janeiro de 2023","Survival Horror","../Jogo/index.php?idJogo=8&nome=Dead%20Space%20Remake","../Template/ImagensJogos/deadspaceremake.jpeg"),

("Starfield", "6 de setembro de 2023", "RPG", "../Jogo/index.php?idJogo=9&nome=Starfield", "../Template/ImagensJogos/starfield.jpg"),

("Lies of P" , "19 de setembro de 2023", "RPG", "../Jogo/index.php?idJogo=10&nome=Lies%20of%20P", "../Template/ImagensJogos/liesofp.avif"),

("Avatar: Frontiers of Pandora" , "7 de dezembro de 2023", "Ação e Aventura", "../Jogo/index.php?idJogo=11&nome=Avatar:%20Frontiers%20of%20Pandora", "../Template/ImagensJogos/avatarfop.webp"),

("Assassin's Creed Mirage", "17 de outubro de 2023", "Ação e Aventura", "../Jogo/index.php?idJogo=12&nome=Assassin's%20Creed%20Mirage", "../Template/ImagensJogos/acmirage.avif"),

("Mortal Kombat 1", "14 de setembro de 2023", "Luta", "../Jogo/index.php?idJogo=13&nome=Mortal%20Kombat%201", "../Template/ImagensJogos/mk1.avif"),

("Alan Wake II", "17 de outubro de 2023", "Survival Horror", "../Jogo/index.php?idJogo=14&nome=Alan%20Wake%20II", "../Template/ImagensJogos/alanwakeii.jpeg"),

("Marvel's Spider-Man 2", "20 de outubro de 2023", "Ação e Aventura", "../Jogo/index.php?idJogo=15&nome=Marvel's%20Spider%20-%20Man%202", "../Template/ImagensJogos/spider.avif"),

("Payday 3", "21 de setembro de 2023", "Ação e Aventura", "../Jogo/index.php?idJogo=16&nome=Payday%203", "../Template/ImagensJogos/payday3.jpeg"),

("Forza Motorsport", "10 de outubro de 2023", "Esporte", "../Jogo/index.php?idJogo=17&nome=Forza%20Motorsport", "../Template/ImagensJogos/forzamoto.jpg"),

("Pragmata", "Sem data oficial", "Ação e Aventura", "../Jogo/index.php?idJogo=18&nome=Pragmata", "../Template/ImagensJogos/pragmata.jpeg"),

("Skull & Bones", "8 de novembro de 2023", "Ação e Aventura", "../Jogo/index.php?idJogo=19&nome=Skull%20&%20Bones", "../Template/ImagensJogos/skullandbones.jpeg"),

("Immortals of Aveum", "22 de agosto de 2023","Ação e Aventura", "../Jogo/index.php?idJogo=20&nome=Immortals%20of%20Aveum", "../Template/ImagensJogos/immortals.jpeg"),

("Elden Ring", "25 de fevereiro de 2022", "RPG", "../Jogo/index.php?idJogo=21&nome=Elden%20Ring", "../Template/ImagensJogos/elderring.webp"),

("The Last of Us Part II", "19 de junho de 2020", "Ação e Aventura", "../Jogo/index.php?idJogo=22&nome=The%20Last%20of%20Us%20Part%20II", "../Template/ImagensJogos/tlouii.jpeg"),

("Zelda: Tears of the Kingdom", "12 de maio de 2023", "Ação e Aventura", "../Jogo/index.php?idJogo=23&nome=Zelda:%20Tears%20of%20the%20Kingdom", "../Template/ImagensJogos/zeldazelda.jpg"),

("Forza Horizon 5", "5 de novembro de 2021", "Esporte", "../Jogo/index.php?idJogo=24&nome=Forza%20Horizon%205", "../Template/ImagensJogos/forza5.jpeg"),

("Sekiro: Shadows Die Twice", "22 de março de 2019", "Ação e Aventura", "../Jogo/index.php?idJogo=25&nome=Sekiro:%20Shadows%20Die%20Twice", "../Template/ImagensJogos/sekiro.png"),

("Assassin's Creed Valhalla", "10 de novembro de 2020", "RPG", "../Jogo/index.php?idJogo=26&nome=Assassin's%20Creed%20Valhalla", "../Template/ImagensJogos/acvalhalla.png"),

("GTA III"," 22 de outubro de 2001","Ação e Aventura","../Jogo/index.php?idJogo=27&nome=GTA%20III","../Template/ImagensJogos/gtaiii.png"),

("Resident Evil 2 Remake","25 de janeiro de 2019","Survival horror","../Jogo/index.php?idJogo=28&nome=Resident%20Evil%202","../Template/ImagensJogos/re2.jpg");


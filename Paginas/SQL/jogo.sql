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
curiosidade varchar(255)
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
    "CD PROJEKT RED.",
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
    "Red Dead Redemption 2 é um jogo de ação em mundo aberto. Siga a história de Arthur Morgan, um fora da lei, em sua jornada no velho oeste americano. Enfrente desafios, tome decisões difíceis e explore um vasto mundo repleto de oportunidades e perigos.",
    "ROCKSTAR GAMES.",
    "Vendeu mais de US$ 725 milhões em cópias em todo o mundo."
),

(
    "Grand Theft Auto V",
    "17 de setembro de 2013",
    "Xbox One, Xbox 360, Xbox Series X|S, Playstation 3|4|5, Nintendo Switch e PC.",
    "Ação e Aventura",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=QkkoHAzjnUs",
    "extraAndImg-jogo/imgPrincipal/gtav.jpeg",
    "extraAndImg-jogo/imgVideo/gtav.jpg",
    "extraAndImg-jogo/imgSecundaria/gtav1.jpg",
    "extraAndImg-jogo/imgSecundaria/gtav2.jpg",
    "Os protagonistas do jogo que se passa em Los Santos, uma sátira de Los Angeles, onde você controla Michael De Santa, um ex-assaltante de bancos; Franklin Clinton, um jovem em busca de oportunidades criminosas; e Trevor Philips, um psicopata.",
    "ROCKSTAR GAMES.",
    "Eleito melhor jogo do ano em 2013 pelo The Game Awards."
),

(
    "Hogwarts Legacy",
    "10 de fevereiro de 2023",
    "Xbox One, Xbox Series X|S, Playstation 4|5, Nintendo Switch e PC.",
    "RPG",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=78CP8na1Fpo",
    "extraAndImg-jogo/imgPrincipal/hogwarts.webp",
    "extraAndImg-jogo/imgVideo/hogwarts.jpg",
    "extraAndImg-jogo/imgSecundaria/hog1.jpg",
    "extraAndImg-jogo/imgSecundaria/hog2.webp",
    "O jogador controla um aluno matriculado na Escola de Magia e Bruxaria de Hogwarts que aprende a manejar uma série de habilidades e objetos mágicos. Com a ajuda de colegas e professores, a protagonista embarca em uma jornada.",
    "AVALANCHE SOFTWARE.",
    "Jogo baseado na obra fictícia de J.K Rowling Harry Potter."
),

(
    "Cyberpunk 2077",
    "10 de fevereiro de 2023",
    "Xbox One, Xbox Series X|S, Google Stadia, Playstation 4|5 e PC.",
    "RPG",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=qIcTM8WXFjk",
    "extraAndImg-jogo/imgPrincipal/cyberpunk.jpg",
    "extraAndImg-jogo/imgVideo/cyberpunk.jpg",
    "extraAndImg-jogo/imgSecundaria/cyber1.webp",
    "extraAndImg-jogo/imgSecundaria/cyber2.webp",
    "Na trama, o jogador controla um mercenário personalizável chamado V, capaz de adquirir habilidades de hacking e maquinários, além de um arsenal de armas de longo alcance e diferentes opções de combate.",
    "CD PROJEKT RED.",
    "Uma das maiores decepções da história dos games, sofreu com diversos problemas no lançamento."
),

(
    "Resident Evil 4 Remake",
    "23 de março de 2023",
    "Xbox Series X|S, Playstation 4|5 e PC.",
    "Survival Horror",
    "Ação e Aventura", 
    "https://www.youtube.com/watch?v=C_IdgsdHwAo",
    "extraAndImg-jogo/imgPrincipal/residentevil4.avif",
    "extraAndImg-jogo/imgVideo/residentevil4.jpg",
    "extraAndImg-jogo/imgSecundaria/re4remake1.webp",
    "extraAndImg-jogo/imgSecundaria/re4remake2.webp",
    "Se passa 6 anos após os acontecimentos de Raccoon City e traz Leon Kennedy em uma missão para resgatar a filha do presidente dos Estados Unidos, Ashley Graham, que foi sequestrada por uma seita macabra chamada Los Illuminados.",
    "Capcom.",
    "Resident Evil 4 Remake é uma reimaginação espetacular de um dos jogos mais icônicos de todos os tempos o resident evil 4."

),

(
    "Dark Souls III",
    "24 de março de 2016",
    "Xbox One, Xbox Series X|S, Playstation 4|5 e PC.",
    "RPG",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=cWBwFhUv1-8",
    "extraAndImg-jogo/imgPrincipal/dark3.webp",
    "extraAndImg-jogo/imgVideo/dark3.webp",
    "extraAndImg-jogo/imgSecundaria/dark31.webp",
    "extraAndImg-jogo/imgSecundaria/dark32.webp",
    "Com o início da história de Dark Souls 3, o misterioso herói escolhido acorda da morte em um cemitério com alguns hollows, milhares de anos após a extinção dos seres dracônicos. Ele, então, ainda sem rumo, segue seu caminho.",
    "FROM SOFTWARE.",
    "Alcançou sozinho a marca de 10 milhões de unidades vendidas mundialmente"
),

(
    "Dead Space Remake",
    "27 de janeiro de 2023",
    "Xbox Series X|S, Playstation 5 e PC.",
    "Survival Horror",
    "Terror", 
    "https://www.youtube.com/watch?v=cTDJNZ9cK1w",
    "extraAndImg-jogo/imgPrincipal/deadspace.jpg",
    "extraAndImg-jogo/imgVideo/deadspace.jpeg",
    "extraAndImg-jogo/imgSecundaria/deadspace1.webp",
    "extraAndImg-jogo/imgSecundaria/deadspace2.jpg",
    "Isaac Clarke é um engenheiro com a missão de consertar uma imensa nave de mineração, mas descobre que a tripulação foi massacrada e sua amada está perdida em algum lugar.",
    "Electronic Arts.",
    "Foram necessários quase 3 anos para completar o desenvolvimento de Dead Space Remake."

),

(
    "Starfield",
    "6 de setembro de 2023",
    "Xbox Series X|S e PC.",
    "RPG",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=kfYEiTdsyas",
    "extraAndImg-jogo/imgPrincipal/starfield.jpg",
    "extraAndImg-jogo/imgVideo/starfield.webp",
    "extraAndImg-jogo/imgSecundaria/star1.webp",
    "extraAndImg-jogo/imgSecundaria/star2.jpg",
    "Você se juntará ao Constellation - o último grupo de exploradores espaciais que busca de artefatos raros por toda a galáxia - e navegará pela vasta extensão do espaço no maior e mais ambicioso jogo da Bethesda Game Studios.",
    "BETHESDA.",
    "Fez com que as vendas do Xbox series aumentassem em 1000%"
),

(
    "Lies of P",
    "19 de setembro de 2023",
    "Xbox One, Xbox Series X|S, Playstation 4|5 e PC.",
    "RPG",
    "Soulslike", 
    "https://www.youtube.com/watch?v=TYr1x25Z1Ak",
    "extraAndImg-jogo/imgPrincipal/liesofp.avif",
    "extraAndImg-jogo/imgVideo/liesofp.jpg",
    "extraAndImg-jogo/imgSecundaria/liesofp1.jpg",
    "extraAndImg-jogo/imgSecundaria/liesofp2.jpeg",
    "É ambientado em Krat, a cidade da ciência e tecnologia, que passou por diversos avanços após a descoberta do Ergo, material que foi usado como fonte de energia para alimentar a cidade e os títeres.",
    "Neowiz Games, Sold Out Sales & Marketing Ltd.",
    "Ainda não foi lançado."

),

(
    "Avatar: Frontiers of Pandora",
    "7 de dezembro de 2023",
    "Xbox Series X|S, Playstation 5 e PC.",
    "Ação e Aventura",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=RDzw1EKnaIA",
    "extraAndImg-jogo/imgPrincipal/avatar.avif",
    "extraAndImg-jogo/imgVideo/avatar.webp",
    "extraAndImg-jogo/imgSecundaria/avatar1.jpg",
    "extraAndImg-jogo/imgSecundaria/avatar2.webp",
    "Avatar: Frontiers of Pandora conta a história de um Navi que foi raptado quando criança pela corporação militar dos humanos. Portanto ele consegue lidar com armas de fogo tradicionais, bem como as habilidades de sua raça.",
    "Ubisoft.",
    "Ainda não foi lançado."
),

(
    "Assassin's Creed Mirage",
    "17 de outubro de 2023",
    "Xbox One, Xbox Series X|S, Playstation 4|5 e PC.",
    "Ação e Aventura",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=82LkAKrOtBA",
    "extraAndImg-jogo/imgPrincipal/mirage.webp",
    "extraAndImg-jogo/imgVideo/mirage.avif",
    "extraAndImg-jogo/imgSecundaria/miragr1.webp",
    "extraAndImg-jogo/imgSecundaria/mirage2.jpg",
    "Em Assassin's Creed Mirage, você é Basim, um astucioso ladino de rua com visões aterrorizantes e que está em busca de respostas e de justiça. Entre para uma organização antiga e compreenda um novo credo...",
    "Ubisoft.",
    "Ainda não foi lançado."
),

(
    "Mortal Kombat 1",
    "14 de setembro de 2023",
    "PlayStation 5, Xbox Series X|S, Nintendo Switch e PC.",
    "Luta",
    "Multiplayer", 
    "https://www.youtube.com/watch?v=aMlAtGUWwQc",
    "extraAndImg-jogo/imgPrincipal/mortalkombat1.avif",
    "extraAndImg-jogo/imgVideo/mortalkombat1.avif",
    "extraAndImg-jogo/imgSecundaria/mortalkombat1.jpg",
    "extraAndImg-jogo/imgSecundaria/mortalkombat2.webp",
    "O jogo continua a história que vimos ao final de Aftermath, a expansão de Mortal Kombat 11. Aqui, Liu Kang se tornou o deus do trovão e do fogo, no lugar de Raiden, e decidiu usar seus poderes cósmicos para refazer o universo caótico ao seu redor.",
    "Warner Bros. Games",
    "O jogo foi recém lançado."
),

(
    "Alan Wake II",
    "17 de outubro de 2023",
    "PlayStation 5, Xbox Series X|S e PC.",
    "Survival Horror",
    "Ação e Aventura", 
    "https://www.youtube.com/watch?v=q0vNoRhuV_I",
    "extraAndImg-jogo/imgPrincipal/alanwake2.jpeg",
    "extraAndImg-jogo/imgVideo/alanwake2.jpg",
    "extraAndImg-jogo/imgSecundaria/alanwake1.avif",
    "extraAndImg-jogo/imgSecundaria/alanwake2.avif",
    "O que começa como uma investigação de assassinato em uma cidade pequena rapidamente se transforma em uma jornada de pesadelo. Descubra a fonte da escuridão sobrenatural nesta história de terror psicológico cheia de suspense.",
    "Remedy Entertainment",
    "O jogo ainda não foi lançado"
),

(
    "Marvel's Spider-Man 2",
    "20 de outubro de 2023",
    "PlayStation 5, Xbox Series X|S, Nintendo Switch e PC.",
    "Ação e Aventura",
    "Um Jogador", 
    "https://www.youtube.com/watch?v=BXCgFfvFIzs",
    "extraAndImg-jogo/imgPrincipal/spider.avif",
    "extraAndImg-jogo/imgVideo/spider.webp",
    "extraAndImg-jogo/imgSecundaria/spider1.webp",
    "extraAndImg-jogo/imgSecundaria/spider2.jpg",
    "É um jogo para uma pessoa. Mas é possível jogar tanto como Peter Parker quanto como Miles Morales, revezando entre os dois Spiders em suas aventuras contra o crime para aproveitar as habilidades de jogo e elementos da história de cada um.",
    "Sony Interactive Entertainment",
    "Ainda não foi lançado"
),

(
    "Payday 3",
    "21 de setembro de 2023",
    "PlayStation 5, Xbox Series X|S e PC.",
    "Ação e Aventura",
    "FPS", 
    "https://www.youtube.com/watch?v=dc5gw3ctb0o",
    "extraAndImg-jogo/imgPrincipal/payday3.jpeg",
    "extraAndImg-jogo/imgVideo/payday3.webp",
    "extraAndImg-jogo/imgSecundaria/payday31.webp",
    "extraAndImg-jogo/imgSecundaria/payday32.png",
    "Um ex-criminoso aposentado é convocado para se juntar à infame Gangue Payday, conhecida pela rivalidade com outras gangues e pelo temor que inspira na polícia. Anos após deixarem a vida de crime em Washington.",
    "Starbreeze Studios, Overkill Software",
    "O jogo ainda não foi lançado"
),

(
    "Forza Motorsport",
    "10 de outubro de 2023",
    "Xbox Series X|S e PC.",
    "Esporte",
    "Corrida", 
    "https://www.youtube.com/watch?v=em4gv1Ietko",
    "extraAndImg-jogo/imgPrincipal/forza.jpeg",
    "extraAndImg-jogo/imgVideo/forza.webp",
    "extraAndImg-jogo/imgSecundaria/forza1.webp",
    "extraAndImg-jogo/imgSecundaria/forza2.jpg",
    "Forza Motorsport é descrito pelo estúdio como, “O jogo de corrida tecnicamente mais avançado já feito”, e será responsável por apresentar conceitos construídos do zero, sem reaproveitamento de títulos anteriores.",
    "Xbox Game Studios",
    "Este será o último título da série, visto que este será atualizado constantemente"
),

(
    "Pragmata",
    "Sem data oficial",
    "PlayStation 5, Xbox Series X|S e PC.",
    "Ação e Aventura",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=xoxCboik0Is",
    "extraAndImg-jogo/imgPrincipal/pragmata.jpeg",
    "extraAndImg-jogo/imgVideo/pragmata.jpg",
    "extraAndImg-jogo/imgSecundaria/pragmata1.jpg",
    "extraAndImg-jogo/imgSecundaria/pragmata2.webp",
    "Retrata um mundo distópico futuro na Lua através de uma história e um cenário extremamente profundos.",
    "Capcom",
    "Faz mais de 2 anos que o jogo foi anunciado mais ainda não sabemos praticamente nada sobre o projeto."
),

(
    "Skull & Bones",
    "8 de novembro de 2023",
    "Xbox Series X|S, Playstation 5 e PC.",
    "Ação e Aventura",
    "Multijogador", 
    "https://www.youtube.com/watch?v=8yrT1wwlw9g",
    "extraAndImg-jogo/imgPrincipal/skull.jpeg",
    "extraAndImg-jogo/imgVideo/skull.jpg",
    "extraAndImg-jogo/imgSecundaria/skull1.jpg",
    "extraAndImg-jogo/imgSecundaria/skull2.jpeg",
    "O mundo de Skull and Bones é um tesouro a ser explorado. Durante sua viagem, você enfrentará vários desafios, desde o clima imprevisível e as ondas perigosas, até animais letais e caçadores de piratas impiedosos.",
    "UBISOFT.",
    "Está a mais de 10 anos sendo desenvolvido e ainda não se tem certeza que ele será lançado"
),

(
    "Immortals of Aveum",
    "22 de agosto de 2023",
    "PlayStation 5, Xbox Series X|S e PC.",
    "Ação e Aventura",
    "FPS", 
    "https://www.youtube.com/watch?v=mNP3ztvNBFI",
    "extraAndImg-jogo/imgPrincipal/immortals.jpeg",
    "extraAndImg-jogo/imgVideo/immortals.jpg",
    "extraAndImg-jogo/imgSecundaria/immortals1.jpg",
    "extraAndImg-jogo/imgSecundaria/immortals2.jpg",
    "O jogador assume o controle de Jak, um jovem com a habilidade rara de controlar os três tipos de magia presentes no mundo de Aveum. Por isso, ele se torna peça central na Guerreterna.",
    "Ascendant Studios",
    "Produtora de Immortals of Aveum demite metade da equipe após fracasso comercial."
),

(
    "Elden Ring",
    "25 de fevereiro de 2022",
    "Xbox One, Xbox Series X|S, Playstation 4|5 e PC.",
    "RPG",
    "Souls Like", 
    "https://www.youtube.com/watch?v=E3Huy2cdih0",
    "extraAndImg-jogo/imgPrincipal/ELDEN.webp",
    "extraAndImg-jogo/imgVideo/elden.jpeg",
    "extraAndImg-jogo/imgSecundaria/elden1.webp",
    "extraAndImg-jogo/imgSecundaria/elden2.jpg",
    "O jogador incorpora um Maculado, guerreiro guiado pela força da Graça para portar o poder do Anel Prístino e torna-se um Lorde Prístino. A trama tem como cenário as Terras Intermédias, um local governado pela Rainha Marika.",
    "FROM SOFTWARE.",
    "Melhor jogo do ano de 2022, eleito pelo THE GAME AWARDS."
),

(
    "The Last of Us Part II",
    "19 de junho de 2020",
    "PlayStation 4|5",
    "Ação e Aventura",
    "Survival Horror", 
    "https://www.youtube.com/watch?v=qPNiIeKMHyg",
    "extraAndImg-jogo/imgPrincipal/thelastofus2.webp",
    "extraAndImg-jogo/imgVideo/thelastofus2.webp",
    "extraAndImg-jogo/imgSecundaria/thelastofus21.webp",
    "extraAndImg-jogo/imgSecundaria/thelastofus22.jpg",
    "The Last of Us Part II é a busca de Ellie por vingança pela morte de Joel em um mundo pós-apocalíptico. A narrativa também segue a história de Abby, que busca redenção. Ambas escolhem o perdão em um confronto.",
    "Naughty Dog",
    "The Last of Us 2 é o jogo mais premiado da história"
),

(
    "Zelda: Tears of the Kingdom",
    "12 de maio de 2023",
    "Nintendo Switch",
    "Ação e Aventura",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=uHGShqcAHlQ",
    "extraAndImg-jogo/imgPrincipal/zelda.jpg",
    "extraAndImg-jogo/imgVideo/zelda.jpg",
    "extraAndImg-jogo/imgSecundaria/zelda1.webp",
    "extraAndImg-jogo/imgSecundaria/zelda2.jpg",
    "Depois da derrota de Calamity Ganon, Link consegue libertar Zelda e eles se aventuram pelo castelo de Hyrule - onde encontram um corpo mumificado que parece o de Ganondorf.",
    "NINTENDO.",
    "Melhor jogo do ano de 2023, eleito pelo THE GAME AWARDS."
),

(
    "Forza Horizon 5",
    "5 de novembro de 2021",
    "Xbox One, Xbox Series X|S e PC",
    "Esporte",
    "Corrida", 
    "https://www.youtube.com/watch?v=Rv7xLt5yNsM",
    "extraAndImg-jogo/imgPrincipal/fh.jpeg",
    "extraAndImg-jogo/imgVideo/fh.jpg",
    "extraAndImg-jogo/imgSecundaria/fh1.jpeg",
    "extraAndImg-jogo/imgSecundaria/fh2.jpg",
    "Forza Horizon 5 é um jogo de corrida arcade em mundo aberto, que celebra a alegria de dirigir num ambiente festivo com carros velozes e total liberdade. Esta edição do festival é ambientada no México, quente e latino.",
    "XBOX GAME STUDIOS.",
    "Melhor jogo de corrida de 2021, eleito pelo THE GAME AWARDS."
),

(
    "Sekiro: Shadows Die Twice",
    "22 de março de 2019",
    "PlayStation 4|5, Xbox One, Xbox Series X|S , PC e Google Stadia",
    "Ação e Aventura",
    "Soulslike", 
    "https://www.youtube.com/watch?v=rXMX4YJ7Lks",
    "extraAndImg-jogo/imgPrincipal/sekiro.webp",
    "extraAndImg-jogo/imgVideo/sekiro.jpg",
    "extraAndImg-jogo/imgSecundaria/sekiro1.webp",
    "extraAndImg-jogo/imgSecundaria/sekiro2.jpg",
    "Sekiro: Shadows Die Twice se passa no Japão durante a violenta era Sengoku. A trama começa com uma batalha pelo poder em Ashina. Conhecemos Sekiro, uma criança adotada e treinada como shinobi por Coruja.",
    "FromSoftware",
    "Melhor jogo do ano em 2019, eleito pelo THE GAME AWARDS."
),

(
    "Assassin's Creed Valhalla",
    "10 de novembro de 2020",
    "Xbox One, Xbox Series X|S, Playstation 4|5 e PC",
    "RPG",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=SUxjS3xQ4QM",
    "extraAndImg-jogo/imgPrincipal/valhalla.webp",
    "extraAndImg-jogo/imgVideo/valhalla.jpg",
    "extraAndImg-jogo/imgSecundaria/val1.jpg",
    "extraAndImg-jogo/imgSecundaria/val2.jpeg",
    "História segue a jornada de Eivor da Noruega para a Inglaterra, e buscando construir uma nova casa para seu clã viking, formando alianças para assumir os quatro reinos ao seu redor.",
    "UBISOFT.",
    "Assassin's Creed Valhalla ultrapassou a marca de 20 milhões de jogadores."
),

(
    "GTA III",
    "22 de outubro de 2001",
    "Android, PlayStation 2|3|4|5, Xbox, Xbox 360,Xbox One, Xbox Series X|S , PC",
    "Ação e Aventura",
    "Mundo Aberto", 
    "https://www.youtube.com/watch?v=agACYOeuX7k",
    "extraAndImg-jogo/imgPrincipal/gta3.jpeg",
    "extraAndImg-jogo/imgVideo/gta3.jpg",
    "extraAndImg-jogo/imgSecundaria/gta31.jpg",
    "extraAndImg-jogo/imgSecundaria/gta32.webp",
    "Durante um assalto em um banco de Liberty City, o ambicioso criminoso Claude é baleado e atingido por sua namorada e cúmplice Catalina (Cynthia Farrell). Apesar de ter sobrevivido ao tiro, é preso e sentenciado a dez anos de prisão.",
    "Rockstar North, Grove Street Games, DMA Design",
    "Gta III é o precurssor dos jogos em mundo aberto no estilo de câmera em 3ª pessoa"
),

(
    "Resident Evil 2 Remake",
    "25 de janeiro de 2019",
    "Xbox One, Xbox Series X|S, Playstation 4|5 e PC",
    "Survival horror",
    "Jogo de Tiro", 
    "https://www.youtube.com/watch?v=u3wS-Q2KBpk",
    "extraAndImg-jogo/imgPrincipal/re2.webp",
    "extraAndImg-jogo/imgVideo/re2.jpg",
    "extraAndImg-jogo/imgSecundaria/re1.webp",
    "extraAndImg-jogo/imgSecundaria/re2.jpg",
    "Resident Evil 2 conta a trágica história de Raccoon City, que começa alguns meses depois do Incidente da Mansão, onde os membros dos S.T.A.R.S. descobrem as atividades ilegais da Umbrella envolvendo a produção de armas biológicas.",
    "Capcom.",
    "Resident evil 2 remake é um dos melhores remakes já feitos na história"
)
;
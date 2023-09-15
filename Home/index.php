<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../../Login_Cadastro/Login/login.php");
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Imports Template References and CSS -->
    <?php
    include('../Template/references/ref.php');
    ?>

    <title>Gaming Core - Home</title>

    <link rel="stylesheet" href="../Template/Footer/style.css" />
    <link rel="stylesheet" href="../Template/Navbar/style.css" />
    <link rel="stylesheet" href="../Template/resetCss/style.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!-- Header -->
    <?php
    include('../Template/Navbar/index.php');
    ?>


    <main>
        <!-- Banner -->
        <div class="banner">
            <img src="extras/banner.png" alt="">
        </div>

        <div class="espacamento-banner"> </div>
        <!-- Primeiro Titulo -->
        <div class="titulo1-destaque">
            <h2>
                <a name="destaques"></a>
                EM DESTAQUES HOJE!
            </h2>
        </div>

        <div class="espacamento-carrosel"> </div>
        <!-- CARROSSEL COMPLETO - CONTEÚDO 1 -->
        <div class="preenchimento">
            <div class="conteudo" id="conteudo">

                <button onclick="voltarCon()" class="botao-passar"> <img src="extras/arrowLeft.svg" alt=""> </button>

                <div class="carrossel-img">
                    <img id="imagem" src="jogosimg/legacy.jpeg">
                </div>

                <div class="carrossel-txt">

                    <div class="titulo">
                        <h2>HOGWARTS LEGACY</h2>
                    </div>

                    <div class="textos2">
                        <p>Avaliação dos usuários em: <span>8.1</span></p>
                    </div>

                    <div class="textos3">
                        <p> Em Hogwarts, os jogadores terão a oportunidade de criar um personagem personalizado e
                            explorar o mundo aberto de Hogwarts e suas redondezas. Eles poderão participar de aulas,
                            aprender feitiços, fazer escolhas que afetam o enredo e interagir com outros estudantes.
                        </p>
                    </div>

                    <div class="plataformas">
                        <p>
                            Plataformas: <span>PS4|PS5, PC, Xbox Series X|S e Xbox One.</span>
                        </p>

                    </div>

                    <div class="vejma">
                        <a href="../Jogo/index.php?idJogo=4&nome=Hogwarts%20Legacy" class="vejamais"> Veja mais <img class="arrow-img" src="extras/arrow.svg" alt=""> </a>
                    </div>

                </div>
                <button onclick="mudaCon()" class="botao-passar"><img src="extras/arrowRight.svg" alt=""></button>
            </div>
        </div>
        </div>
        <div class="preenchimento">

            <!-- CARROSSEL COMPLETO - CONTEÚDO 2 -->
            <div class="conteudo2" id="conteudo2">

                <button onclick="voltarCon1()" class="botao-passar"> <img src="extras/arrowLeft.svg" alt=""> </button>

                <div class="carrossel-img">
                    <img id="imagem" src="jogosimg/cyberpunk.jpeg">
                </div>

                <div class="carrossel-txt">

                    <div class="titulo">
                        <h2>Cyberpunk 2077
                        </h2>
                    </div>

                    <div class="textos2">
                        <p class="texto">Avaliação dos usuários em: <span>7.9</span></p>
                    </div>

                    <div class="textos3">
                        <p> Conheça mais a respeito de Night City na nova DLC Phantom Liberty da CD PROJEKT RED, uma
                            nova história de cair o queixo e emocionante, já disponível para todas as plataformas de
                            nova geração.
                        </p>
                    </div>

                    <div class="plataformas">
                        <p>
                            Plataformas: <span>PS5, PC e Xbox Series X|S.</span>
                        </p>

                    </div>

                    <div class="vejma">

                        <a href="../Jogo/index.php?idJogo=5&nome=Cyberpunk%202077" class="vejamais"> Veja mais <img class="arrow-img" src="extras/arrow.svg" alt=""> </a>
                    </div>

                </div>

                <button onclick="mudaCon1()" class="botao-passar"><img src="extras/arrowRight.svg" alt=""></button>

            </div>
        </div>
        <div class="preenchimento">

            <!-- CARROSSEL COMPLETO - CONTEÚDO 3 -->
            <div class="conteudo2" id="conteudo3">

                <button onclick="voltarCon2()" class="botao-passar"> <img src="extras/arrowLeft.svg" alt=""> </button>

                <div class="carrossel-img">
                    <img id="imagem" src="jogosimg/residentevil4.jpg">
                </div>

                <div class="carrossel-txt">

                    <div class="titulo">
                        <h2>Resident Evil 4</h2>
                    </div>

                    <div class="textos2">
                        <p class="texto">Avaliação dos usuários em: <span>9.1</span></p>
                    </div>

                    <div class="textos3">
                        <p> Resident Evil 4 remake foi lançado em 2023 e é considerado um dos melhores jogos da série. O
                            protagonista Leon S. Kennedy, um agente do governo dos Estados Unidos, investiga o sequestro
                            da filha do presidente por um culto misterioso em uma vila isolada na Espanha.
                        </p>
                    </div>

                    <div class="plataformas">
                        <p>
                            Plataformas: <span>PS4|PS5, PC e Xbox Series X|S.</span>
                        </p>

                    </div>

                    <div class="vejma">
                        <a href="../Jogo/index.php?idJogo=6&nome=RE%204%20Remake" class="vejamais"> Veja mais <img class="arrow-img" src="extras/arrow.svg" alt=""> </a>
                    </div>

                </div>

                <button onclick="mudaCon2()" class="botao-passar"><img src="extras/arrowRight.svg" alt=""></button>

            </div>
        </div>

        <div class="preenchimento">

            <!-- CARROSSEL COMPLETO - CONTEÚDO 4 -->
            <div class="conteudo2" id="conteudo4">

                <button onclick="voltarCon3()" class="botao-passar"> <img src="extras/arrowLeft.svg" alt=""> </button>

                <div class="carrossel-img">
                    <img id="imagem" src="jogosimg/deadspace.jpeg">
                </div>

                <div class="carrossel-txt">

                    <div class="titulo">
                        <h2>Dead Space Remake</h2>
                    </div>

                    <div class="textos2">
                        <p class="texto">Avaliação dos usuários em: <span>8.9</span></p>
                    </div>

                    <div class="textos3">
                        <p> Dead Space Remake é um jogo de terror de sobrevivência lançado em 2023. Ele segue a história
                            de Isaac Clarke, um engenheiro espacial que é enviado para investigar um incidente em uma
                            gigantesca nave chamada USG Ishimura. Já disponível apenas para nova geração.
                        </p>
                    </div>

                    <div class="plataformas">
                        <p>
                            Plataformas: <span>PS5, PC e Xbox Series X|S.</span>
                        </p>

                    </div>

                    <div class="vejma">
                        <a href="../Jogo/index.php?idJogo=8&nome=Dead%20Space%20Remake" class="vejamais"> Veja mais <img class="arrow-img" src="extras/arrow.svg" alt=""> </a>
                    </div>

                </div>

                <button onclick="mudaCon3()" class="botao-passar"><img src="extras/arrowRight.svg" alt=""></button>

            </div>
        </div>


        <!-- MOBILE - Carrossel 1 -->
        <!-- CARDS MOBILE - CARD 1  -->
        <a href="../Jogo/index.php?idJogo=4&nome=Hogwarts%20Legacy">
            <div class="cards-mobile">


                <div class="img-mobile2">
                    <img id="imagem1" src="jogosimg/legacy.jpeg">
                </div>


                <div class="mobile-text">

                    <div class="mobile-btn">

                        <button class="mobile-vejamais"> <img src="extras/fav.svg" id="status24" onclick="mudaFav('status24')"> </button>

                    </div>



                    <div class="mobile-titulo">

                        <h2>HOGWARTS LEGACY</h2>

                    </div>


                    <div class="mobile-textos">
                        <p>Avaliação dos usuários em: <span>8.1</span></p>
                    </div>

                    <div class="mobile-plataformas">

                        <p>
                            Plataformas: <span>PS4|PS5, PC, Xbox Series X|S e Xbox One.</span>
                        </p>

                    </div>

                    <div class="mobile-butn">
                        <button><img class="add-img-mobile" src="extras/add.svg" alt=""> Adicionar</button>
                    </div>

                </div>
            </div>
        </a>
        <!-- CARDS MOBILE - CARD 2  -->
        <a href="../Jogo/index.php?idJogo=5&nome=Cyberpunk%202077">
            <div class="cards-mobile">


                <div class="img-mobile2">
                    <img id="imagem1" src="jogosimg/cyberpunk.jpeg">
                </div>


                <div class="mobile-text">

                    <div class="mobile-btn">

                        <button class="mobile-vejamais"> <img src="extras/fav.svg" id="status25" onclick="mudaFav('status25')"> </button>

                    </div>

                    <div class="mobile-titulo">

                        <h2>CYBERPUNK 2077 </h2>

                    </div>
                    <div class="mobile-textos">
                        <p>Avaliação dos usuários em: <span>7.9</span></p>
                    </div>

                    <div class="mobile-plataformas">

                        <p>
                            Plataformas: <span>PS4|PS5, PC, Xbox Series X|S e Xbox One.</span>
                        </p>

                    </div>

                    <div class="mobile-butn">
                        <button class="mobile-add"><img class="add-img-mobile" src="extras/add.svg" alt=""> Adicionar</button>
                    </div>

                </div>
            </div>
        </a>
        <!-- CARDS MOBILE - CARD 3  -->
        <a href="../Jogo/index.php?idJogo=6&nome=RE%204%20Remake">
            <div class="cards-mobile">


                <div class="img-mobile2">
                    <img id="imagem1" src="jogosimg/residentevil4.jpg">
                </div>


                <div class="mobile-text">

                    <div class="mobile-btn">

                        <button class="mobile-vejamais"> <img src="extras/fav.svg" id="status26" onclick="mudaFav('status26')"> </button>

                    </div>



                    <div class="mobile-titulo">

                        <h2>RESIDENT EVIL 4</h2>

                    </div>


                    <div class="mobile-textos">
                        <p>Avaliação dos usuários em: <span>9.1</span></p>
                    </div>

                    <div class="mobile-plataformas">

                        <p>
                            Plataformas: <span>PS4|PS5, PC, Xbox Series X|S e Xbox One.</span>
                        </p>

                    </div>

                    <div class="mobile-butn">
                        <button class="mobile-add"><img class="add-img-mobile" src="extras/add.svg" alt=""> Adicionar</button>
                    </div>

                </div>
            </div>
        </a>

        <!-- CARDS MOBILE - CARD 4 -->
        <a href="../Jogo/index.php?idJogo=8&nome=Dead%20Space%20Remake">
            <div class="cards-mobile">


                <div class="img-mobile2">
                    <img id="imagem1" src="jogosimg/deadspace.jpeg">
                </div>


                <div class="mobile-text">

                    <div class="mobile-btn">

                        <button class="mobile-vejamais"> <img src="extras/fav.svg" id="status27" onclick="mudaFav('status27')"> </button>

                    </div>

                    <div class="mobile-titulo">

                        <h2>DEAD SPACE REMAKE</h2>

                    </div>


                    <div class="mobile-textos">
                        <p>Avaliação dos usuários em: <span>8.9</span></p>
                    </div>

                    <div class="mobile-plataformas">

                        <p>
                            Plataformas: <span>PS4|PS5, PC, Xbox Series X|S e Xbox One.</span>
                        </p>

                    </div>

                    <div class="mobile-butn">
                        <button class="mobile-add"><img class="add-img-mobile" src="extras/add.svg" alt=""> Adicionar</button>
                    </div>

                </div>

            </div>
        </a>
        </div>
        </div>


        <div class="ver-mais">
            <a href="../Jogos/index.php">
                Ver Mais
            </a>
        </div>

        <!-- FIM CARROSSEL DESTAQUES -->
        <div class="espacamento-banner"> </div>
        <div class="titulo-lancamentos">
            <h2>
                <a name="lancamentos"></a>
                <span>|</span>Lançamentos
            </h2>
        </div>
        <!-- CARROSSEL 2 LANÇAMENTOS-->
        <div class="espacamento-carrosel"> </div>
        <div class="container-card" id="card1">
            <button onclick="voltarCard()" id="pedro" class="botao-passar2"> <img src="extras/arrowR.svg" alt="">
            </button>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status" onclick="mudaFav('status','status12')"></button>
                <img src="jogosimg/starfield.jpg" alt="">

                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        Starfield
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        6 de setembro de 2023
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=9&nome=Starfield"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>

            </div>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status1" onclick="mudaFav('status1','status13')"> </button>
                <img src="jogosimg/liesofp.avif" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        Lies of P
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        19 de setembro de 2023
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=10&nome=Lies%20of%20P"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>
            </div>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status2" onclick="mudaFav('status2','status14')"> </button>
                <img src="jogosimg/avatar.avif" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        Avatar: FOP
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        7 de dezembro de 2023
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=11&nome=Avatar:%20Frontiers%20of%20Pandora"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>

            </div>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status3" onclick="mudaFav('status3','status15')"> </button>
                <img src="jogosimg/acmirage.avif" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        AC: Mirage
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        17 de outubro de 2023
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=12&nome=Assassin's%20Creed%20Mirage"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>

            </div>
            <button onclick="mudaCard()" class="botao-passar2"><img src="extras/arrowL.svg" alt=""></button>
        </div>
        <div class="container-card2" id="card2">
            <button onclick="voltarCard2()" class="botao-passar2"> <img src="extras/arrowR.svg" alt=""> </button>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status4" onclick="mudaFav('status4','status16')"> </button>
                <img src="jogosimg/mk1.avif" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        Mortal Kombat 1
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        19 de setembro de 2023
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=13&nome=Mortal%20Kombat%201"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>

            </div>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status5" onclick="mudaFav('status5','status17')"> </button>
                <img src="jogosimg/alanwake2.jpeg" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        Alan Wake II
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        17 de outubro de 2023
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=14&nome=Alan%20Wake%20II"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>
            </div>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status6" onclick="mudaFav('status6','status18')"> </button>
                <img src="jogosimg/spiderman2.jpg" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        M. Spider-Man 2
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        Sem data oficial
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=15&nome=Marvel's%20Spider%20-%20Man%202"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>

            </div>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status7" onclick="mudaFav('status7','status19')"> </button>
                <img src="jogosimg/payday3.jpg" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        Payday 3
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        21 de setembro de 2023
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=16&nome=Payday%203"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>

            </div>
            <button onclick="mudaCard2()" class="botao-passar2"><img src="extras/arrowL.svg" alt=""></button>
        </div>
        <div class="container-card2" id="card3">
            <button onclick="voltarCard3()" class="botao-passar2"> <img src="extras/arrowR.svg" alt=""> </button>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status8" onclick="mudaFav('status8','status20')"> </button>
                <img src="jogosimg/forzamotosport.avif" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        Forza Motorsport
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        6 de setembro de 2023
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=17&nome=Forza%20Motorsport"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>

            </div>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status9" onclick="mudaFav('status9','status21')"> </button>
                <img src="jogosimg/pragmata.jpeg" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        Pragmata
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        Sem data oficial
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=18&nome=Pragmata"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>
            </div>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status10" onclick="mudaFav('status10','status22')"> </button>
                <img src="jogosimg/skullandbones.jpg" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        Skull & Bones
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        Sem data oficial
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=19&nome=Skull%20&%20Bones"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>

            </div>
            <div class="card1">
                <button class="fav"> <img src="extras/fav.svg" alt="" id="status11" onclick="mudaFav('status11','status23')"> </button>
                <img src="jogosimg/immortals.jpg" alt="">
                <div class="titulo-card">
                    <div class="raio">
                        <img src="extras/light.svg" alt="">
                    </div>
                    <h2>
                        Immortals of A...
                    </h2>
                </div>
                <div class="data-card">
                    <p>
                        2 de agosto de 2023
                    </p>
                </div>
                <div class="button-card">
                    <button>
                        <a href="../Jogo/index.php?idJogo=20&nome=Immortals%20of%20Aveum"> Veja mais <img src="extras/vejamais.svg" alt=""></a>
                    </button>
                </div>

            </div>
            <button id="mudaCard3" class="botao-passar2"><img src="extras/arrowL.svg" alt=""></button>
        </div>



        <!-- VERSION MOBILE CARROSSEL 2-->
        <div class="carrossel-mobile">
            <div class="carousel2">
                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status12" onclick="mudaFav('status12','status')"> </button>
                        <img src="jogosimg/starfield.jpg" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>Starfield</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>06/09/2023</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=9&nome=Starfield">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>
                    </div>

                </div>

                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status13" onclick="mudaFav('status13','status1')"> </button>
                        <img src="jogosimg/liesofp.avif" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>Lies Of P</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>19/09/2023</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=10&nome=Lies%20of%20P">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>
                    </div>

                </div>


                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status14" onclick="mudaFav('status14','status2')"> </button>
                        <img src="jogosimg/avatar.avif" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>Avatar: FOP</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>07/12/23</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=11&nome=Avatar:%20Frontiers%20of%20Pandora">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>


                    </div>

                </div>
                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status15" onclick="mudaFav('status15','status3')"> </button>
                        <img src="jogosimg/acmirage.avif" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>AC: Mirage</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>17/10/23</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=12&nome=Assassin's%20Creed%20Mirage">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>


                    </div>


                </div>

                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status16" onclick="mudaFav('status16','status4')"> </button>
                        <img src="jogosimg/mk1.avif" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>Mortal Kombat 1</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>19/09/23</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=13&nome=Mortal%20Kombat%201">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>


                    </div>

                </div>

                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status17" onclick="mudaFav('status17','status5')"> </button>
                        <img src="jogosimg/alanwake2.jpeg" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>Alan Wake II</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>17/10/23</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=14&nome=Alan%20Wake%20II">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>


                    </div>

                </div>

                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status18" onclick="mudaFav('status18','status6')"> </button>
                        <img src="jogosimg/spiderman2.jpg" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2> M. Spider-Man 2</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>Sem data oficial</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=15&nome=Marvel's%20Spider%20-%20Man%202">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>


                    </div>

                </div>

                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status19" onclick="mudaFav('status19','status7')"> </button>
                        <img src="jogosimg/payday3.jpg" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>Payday 3</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>21/09/23</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=16&nome=Payday%203">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>


                    </div>

                </div>
                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status20" onclick="mudaFav('status20','status8')"> </button>
                        <img src="jogosimg/forzamotosport.avif" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>Forza Motorsport</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>06/09/23</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=17&nome=Forza%20Motorsport">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>


                    </div>

                </div>
                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status21" onclick="mudaFav('status21','status9')"> </button>
                        <img src="jogosimg/pragmata.jpeg" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>Pragmata</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>Sem data oficial</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=18&nome=Pragmata">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>


                    </div>

                </div>
                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status22" onclick="mudaFav('status22','status10')"> </button>
                        <img src="jogosimg/skullandbones.jpg" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>Skull & Bones</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>Sem data oficial</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=19&nome=Skull%20&%20Bones">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>


                    </div>

                </div>
                <div class="conteudo1">
                    <div class="imagem1-mobile">
                        <button class="fav"> <img src="extras/fav.svg" alt="" id="status23" onclick="mudaFav('status23','status11')"> </button>
                        <img src="jogosimg/immortals.jpg" alt="Imagem 1">
                    </div>
                    <div class="text-carrossel-mobile">
                        <div class="titulo-mobile2">
                            <div class="raio">
                                <img src="extras/light.svg" alt="">
                            </div>
                            <h2>Immortals of Aveum</h2>
                        </div>
                        <div class="text2-mobile">
                            <p>02/08/23</p>
                        </div>
                        <div class="button-card-mobile2">
                            <button>
                                <a href="../Jogo/index.php?idJogo=20&nome=Immortals%20of%20Aveum">
                                    <p>Veja mais <img src="extras/vejamais.svg" alt=""></p>
                                </a>
                            </button>
                        </div>


                    </div>

                </div>



            </div>
        </div>
        <div class="arrastar-lado">
            <p>
                Arraste pro lado <img src="extras/doubleArrow.svg" alt="">
            </p>
        </div>

        <div class="espacamento-banner"> </div>

        <!-- Segundo Titulo -->

        <div class="titulo1-destaque">
            <h2>
                <a name="jogar"></a>
                O QUE JOGAR?
            </h2>
        </div>
        <div class="espacamento-carrosel"> </div>

        <!-- CARROSSEL FAVORITOS -->

        <div class="carrossel-galeria" id="carrossel-galeria">
            <div class="divisao">
                <div class="img-principal">
                    <img id="img0" src="jogosimg/elderring.webp" alt="">
                    <img id="img01" src="jogosimg/elder1.webp" alt="">
                    <img id="img02" src="jogosimg/elder2.webp" alt="">
                    <img id="img03" src="jogosimg/elder3.jpg" alt="">
                    <img id="img04" src="jogosimg/elder4.jpg" alt="">
                </div>
            </div>
            <div class="divisao2">

                <div class="titulo-galeria">
                    <h2>
                        Elden Ring
                    </h2>
                </div>
                <div class="imagens-secundaria">
                    <div class="img-secundaria">
                        <img onmouseover="imagem1()" onmouseout="tiraImagem1()" src="jogosimg/elder1.webp" alt="">
                    </div>
                    <div class="img-secundaria2">
                        <img onmouseover="imagem2()" onmouseout="tiraImagem2()" src="jogosimg/elder2.webp" alt="">
                    </div>
                    <div class="img-secundaria3">
                        <img onmouseover="imagem3()" onmouseout="tiraImagem3()" src="jogosimg/elder3.jpg" alt="">
                    </div>
                    <div class="img-secundaria4">
                        <img onmouseover="imagem4()" onmouseout="tiraImagem4()" src="jogosimg/elder4.jpg" alt="">
                    </div>
                </div>
                <div class="botao-galeria">
                    <button>
                        <a href="../Jogo/index.php?idJogo=21&nome=Elden%20Ring">Avaliar</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="carrossel-galeria2" id="carrossel-galeria3">
            <div class="divisao">
                <div class="img-principal">
                    <img id="img00" src="jogosimg/zelda.webp" alt="">
                    <img id="img05" src="jogosimg/zelda2.jpg" alt="">
                    <img id="img06" src="jogosimg/zelda3.webp" alt="">
                    <img id="img07" src="jogosimg/zelda4.jpg" alt="">
                    <img id="img08" src="jogosimg/zelda5.jpg" alt="">
                </div>
            </div>
            <div class="divisao2">

                <div class="titulo-galeria">
                    <h2>
                        Zelda: Tears of the Kingdom
                    </h2>
                </div>
                <div class="imagens-secundaria">
                    <div class="img-secundaria">
                        <img onmouseover="imagem5()" onmouseout="tiraImagem5()" src="jogosimg/zelda2.jpg" alt="">
                    </div>
                    <div class="img-secundaria2">
                        <img onmouseover="imagem6()" onmouseout="tiraImagem6()" src="jogosimg/zelda3.webp" alt="">
                    </div>
                    <div class="img-secundaria3">
                        <img onmouseover="imagem7()" onmouseout="tiraImagem7()" src="jogosimg/zelda4.jpg" alt="">
                    </div>
                    <div class="img-secundaria4">
                        <img onmouseover="imagem8()" onmouseout="tiraImagem8()" src="jogosimg/zelda5.jpg" alt="">
                    </div>
                </div>
                <div class="botao-galeria">
                    <button>
                        <a href="../Jogo/index.php?idJogo=23&nome=Zelda:%20Tears%20of%20the%20Kingdom">Avaliar</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="carrossel-galeria2" id="carrossel-galeria2">
            <div class="divisao">
                <div class="img-principal">
                    <img id="img000" src="jogosimg/thelastofus2.jpg" alt="">
                    <img id="img09" src="jogosimg/thelast2.jpg" alt="">
                    <img id="img010" src="jogosimg/thelast3.webp" alt="">
                    <img id="img011" src="jogosimg/thelast4.avif" alt="">
                    <img id="img012" src="jogosimg/thelast5.webp" alt="">
                </div>
            </div>
            <div class="divisao2">

                <div class="titulo-galeria">
                    <h2>
                        The Last of Us Part II
                    </h2>
                </div>
                <div class="imagens-secundaria">
                    <div class="img-secundaria">
                        <img onmouseover="imagem9()" onmouseout="tiraImagem9()" src="jogosimg/thelast2.jpg" alt="">
                    </div>
                    <div class="img-secundaria2">
                        <img onmouseover="imagem10()" onmouseout="tiraImagem10()" src="jogosimg/thelast3.webp" alt="">
                    </div>
                    <div class="img-secundaria3">
                        <img onmouseover="imagem11()" onmouseout="tiraImagem11()" src="jogosimg/thelast4.avif" alt="">
                    </div>
                    <div class="img-secundaria4">
                        <img onmouseover="imagem12()" onmouseout="tiraImagem12()" src="jogosimg/thelast5.webp" alt="">
                    </div>
                </div>
                <div class="botao-galeria">
                    <button>
                        <a href="../Jogo/index.php?idJogo=22&nome=The%20Last%20of%20Us%20Part%20II">Avaliar</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="bolas">
            <label for="radio1" class="botao-btn" onclick="executarfuncao2()" id="botao1"></label>
            <label for="radio2" class="botao-btn" onclick="executarfuncao()" id="botao2"></label>
            <label for="radio3" class="botao-btn" onclick="executarfuncao3()" id="botao3"></label>

        </div>
        <div class="espacamento-banner"></div>
        <div class="linha">
            <hr color="#00ff80">
            </hr>
        </div>
        <div class="espacamento-banner"></div>

        <div class="recomendacao">
            <div class="textos-meio">
                <div class="titulo-meio">
                    <h2>
                        <span>|</span>Desfrute de novos horizontes
                    </h2>
                </div>

                <div class="text-meio">
                    <p>
                        A Gaming Core ajuda você a descobrir novas aventuras
                    </p>
                </div>

                <div class="button-meio">
                    <a href="../Jogos/index.php"> Nossas Recomendações para você</a>
                </div>
            </div>
            <div class="controle-meio">
                <img src="extras/xbox.svg" alt="">
            </div>
        </div>

        <div class="espacamento-banner"></div>
        <div class="linha">
            <hr color="#00ff80">
            </hr>
        </div>
        <div class="espacamento-banner"></div>
        <div class="titulo-top">
            <h2>
                <a name="top"></a>
                <span>|</span>Top jogos da semana
            </h2>
            <a href="../Jogos/index.php">Obter mais recomendações <img src="extras/arrowL.svg" alt=""></a>
        </div>

        <div class="espacamento-carrosel"></div>

        <!-- CARROSSEL 4 TOP -->

        <div class="container-card_v2" id="card1_v2">
            <button onclick="voltarCard_v2()" id="pedro_v2" class="botao-passar2_v2"> <img src="extras/arrowR.svg" alt=""> </button>
            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status28" onclick="mudaFav('status28','status40')"> </button>
                <img src="jogosimg/re4.webp" alt="">

                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        9.1
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        Resident Evil 4
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=6&nome=RE%204%20Remake"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=9iy6gHDKvzA">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>

            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" id="status29" onclick="mudaFav('status29','status41')"> </button>
                <img src="jogosimg/legacy.jpeg" alt="">
                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        8.2
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        Hogwarts Legacy
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=4&nome=Hogwarts%20Legacy"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=78CP8na1Fpo">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>

            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status30" onclick="mudaFav('status30','status42')"> </button>
                <img src="jogosimg/rdr2.jpg" alt="">


                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        10.0
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        Red Dead R 2
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=2&nome=Red%20Dead%20Redemption%202"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=gmA6MrX81z4">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>

            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status31" onclick="mudaFav('status31','status43')"> </button>
                <img src="jogosimg/gtav.jpg" alt="">


                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        9.8
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        GTA V
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=3&nome=GTA%20V"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=QkkoHAzjnUs">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>

            </div>
            <button onclick="mudaCard_v2()" class="botao-passar2_v2"><img src="extras/arrowL.svg" alt=""></button>
        </div>

        <div class="container-card2_v2" id="card2_v2">
            <button onclick="voltarCard2_v2()" class="botao-passar2_v2"> <img src="extras/arrowR.svg" alt=""> </button>
            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status32" onclick="mudaFav('status32','status44')"> </button>
                <img src="jogosimg/thewitcher3.jpeg" alt="">


                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        9.6
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        The Witcher 3
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=1&nome=The%20Witcher%203"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=53MyR_Z3i1w&t=4s">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>

            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status33" onclick="mudaFav('status33','status45')"> </button>
                <img src="jogosimg/forza5.9ac09d39-064d-466c-81ca-2f1b6f0b95c5" alt="">

                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        8.9
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        Forza Horizon 5
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=24&nome=Forza%20Horizon%205"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=Rv7xLt5yNsM">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>

            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status34" onclick="mudaFav('status34','status46')"> </button>
                <img src="jogosimg/sekiro.webp" alt="">

                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        9.7
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        Sekiro: SDT
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=25&nome=Sekiro:%20Shadows%20Die%20Twice"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=rXMX4YJ7Lks">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>

            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status35" onclick="mudaFav('status35','status48')"> </button>
                <img src="jogosimg/elderring.webp" alt="">

                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        9.3
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        Elden Ring
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=21&nome=Elden%20Ring"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=E3Huy2cdih0"> Trailer </a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>
            <button onclick="mudaCard2_v2()" class="botao-passar2_v2"><img src="extras/arrowL.svg" alt=""></button>
        </div>
        </div>

        <div class="container-card2_v2" id="card3_v2">
            <button onclick="voltarCard3_v2()" class="botao-passar2_v2"> <img src="extras/arrowR.svg" alt=""> </button>
            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status36" onclick="mudaFav('status36')"> </button>
                <img src="jogosimg/darksouls3.webp" alt="">

                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        8.8
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        Dark Souls 3
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=7&nome=Dark%20Souls%20III"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=cWBwFhUv1-8">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>

            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status37" onclick="mudaFav('status37')"> </button>
                <img src="jogosimg/acvalhalla.png" alt="">

                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        7.8
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        AC: Valhalla
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=26&nome=Assassin's%20Creed%20Valhalla"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=TUbgBVTD7VI">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>

            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status38" onclick="mudaFav('status38')"> </button>
                <img src="jogosimg/cyberpunk2077.png" alt="">

                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        6.9
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        Cyberpunk 2077
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=5&nome=Cyberpunk%202077"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=qIcTM8WXFjk">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>

            <div class="card1_v2">
                <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status39" onclick="mudaFav('status39')"> </button>
                <img src="jogosimg/thelastofus22.avif" alt="">

                <div class="titulo-card_v2">
                    <div class="star">
                        <img src="extras/star.svg" alt="">
                    </div>
                    <h2>
                        9.6
                    </h2>
                </div>
                <div class="data-card_v2">
                    <p>
                        The Last Of Us 2
                    </p>
                </div>
                <div class="button-card2_v2">
                    <button>
                        <a href="../Jogo/index.php?idJogo=22&nome=The%20Last%20of%20Us%20Part%20II"> + Lista <span>Jogar</span></a>
                    </button>
                </div>
                <div class="button-card_v2">
                    <button>
                        <a href="https://www.youtube.com/watch?v=qPNiIeKMHyg">Trailer</a>
                        <div class="arrow-trailer">
                            <img src="extras/arrow.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>
            <button onclick="mudaCard3_v2()" id="pedro_v2" class="botao-passar2_v2"><img src="extras/arrowL.svg" alt=""></button>
        </div>

        <!-- CARROSSEL 4 TOP MOBILE -->
        <!-- Card 1 - carrossel v2 -->
        <a href="../Jogo/index.php?idJogo=6&nome=RE%204%20Remake">
            <div class="mobile-cards">
                <div class="img-mobile">
                    <img src="jogosimg/re4.webp" alt="">
                </div>
                <div class="texto-lateral-mobile">
                    <div class="favorito-mobile">
                        <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status40" onclick="mudaFav('status40','status28')"> </button>
                    </div>
                    <div class="title-mobile">
                        <h2>
                            Resident Evil 4 Remake
                        </h2>
                    </div>
                    <div class="avaliacao-mobile">
                        <p>
                            <img src="extras/star.svg" alt="" style="width: 1.2rem;">
                            Avaliação: <span>9.1</span>
                        </p>
                    </div>
                    <div class="espaco-mobile"> </div>

                    <div class="botao-mobile2">
                        <button>
                            + Lista Jogar
                        </button>
                    </div>
                </div>

            </div>
        </a>

        <!-- Card 2 - carrossel v2 -->
        <a href="../Jogo/index.php?idJogo=4&nome=Hogwarts%20Legacy">
            <div class="mobile-cards">
                <div class="img-mobile">
                    <img src="jogosimg/legacy.jpeg" alt="">
                </div>
                <div class="texto-lateral-mobile">
                    <div class="favorito-mobile">
                        <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status41" onclick="mudaFav('status41','status29')"> </button>
                    </div>
                    <div class="title-mobile">
                        <h2>
                            Hogwarts Legacy
                        </h2>
                    </div>
                    <div class="avaliacao-mobile">
                        <p>
                            <img src="extras/star.svg" alt="" style="width: 1.2rem;"> Avaliação: <span>8.2</span>
                        </p>
                    </div>
                    <div class="espaco-mobile"> </div>

                    <div class="botao-mobile2">
                        <button>
                            + Lista Jogar
                        </button>
                    </div>
                </div>

            </div>
        </a>
        <!-- Card 3 - carrossel v2 -->
        <a href="../Jogo/index.php?idJogo=2&nome=Red%20Dead%20Redemption%202">
            <div class="mobile-cards">
                <div class="img-mobile">
                    <img src="jogosimg/rdr22.jpeg" alt="">
                </div>
                <div class="texto-lateral-mobile">
                    <div class="favorito-mobile">
                        <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status42" onclick="mudaFav('status42','status30')"> </button>
                    </div>
                    <div class="title-mobile">
                        <h2>
                            Red Dead Redemption 2
                        </h2>
                    </div>
                    <div class="avaliacao-mobile">
                        <p>
                            <img src="extras/star.svg" alt="" style="width: 1.2rem;"> Avaliação: <span>10.0</span>
                        </p>
                    </div>
                    <div class="espaco-mobile"> </div>

                    <div class="botao-mobile2">
                        <button>
                            + Lista Jogar
                        </button>
                    </div>
                </div>

            </div>
        </a>

        <!-- Card 4 - carrossel v2 -->
        <a href="../Jogo/index.php?idJogo=3&nome=GTA%20V">
            <div class="mobile-cards">
                <div class="img-mobile">
                    <img src="jogosimg/gtav.jpg" alt="">
                </div>
                <div class="texto-lateral-mobile">
                    <div class="favorito-mobile">
                        <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status43" onclick="mudaFav('status43','status31')"> </button>
                    </div>
                    <div class="title-mobile">
                        <h2>
                            Grand Theft Auto V
                        </h2>
                    </div>
                    <div class="avaliacao-mobile">
                        <p>
                            <img src="extras/star.svg" alt="" style="width: 1.2rem;"> Avaliação: <span>9.8</span>
                        </p>
                    </div>
                    <div class="espaco-mobile"> </div>

                    <div class="botao-mobile2">
                        <button>
                            + Lista Jogar
                        </button>
                    </div>
                </div>

            </div>
        </a>

        <!-- Card 5 - carrossel v2 -->
        <a href="../Jogo/index.php?idJogo=1&nome=The%20Witcher%203">
            <div class="mobile-cards">
                <div class="img-mobile">
                    <img src="jogosimg/thewitcher33.webp" alt="">
                </div>
                <div class="texto-lateral-mobile">
                    <div class="favorito-mobile">
                        <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status44" onclick="mudaFav('status44','status32')"> </button>
                    </div>
                    <div class="title-mobile">
                        <h2>
                            The Witcher 3: Wild Hunt
                        </h2>
                    </div>
                    <div class="avaliacao-mobile">
                        <p>
                            <img src="extras/star.svg" alt="" style="width: 1.2rem;"> Avaliação: <span>9.6</span>
                        </p>
                    </div>
                    <div class="espaco-mobile"> </div>

                    <div class="botao-mobile2">
                        <button>
                            + Lista Jogar
                        </button>
                    </div>
                </div>

            </div>
        </a>

        <!-- Card 6 - carrossel v2 -->
        <a href="../Jogo/index.php?idJogo=24&nome=Forza%20Horizon%205">
            <div class="mobile-cards">
                <div class="img-mobile">
                    <img src="jogosimg/forza55.jpg" alt="">
                </div>
                <div class="texto-lateral-mobile">
                    <div class="favorito-mobile">
                        <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status45" onclick="mudaFav('status45','status33')"> </button>
                    </div>
                    <div class="title-mobile">
                        <h2>
                            Forza Horizon 5
                        </h2>
                    </div>
                    <div class="avaliacao-mobile">
                        <p>
                            <img src="extras/star.svg" alt="" style="width: 1.2rem;"> Avaliação: <span>8.9</span>
                        </p>
                    </div>
                    <div class="espaco-mobile"> </div>

                    <div class="botao-mobile2">
                        <button>
                            + Lista Jogar
                        </button>
                    </div>
                </div>

            </div>
        </a>

        <!-- Card 7 - carrossel v2 -->
        <a href="../Jogo/index.php?idJogo=25&nome=Sekiro:%20Shadows%20Die%20Twice">
            <div class="mobile-cards">
                <div class="img-mobile">
                    <img src="jogosimg/sekiro.webp" alt="">
                </div>
                <div class="texto-lateral-mobile">
                    <div class="favorito-mobile">
                        <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status46" onclick="mudaFav('status46','status34')"> </button>
                    </div>
                    <div class="title-mobile">
                        <h2>
                            Sekiro: Shadows die Twice
                        </h2>
                    </div>
                    <div class="avaliacao-mobile">
                        <p>
                            <img src="extras/star.svg" alt="" style="width: 1.2rem;"> Avaliação: <span>9.7</span>
                        </p>
                    </div>
                    <div class="espaco-mobile"> </div>

                    <div class="botao-mobile2">
                        <button>
                            + Lista Jogar
                        </button>
                    </div>
                </div>

            </div>
        </a>

        <!-- Card 8 - carrossel v2 -->
        <a href="../Jogo/index.php?idJogo=21&nome=Elden%20Ring">
            <div class="mobile-cards">
                <div class="img-mobile">
                    <img src="jogosimg/elderring.webp" alt="">
                </div>
                <div class="texto-lateral-mobile">
                    <div class="favorito-mobile">
                        <button class="fav_v2"> <img src="extras/fav.svg" alt="" id="status48" onclick="mudaFav('status48','status35')"> </button>
                    </div>
                    <div class="title-mobile">
                        <h2>
                            Elden Ring
                        </h2>
                    </div>
                    <div class="avaliacao-mobile">
                        <p>
                            <img src="extras/star.svg" alt="" style="width: 1.2rem;"> Avaliação: <span>9.3</span>
                        </p>
                    </div>
                    <div class="espaco-mobile"> </div>

                    <div class="botao-mobile2">
                        <button>
                            + Lista Jogar
                        </button>
                    </div>
                </div>

            </div>
        </a>
        <div class="ver-mais">
            <a href="../Jogos/index.php">
                Ver Mais
            </a>
        </div>

        <!-- Monte sua lista -->

        <div class="espacamento-banner"></div>
        <div class="titulo1-destaque">
            <h2>
                MONTE SUA LISTA
            </h2>
        </div>
        <div class="espacamento-carrosel"></div>
        <div class="favorito-monte">
            <img src="extras/fav.svg" alt="">
        </div>
        <div class="text-monte">
            <h2>
                Crie sua lista com seus jogos favoritos!
            </h2>
        </div>
        <div class="text-monte2">
            <p>
                Salve os jogos que deseja acompanhar e os que pretende jogar.
            </p>
        </div>

        <div class="button-monte">
            <a href="registro.php"> Ver Lista</a>
        </div>

        <div class="espacamento-banner"></div>
    </main>



    <!-- footer -->

    <?php
    include('../Template/Footer/index.php');
    ?>



    <!-- Imports template JS -->
    <script src="../Template/Navbar/script.js"></script>

    <script src="script.js"></script>
</body>

</html>
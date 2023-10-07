<?php
include '../DatabaseConect/conexao.php';
session_start();
if (!isset($_SESSION['username']) && isset($_SESSION['imgPerfil'])) {
  header("Location: ../../Login_Cadastro/Login/login.php");
  exit();
}
$username = $_SESSION['username'];
$avatar = $_SESSION['imgPerfil'];

if (isset($_GET['idJogo']) && isset($_GET['nome'])) {
  $idJogo = $_GET['idJogo'];
  $nomeJogo = $_GET['nome'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Imports Template References and CSS -->
  <?php
  include('../Template/references/ref.php');
  ?>

  <title><?php echo $nomeJogo; ?></title>

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
    <div class="line-full"></div>
    <?php
    $genero_atual = "";
    $nome_jogo_atual = "";
    $sql = "SELECT cod_jogo, nome, data_lanc, plataformas, genero1, genero2, linkVideo, imagemJogo, imagemVideo, imagemSecundaria1, imagemSecundaria2, resumo, developer, curiosidade, nota FROM games WHERE cod_jogo = $idJogo";

    $result_div = $conn->query($sql);

    if ($result_div->num_rows > 0) {
      while ($row_div = $result_div->fetch_assoc()) {
        $genero_atual = $row_div["genero1"];
        $nome_jogo_atual = $row_div["nome"];
        echo '<p id="imgSecundaria1">' . $row_div["imagemSecundaria1"] . '</p>';
        echo '<p id="imgSecundaria2">' . $row_div["imagemSecundaria2"] . '</p>';
        echo '
      <div class="header-container-jogo">
        <div class="title-header">
          <h1>' . $row_div["nome"] . '</h1>
        </div>
        <div class="avaliacao" id="av1">
          <h2>Avaliação dos usuários</h2>
          <p><img src="extraAndImg-jogo/icons/star-all.svg" alt="" />' . $row_div["nota"] . '</p>
        </div>
  
        <div class="avaliacao" id="av2">
          <h2>Faça sua avaliação</h2>
          <a href=""
            ><img src="extraAndImg-jogo/icons/star-user.svg" alt="" />
            <p>Avaliar</p>
          </a>
        </div>

        <div class="jogo-information" id="if1">
          <h3>' . $row_div["data_lanc"] . '</h3>
        </div>

        <div class="jogo-information" id="if2">
          <h3>
            Plataformas: ' . $row_div["plataformas"] . '
          </h3>
        </div>
      </div>

      <div class="body-container-jogo">
        <div class="img-principal">
          <img id="img-prin" src="' . $row_div["imagemJogo"] . '" alt="" />
          <button onclick="favoritar()">
            <img class="fav" id="fav" src="extraAndImg-jogo/icons/add-list.svg" alt="" />
          </button>
        </div>
        <div class="video">
          <img id="video-play" src="' . $row_div["imagemVideo"] . '" alt="" />
          <a href="' . $row_div["linkVideo"] . '"
            ><img id="play-img" src="extraAndImg-jogo/icons/play.svg" alt=""
          /></a>
        </div>
        <div class="img-jogo1">
          <span
            ><img
              class="img-secundaria"
              src="' . $row_div["imagemSecundaria1"] . '"
              alt=""
              onclick="abrirLightbox()"
          /></span>
        </div>
        <div class="img-jogo2">
          <span
            ><img
              class="img-secundaria"
              src="' . $row_div["imagemSecundaria2"] . '"
              alt=""
              onclick="abrirLightbox2()"
          /></span>
        </div>
      </div>

      <div class="footer-container-jogo">
        <div class="generos">
          <p>' . $row_div["genero1"] . '</p>
          <p>' . $row_div["genero2"] . '</p>
        </div>
        

        <div class="resumo">
          <p>
            ' . $row_div["resumo"] . '
          </p>
        </div>

        <div class="developer">
          <p>Produzido por: <span> ' . $row_div["developer"] . ' </span>
        </div>

        <div class="curiosidade">
          <p>
           ' . $row_div["curiosidade"] . '
          </p>
        </div>

        <div class="button">
          <button
            id="adicionaJogosLista"
            nomeDoUsuario="' . $username . '"
            nomeDoJogo="' . $nome_jogo_atual . '" 
            imagemJogo="' . $row_div["imagemJogo"] . '"
          >
            <img src="extraAndImg-jogo/icons/add.svg" alt="" />
            Adicionar à Lista
          </button>
          <p>Adicione mais jogos a lista</p>
          <p>Comente sobre os jogos</p>
        </div>

        <div class="button2">
          <a href="#jogos-explore">
            Ver <img src="extraAndImg-jogo/icons/add.svg" alt="" /> jogos do gênero
          </a>
        </div>

        <div class="avaliacao" id="av3">
          <h2>Avaliação dos usuários</h2>
          <p id="para"><img src="extraAndImg-jogo/icons/star-all.svg" alt="" />' . $row_div["nota"] . '</p>
        </div>
      </div>

      <div class="lightbox" id="lightbox">
        <div class="fechar-imagem" id="fechar-imagem">
          <span class="fechar" id="fechar">&times;</span>
        </div>
        <img class="lightbox-imagem" id="lightbox-imagem" />
      </div> 
     ';
      }
    } else {
    }
    ?>
    <div id="genero-atual" data-genero="<?php echo htmlspecialchars($genero_atual); ?>"></div>
    <div id="explorer">
      <div class="explore-more">
        <div class="title-explore" id="jogos-explore">
          <h2><span>|</span>Explorar mais</h2>
        </div>
        <?php
        $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
        $sql_2 = "SELECT * FROM jogos ORDER BY RAND() LIMIT $offset, 4";
        $result = $conn->query($sql_2);

        if ($result->num_rows > 0) {
          $cardsExibidos = 0;
          echo '<div id="card-container" class="card-explore">';
          while ($row_div2 = $result->fetch_assoc()) {
            if ($row_div2["nome"] !== $nome_jogo_atual) {
              echo '
              <div class="cards">
                <img class="imagens-principais" src="' . $row_div2["imagem"] . '" alt="" />

                <div class="title-cards">
                  <h2>
                    <img id="bolt" src="extraAndImg-jogo/icons/raio.svg" alt="" />
                    ' . $row_div2["nome"] . '
                  </h2>
                </div>

                <div class="notas-cards">
                  <p><img id="star-cards" src="extraAndImg-jogo/icons/star.svg" alt="" /> ' . $row_div2["nota"] . '</p>
                </div>

                <a href="' . $row_div2["endereco"] . '">
                  <img id="add-button" src="extraAndImg-jogo/icons/add.svg" alt="" />Veja Mais
                </a>
              </div>
              ';

              $cardsExibidos++;

              if ($cardsExibidos === 5) {
                echo '</div>';
              }

              echo '
            <a class="adress-mobile" href="' . $row_div2["endereco"] . '">
            <div class="cards-mobile">
                <div class="imagem-mobile">
                  <img src="' . $row_div2["imagem"] . '" alt="" />
                </div>
                <div class="conteudo-mobile">
                  <div class="title-mobile">' . $row_div2["nome"] . '</div>

                  <div class="avaliacao-mobile">
                    <img src="extraAndImg-jogo/icons/star.svg" alt="" />
                    <p>' . $row_div2["nota"] . '</p>
                  </div>
                  <button class="add-mobile">
                    <img class="add-mobile" src="extraAndImg-jogo/icons/add.svg" alt="" /> Adicionar
                  </button>
                </div>
              </div>
              </a>
                ';
            }
          }
        }
        ?>
      </div>
      <div class="card-explore" id="explore2"></div>
      <div id="loading-animation">
        <img src="extraAndImg-jogo/icons/loading-gif.gif" alt="Carregando..." />
      </div>
      <button id="loading">Carregar mais</button>
      <form method="post" action="FuncoesJogo/processar_comentario.php">
        <input type="hidden" name="idJogo" value="<?php echo $idJogo; ?>">
        <input type="hidden" name="nomeJogo" value="<?php echo $nomeJogo; ?>">
        <div id="comentarios">
          <div class="title-explore">
            <h2><span>|</span>Comentários</h2>
          </div>
          <div id="corpo-comentarios">
            <div id="comentar">
              <div class="img-usuario" style="background-image: url(../avatarAndBanners/<?php echo $avatar; ?>)"></div>
              <input type="text" onclick="abrir()" id="comentario" name="comentario" placeholder="Faça seu comentário..." required />
            </div>
            <div id="ocult-submit">
              <button type="button" id="cancelar" onclick="cancelarComentario()">Cancelar</button>
              <input type="submit" class="enviarComentario" id="enviar" value="Comentar" disabled />
            </div>

      </form>
    </div>
    <?php
    $query_comentarios = "SELECT * FROM comentarios WHERE id_jogo = $idJogo";
    $result_comentarios = mysqli_query($conn, $query_comentarios);

    if (mysqli_num_rows($result_comentarios) > 0) {
      while ($row_comentarios = mysqli_fetch_assoc($result_comentarios)) {
        $data_publicacao = $row_comentarios['data_publicacao'];
        $data_formatada = date("Y-m-d", strtotime($data_publicacao));
        $comentario_id = $row_comentarios['id'];

        // Consultar a tabela user_actions para verificar se o usuário atual realizou alguma ação neste comentário
        $query_user_action = "SELECT * FROM user_actions WHERE comment_id = $comentario_id AND username = '$username'";
        $result_user_action = mysqli_query($conn, $query_user_action);

        $imagemLike = $row_comentarios['imagemLike'];
        $imagemDeslike = $row_comentarios['imagemDeslike'];

        if (mysqli_num_rows($result_user_action) > 0) {
          $row_user_action = mysqli_fetch_assoc($result_user_action);
          if ($row_user_action['action'] == 'like') {
            $imagemLike = $row_user_action['imagemLiked'];
          } elseif ($row_user_action['action'] == 'deslike') {
            $imagemDeslike = $row_user_action['imagemDesliked'];
          }
        }

        echo '
        <div class="comentarios-adicioandos">
            <div class="img-usuario" style="background-image: url(../avatarAndBanners/' . $row_comentarios['imagemPerfil'] . ')"></div>
            <div class="comentarios-dentro">
                <span>' . $row_comentarios['usuario'] . ' <h4> ', $data_formatada, '</span>
                <p>
                    ' . $row_comentarios['comentario'] . '
                </p>
                <div class="buttons-comentarios">

                    <button type="button" class="like-button" id="like-' . $comentario_id . '" 
                    data_clicked_user= ' . $username . '
                    data_clicked_id= ' . $comentario_id . '
                    onclick="like(' . $comentario_id . ')">
                        <div class="like_deslike">
                            <img src="' . $imagemLike . '" alt="" />
                        </div>
                        <p id="like-num-' . $comentario_id . '">' . $row_comentarios['likes'] . ' </p>
                    </button>
                    <button type="button" id="deslike-' . $comentario_id . '" 
                    data_clicked_user= ' . $username . '
                    data_clicked_id= ' . $comentario_id . '
                    onclick="deslike(' . $comentario_id . ')">
                        <div class="like_deslike">
                            <img src="' . $imagemDeslike . '" alt="" />
                        </div>
                        <p id="deslike-num-' . $comentario_id . '">' . $row_comentarios['dislikes'] . ' </p>
                    </button>
                </div>
            </div>
        </div>
        ';
      }
    }
    ?>
    </div>
    </div>
    <div id="explorer-lateral">
      <hr id="line-side" />
      <div class="cards-side">
        <div class="title-explore2">
          <h2><span>|</span>Veja Também:</h2>
        </div>
        <a id="lancamentos" href="../Home/index.php#destaques">
          <img class="imgs-side" src="extraAndImg-jogo/Lateralmgs/lies.avif" alt="" />
          <img class="imgs-side" src="extraAndImg-jogo/Lateralmgs/mirage.jpg" alt="" />
          <p class="list-icon" id="icon-list">
            <img id="list-img" src="extraAndImg-jogo/icons/list.svg" alt="" />Lançamentos
          </p>
          <img class="imgs-side" src="extraAndImg-jogo/Lateralmgs/starfield.jpg" alt="" />
        </a>

        <a href="https://flowgames.gg" target="_blank">
          <h3 id="flow">Fique por dentro de novas notícias</h3>

          <img class="random-images" src="extraAndImg-jogo/Lateralmgs/flowgames.jpg" alt="" />
        </a>

        <a id="lancamentos2" href="../Home/index.php#lancamentos">
          <img class="imgs-side" src="extraAndImg-jogo/Lateralmgs/cyperpunk.jpeg" alt="" />
          <img class="imgs-side" src="extraAndImg-jogo/Lateralmgs/deadspace.jpeg" alt="" />
          <p class="list-icon" id="icon-list2">
            <img id="list-img2" src="extraAndImg-jogo/icons/list.svg" alt="" />Destaques
          </p>
          <img class="imgs-side" src="extraAndImg-jogo/Lateralmgs/re4.webp" alt="" />
        </a>

        <a href="https://www.metacritic.com" target="_blank">
          <h3 id="critic">Veja as avalições da crítica especializada</h3>

          <img class="random-images" src="extraAndImg-jogo/Lateralmgs/metacritic.webp" alt="" />
        </a>

        <a id="lancamentos3" href="../Home/index.php#jogar">
          <img class="imgs-side" src="extraAndImg-jogo/Lateralmgs/hogwarts.jpg" alt="" />
          <img class="imgs-side" src="extraAndImg-jogo/Lateralmgs/thelastofus2.jpg" alt="" />
          <p class="list-icon" id="icon-list3">
            <img id="list-img3" src="extraAndImg-jogo/icons/list.svg" alt="" />O que jogar?
          </p>
          <img class="imgs-side" src="extraAndImg-jogo/Lateralmgs/zelda.webp" alt="" />
        </a>

        <a href="https://www.nexusmods.com" target="_blank">
          <h3 id="nexus">Conheça os mods mais inusitados</h3>

          <img class="random-images" src="extraAndImg-jogo/Lateralmgs/nexusmod.webp" alt="" />
        </a>

        <a id="lancamentos4" href="../Home/index.php#top">
          <img class="imgs-side" src="extraAndImg-jogo/imgPrincipal/rdr2Principal.jpg" alt="" />
          <img class="imgs-side" src="extraAndImg-jogo/Lateralmgs/gtav.jpg" alt="" />
          <p class="list-icon" id="icon-list4">
            <img id="list-img4" src="extraAndImg-jogo/icons/list.svg" alt="" />Top da semana
          </p>
          <img class="imgs-side" src="extraAndImg-jogo/imgPrincipal/thewitcher3.jpeg" alt="" />
        </a>

        <a id="last-a" href="https://store.steampowered.com/?l=portuguese" target="_blank">
          <h3 id="steam">Compre seus jogos com segurança</h3>

          <img class="random-images" src="extraAndImg-jogo/Lateralmgs/steam.jpg" alt="" />
        </a>
      </div>
    </div>
    </div>
    <div id="Espaco-Final"></div>
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
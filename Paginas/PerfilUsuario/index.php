<?php
session_start();
if (
  !isset($_SESSION['username']) || !isset($_SESSION['imgPerfil']) || !isset($_SESSION['banner']) || !isset($_SESSION['twitch']) || !isset($_SESSION['reddit']) || !isset($_SESSION['youtube']) || !isset($_SESSION['biografia']) || !isset($_SESSION['playstation']) || !isset($_SESSION['xbox'])
  || !isset($_SESSION['pc'])
  || !isset($_SESSION['switch'])
  || !isset($_SESSION['anoCriacao'])
) {
  header("Location: ../../Login_Cadastro/Login/login.php");
  exit();
}

$username = $_SESSION['username'];
$avatar = $_SESSION['imgPerfil'];
$banner = $_SESSION['banner'];
$twitch = $_SESSION['twitch'];
$reddit = $_SESSION['reddit'];
$youtube = $_SESSION['youtube'];
$biografia = $_SESSION['biografia'];
$playstation = $_SESSION['playstation'];
$xbox = $_SESSION['xbox'];
$pc = $_SESSION['pc'];
$switch = $_SESSION['switch'];
$anoCriacao = $_SESSION['anoCriacao'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Imports Template References and CSS -->
  <?php
  include('../Template/references/ref.php');
  ?>

  <title>Gaming Core - Perfil</title>

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
  <div id="espaco-inicial"></div>
  <main>
    <div class="editor" id="bannerED">
      <form class="editor-form" id="editarBanner" method="POST" action="./functions/mudarBanner.php" enctype="multipart/form-data">
        <h2>Trocar Banner</h2>
        <img id="previewBanner" src="../avatarAndBanners/<?php echo $banner ?>" alt="">
        <div class="carregar-imagem">
          <label class="files">
            <p>Carregar Imagem</p>
            <input type="file" name="banner" id="banner-edit">
          </label>
        </div>
        <div class="buttons">
          <button type="button" id="cancelar" onclick="fechar('bannerED')">
            Cancelar
          </button>
          <button type="submit" id="salvar">
            Salvar
          </button>
        </div>
      </form>
    </div>

    <div class="editor" id="perfilED">
      <form class="editor-form" id="editarPerfil" method="POST" action="./functions/mudarPerfil.php" enctype="multipart/form-data">
        <h2>Editar Perfil</h2>
        <div id="tudo">
          <div id="perfilL1">
            <h3>Alterar Imagem</h3>
            <div id="total-img">
              <img id="perfil-imgs" src="../avatarAndBanners/<?php echo $avatar ?>" alt="">
            </div>
            <div class="carregar-imagem" id="filesID">
              <label class="files">
                <p>Carregar Imagem</p>
                <input type="file" name="perfil" id="perfil-edit">
              </label>
            </div>
            <div id="alterarNome">
              <h3>Alterar Nome</h3>
              <input type="text" name="mudarNome" maxlength="255" value="<?php echo $username; ?>">
            </div>
          </div>

          <div id="perfilPlataformas">
            <h3>Plataformas</h3>
            <label class="checkbox-label">
              <?php if ($xbox) {
                echo '<input type="checkbox" name="opcao1" value="Opção 1" checked> Xbox';
              } else {
                echo '<input type="checkbox" name="opcao1" value="Opção 1"> Xbox';
              } ?>
              <span class="custom-checkbox"></span>
            </label><br>
            <label class="checkbox-label">
              <?php if ($playstation) {
                echo '<input type="checkbox" name="opcao2" value="Opção 2" checked> Playstation';
              } else {
                echo '<input type="checkbox" name="opcao2" value="Opção 2"> Playstation';
              } ?>
              <span class="custom-checkbox"></span>
            </label><br>
            <label class="checkbox-label">
              <?php if ($switch) {
                echo '<input type="checkbox" name="opcao3" value="Opção 3" checked> Nintendo Switch';
              } else {
                echo '<input type="checkbox" name="opcao3" value="Opção 3"> Nintendo Switch';
              } ?>
              <span class="custom-checkbox"></span>
            </label><br>
            <label class="checkbox-label">
              <?php if ($pc) {
                echo '<input type="checkbox" name="opcao4" value="Opção 4" checked> PC';
              } else {
                echo '<input type="checkbox" name="opcao4" value="Opção 4"> PC';
              } ?>
              
              <span class="custom-checkbox"></span>
            </label><br>
          </div>
        </div>
        <div class="buttons">
          <button type="button" id="cancelar" onclick="fechar('perfilED')">
            Cancelar
          </button>
          <button type="submit" id="salvar">
            Salvar
          </button>
        </div>

      </form>
    </div>

    <div class="editor" id="bioED">
      <form class="editor-form" id="editarBio" method="POST" action="./functions/sobreMim.php">
        <h2>Editar Sobre Mim</h2>
        <h3>Biografia</h3>
        <textarea name="biografia" id="biografiaArea" cols="30" rows="5" maxlength="255"><?php echo $biografia ?></textarea>
        <h3>Redes Sociais</h3>
        <div class="redesSociais">
          <span><img src="./icons/twitch.svg" alt="">Twitch</span><input type="text" name="twitch" value="<?php echo $twitch ?> " maxlength="255">
        </div>
        <div class="redesSociais">
          <span><img src="./icons/reddit.svg" alt="">Reddit</span><input type="text" name="reddit" value="<?php echo $reddit ?> " maxlength="255">
        </div>
        <div class="redesSociais">
          <span><img src="./icons/youtube.svg" alt="">Youtube</span><input type="text" name="youtube" value="<?php echo $youtube ?> " maxlength="255">
        </div>
        <div class="buttons">
          <button type="button" id="cancelar" onclick="fechar('bioED')">
            Cancelar
          </button>
          <button type="submit" id="salvar">
            Salvar
          </button>
        </div>
      </form>
    </div>

    <div id="banner" style="background-image: url(../avatarAndBanners/<?php echo $banner; ?>)">
      <span id="edit-banner"><button class="button-edit" id="bannerEdit" onclick="abrir('bannerED')"><img id="edit-img" src="./icons/edit.svg" alt=""></button></span>
    </div>
    <div id="perfil">
      <div id="perfil-principal">
        <div id="perfil-spin">
          <img src="../avatarAndBanners/<?php echo $avatar; ?>" alt="">
          <span class="circle-spin"></span>
        </div>
        <h2><?php echo $username ?></h2>
        <h3>Plataformas: </h3>
        <div id="plataformas">
          <?php
          if ($playstation) {
            echo '<img src="./icons/play.svg" alt="">';
          }

          if ($xbox) {
            echo '<img src="./icons/xbox.svg" alt="">';
          }

          if ($switch) {
            echo '<img src="./icons/switch.svg" alt="">';
          }

          if ($pc) {
            echo '<img src="./icons/pc.svg" alt="">';
          }
          ?>
        </div>
        <div id="membro">
          <p>Membro desde: <?php echo $anoCriacao; ?></p>
        </div>
        <span class="edit"><button id="perfilEdit" class="button-edit" onclick="abrir('perfilED')"><img id="edit-img2" src="./icons/edit.svg" alt=""></button></span>
      </div>


      <div id="biografiaAndLinks">
        <h2>SOBRE MIM</h2>
        <p><?php echo $biografia ?></p>
        <div id="links">
          <?php
          if (strpos($youtube, "https://www.youtube.com/") === 0) {
            echo '<a href="' . $youtube . '"><img src="icons/youtube.svg" alt=""> Youtube</a>';
          }

          if (strpos($reddit, "https://www.reddit.com/user/") === 0) {
            echo '<a href="' . $reddit . '"><img src="icons/reddit.svg" alt=""> Reddit</a>';
          }

          if (strpos($twitch, "https://www.twitch.tv/") === 0) {
            echo '<a href="' . $twitch . '"><img src="icons/twitch.svg" alt=""> Twitch</a>';
          }
          ?>
        </div>
        <span class="edit"><button id="biografia-edit" class="button-edit" onclick="abrir('bioED')"><img id="edit-img3" src="./icons/edit.svg" alt=""></button></span>
      </div>
    </div>

    <div id="secondPerfil">
      <div id="pesquisaPerfis">
        <h2>PESQUISAR PERFIS</h2>
        <div class="botao-pesquisa">
          <form method="POST" action="./functions/buscar_usuarios.php">
            <input type="text" id="btn-pesquisa" name="search_query">
            <div class="imagem-pesquisa">
              <img src="./icons/490px-Magnifying_glass_icon.svg.svg" id="image-search" alt="">
            </div>
            <input type="submit" value="Buscar" id="pesquisar">
          </form>
        </div>
        <?php
        // Verifique se há resultados armazenados na variável de sessão
        if (isset($_SESSION['resultados_pesquisa'])) {
          $resultados = $_SESSION['resultados_pesquisa'];

          // Exiba os resultados como cards
          foreach ($resultados as $resultado) {
            $nome_usuario = $resultado['logar'];
            $avatar = $resultado['imgPerfil']; // Suponhamos que a tabela tenha um campo para o avatar

            // Exiba o card com os detalhes do usuário
            echo '<a href="">
          <div class="cardsUser">
            <img src="../avatarAndBanners/' . $avatar . '" alt="">
            <h3>' . $nome_usuario . '</h3>
          </div>
        </a>';
          }

          // Limpe a variável de sessão depois de exibir os resultados
          unset($_SESSION['resultados_pesquisa']);
        }
        ?>

      </div>

      <div id="minha-lista">
        <h2>JOGOS FAVORITOS</h2>
        <div id="exibir-cards">
          <div class="cardsList">
            <img src="../Jogo/extraAndImg-jogo/imgPrincipal/cyberpunk.jpg" alt="">
            <span class="nota">Nota: 8.9</span>
          </div>

          <div class="cardsList">
            <img src="../Jogo/extraAndImg-jogo/imgPrincipal/cyberpunk.jpg" alt="">
            <span class="nota">Nota: 8.9</span>
          </div>

          <div class="cardsList">
            <img src="../Jogo/extraAndImg-jogo/imgPrincipal/cyberpunk.jpg" alt="">
            <span class="nota">Nota: 8.9</span>
          </div>

          <div class="cardsList">
            <img src="../Jogo/extraAndImg-jogo/imgPrincipal/cyberpunk.jpg" alt="">
            <span class="nota">Nota: 8.9</span>
          </div>


        </div>
        <a href="">Ver Lista</a>
      </div>
    </div>
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
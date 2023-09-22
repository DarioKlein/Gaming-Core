<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['imgPerfil']) || !isset($_SESSION['banner']) || !isset($_SESSION['instagram']) || !isset($_SESSION['reddit']) || !isset($_SESSION['steam']) || !isset($_SESSION['biografia'])) {
  header("Location: ../../Login_Cadastro/Login/login.php");
  exit();
}

$username = $_SESSION['username'];
$avatar = $_SESSION['imgPerfil'];
$banner = $_SESSION['banner'];
$instagram = $_SESSION['instagram'];
$reddit = $_SESSION['reddit'];
$steam = $_SESSION['steam'];
$biografia = $_SESSION['biografia'];
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
    <div class="edicao-perfil" id="edicao-perfil">
      <form action="functions/processar_dados.php" method="POST" enctype="multipart/form-data" id="form">
        <div class="centralizador">
          <div class="avatar" id="imagem-preview"></div>

          <label for="file-upload" class="file-upload-container">
            <span class="file-upload-label">Alterar imagem de perfil</span>
            <input type="file" name="perfil" id="perfil-up" class="file-upload-input">
          </label>
        </div>

        <div class="centralizador">
          <img id="banner-preview" src="" alt="">
          <label for="file-upload" class="file-upload-container">
            <span class="file-upload-label">Alterar Banner</span>
            <input type="file" id="banner-up" id="banner-up" name="banner" class="file-upload-input">
          </label>
        </div>


        <div class="biografia">
          <p class="titles-inputs">Biografia:</p>
          <textarea name="biografia" id="biografia" rows="3" cols="40"></textarea>
        </div>
        <h3>Adicione suas redes:</h3>
        <div class="redes">
          <label for="Steam" class="titles-inputs">Steam:</label>
          <input class="inputs-links" type="text" name="steam" id="steam">
          <label for="insta" class="titles-inputs">Instagram:</label>
          <input class="inputs-links" type="text" name="insta" id="insta">
          <label for="reddit" class="titles-inputs">Reddit:</label>
          <input class="inputs-links" type="text" name="reddit" id="reddit">
        </div>
        <div class="buttons">
          <input id="submit" type="submit" value="Salvar Alterações">
          <button type="button" id="cancelar">Cancelar Alterações</button>
        </div>
      </form>
    </div>

    <div class="bloco-perfil">
      <img id="banner" src="../avatarAndBanners/<?php echo $banner ?>" alt="">
      <div class="avatar" style="background-image: url(../avatarAndBanners/<?php echo $avatar; ?>);">
      </div>
      <h2><?php echo $username ?></h2>
      <p><span>Biografia:</span><?php echo $biografia ?></p>
      <div class="minha-lista">
        <span id="titulo">Favoritos:</span>
        <a href="">

        </a>
        <a id="button" href="">Veja Mais</a>
      </div>
      <div class="icons">
        <span>Outras Redes: </span>
        <?php
        if (strpos($instagram, "https://www.instagram.com/") === 0) {
          echo '<a href="' . $instagram . '"><img src="icons/insta.svg" alt=""></a>';
        }

        if (strpos($reddit, "https://www.reddit.com/user/") === 0) {
          echo '<a href="' . $reddit . '"><img src="icons/reddit.svg" alt=""></a>';
        }

        if (strpos($steam, "https://steamcommunity.com/") === 0) {
          echo '<a href="' . $steam . '"><img src="icons/steam.svg" alt=""></a>';
        }
        ?>
      </div>
      <span id="edit"><button id="editar"><img id="icon-edit" src="icons/edit.svg" alt=""></button></span>
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
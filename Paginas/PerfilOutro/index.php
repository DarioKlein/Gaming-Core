<?php
session_start();

if (isset($_GET['nomeUsuario'])) {
  $nomeUsuario = $_GET['nomeUsuario'];
  // O parâmetro nomeUsuario está presente na URL, você pode continuar com o processamento.
} else {
  // O parâmetro nomeUsuario não está presente na URL, redirecione o usuário para o perfil padrão ou uma página de erro, por exemplo:
  header("Location: ../PerfilUsuario/index.php");
  exit();
}

if (
  !isset($_SESSION['username']) || !isset($_SESSION['imgPerfil'])
) {
  header("Location: ../../Login_Cadastro/Login/login.php");
  exit();
}

$username = $_SESSION['username'];
$avatar = $_SESSION['imgPerfil'];

include('../DatabaseConect/dbCadastrar.php');

$conn = criarConexao();


$sql = "SELECT logar, imgPerfil, banner, twitch, reddit, youtube, biografia, playstation, xbox, pc, switch, data_criacao FROM conta WHERE logar = '$nomeUsuario'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Recupere os valores e armazene em variáveis
  $row = $result->fetch_assoc();
  $nomeUsuario = $row['logar'];
  $avatarUsuario = $row['imgPerfil'];
  $banner = $row['banner'];
  $twitch = $row['twitch'];
  $reddit = $row['reddit'];
  $youtube = $row['youtube'];
  $biografia = $row['biografia'];
  $playstation = $row['playstation'];
  $xbox = $row['xbox'];
  $pc = $row['pc'];
  $switch = $row['switch'];
  $ano = $row['data_criacao'];
  $data_criacao = date('Y', strtotime($ano));
} else {
  // Caso não encontre nenhum registro correspondente, você pode tratar isso de acordo com sua lógica.
  // Por exemplo, redirecionar para uma página de erro ou definir valores padrão.
}

// Feche a conexão com o banco de dados
$conn->close();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Imports Template References and CSS -->
  <?php
  include('../Template/references/ref.php');
  ?>

  <title><?php echo $nomeUsuario ?> - Perfil</title>

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
    <div id="banner" style="background-image: url(../avatarAndBanners/<?php echo $banner; ?>)">
    </div>
    <div id="perfil">
      <div id="perfil-principal">
        <div id="perfil-spin">
          <img src="../avatarAndBanners/<?php echo $avatarUsuario; ?>" alt="">
          <span class="circle-spin"></span>
        </div>
        <h2><?php echo $nomeUsuario ?></h2>
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
          <p>Membro desde: <?php echo $data_criacao; ?></p>
        </div>
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
      </div>
    </div>

    <div id="secondPerfil">
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
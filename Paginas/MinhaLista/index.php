<?php
session_start();
if (!isset($_SESSION['username']) && isset($_SESSION['imgPerfil'])) {
  header("Location: ../../Login_Cadastro/Login/login.php");
  exit();
}
$username = $_SESSION['username'];
$avatar = $_SESSION['imgPerfil'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Imports Template References and CSS -->
  <?php
  include('../Template/references/ref.php');
  ?>

  <title>Minha Lista</title>

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
  <div id="espaco"></div>
  <main>
    <h1 id="title"><span>|</span>Minha Lista</h1>

    <table>
      <tr>
        <th>#</th>
        <th>Imagem</th>
        <th>Título</th>
        <th>Nota</th>
        <th>Progresso</th>
        <th>Editar</th>
      </tr>
      <tr>
        <td>1</td>
        <td><img src="./jogos/thewitcher3.jpeg" alt=""></td>
        <td id="titleTable">The Witcher 3</td>
        <td>8.0</td>
        <td>Completado</td>
        <td><Button onclick="abrirEdit()">Editar</Button></td>
      </tr>
    </table>
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
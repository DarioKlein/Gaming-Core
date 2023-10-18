<?php
session_start();

if (!isset($_SESSION['username']) && isset($_SESSION['imgPerfil'])) {
  header("Location: ../../Login_Cadastro/Login/login.php");
  exit();
}
$username = $_SESSION['username'];
$avatar = $_SESSION['imgPerfil'];

include('../DatabaseConect/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Imports Template References and CSS -->
  <?php
  include('../Template/references/ref.php');
  ?>

  <title>Gaming Core - Ranking </title>

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
    <div class="titulo-geral">
      <h1 id="title"><span>|</span>Ranking</h1>
    </div>

    <hr id="linha">

    <div id="list-container">
      <div class="titulos-container">
        <h2 class="style-container coloringTitles">#</h2>
        <h2 class="style-container coloringTitles">Imagem</h2>
        <h2 class="style-container coloringTitles">Título da Obra</h2>
        <h2 class="style-container coloringTitles">Nota</h2>
        <h2 class="style-container coloringTitles">Data de Lançamento</h2>
      </div>

      <?php
      $sql = "SELECT * FROM games ORDER BY CASE WHEN nota = 'N.A.' THEN 0 ELSE CAST(nota AS UNSIGNED) END DESC";
      $result = $conn->query($sql);

      // Verifique se há resultados
      if ($result->num_rows > 0) {
        $contador = 1;
        while ($row = $result->fetch_assoc()) {
          echo '
           <div class="cards">
            <span class="style-container idJogo">' . $contador . '</span>
            <img class="style-container imgJogo" src="../Jogo/' . $row['imagemJogo'] . '" alt="">
            <h2 id="gameName' . $contador . '" class="style-container titleJogo">' . $row['nome'] . '</h2>
            <p class="style-container notajogo">' . $row['nota'] . '</p>
            <p class="style-container progress">' . $row['data_lanc'] . '</p>
            <div class="style-container buttonsEditar">
            </div>
          </div>
           ';

          $contador++;
        }
      } else {
        echo '
        <div id="naoTemJogo">
          <h2>Nenhum jogo encontrado<img src="sad.svg"> </h2>
        </div>
          ';
      }
      ?>

    </div>

    <div id="list-mobile">

      <?php

      $sql2 = "SELECT * FROM games ORDER BY CASE WHEN nota = 'N.A.' THEN 0 ELSE CAST(nota AS UNSIGNED) END DESC";
      // Execute a consulta SQL
      $result2 = $conn->query($sql2);

      // Verifique se há resultados
      if ($result2->num_rows > 0) {
        $contador2 = 1;
        while ($row2 = $result2->fetch_assoc()) {
          echo '
            <div class="cards-mobile">
              <h2 id="gameName2' . $contador2 . '"><span>' . $contador2 . '. </span>' . $row2['nome'] . '</h2>
              <img src="../Jogo/' . $row2['imagemJogo'] . '" alt="">
              <p><span>Nota:</span>' . $row2['nota'] . '</p>
              <p id="progresso-mobile"><span>Data de Lançamento:</span>' . $row2['data_lanc'] . '</p>
            </div>
          ';

          $contador2++;
        }
      } else {
        echo '
        <div id="naoTemJogo">
          <h2>Nenhum jogo encontrado<img src="sad.svg"> </h2>
        </div>
          ';
      }
      ?>
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
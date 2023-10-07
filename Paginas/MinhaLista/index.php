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
    <div class="titulo-geral">
      <h1 id="title"><span>|</span>Minha Lista</h1>
    </div>

    <div id="pesquisasTotal">
      <div class="botao-pesquisa">
        <form method="POST" action="index.php">
          <input type="text" id="btn-pesquisa" name="search_query">
          <div class="imagem-pesquisa">
            <img src="./490px-Magnifying_glass_icon.svg.svg" id="image-search" alt="">
          </div>
          <input type="submit" value="Buscar" id="pesquisar">
        </form>
      </div>
    </div>

    <hr id="linha">

    <div id="list-container">
      <div class="titulos-container">
        <h2 class="style-container coloringTitles">#</h2>
        <h2 class="style-container coloringTitles">Imagem</h2>
        <h2 class="style-container coloringTitles">Título da Obra</h2>
        <h2 class="style-container coloringTitles">Nota</h2>
        <h2 class="style-container coloringTitles">Progresso</h2>
        <h2 class="style-container coloringTitles">Alterar</h2>
      </div>

      <?php
      $sql = "SELECT * FROM actionsLista where username = '$username'";

      // Execute a consulta SQL
      $result = $conn->query($sql);

      // Verifique se há resultados
      if ($result->num_rows > 0) {
        $contador = 1;
        while ($row = $result->fetch_assoc()) {
          echo '
           <div class="cards">
            <span class="style-container idJogo">'.$contador.'</span>
            <img class="style-container imgJogo" src="' . $row['imagem'] . '" alt="">
            <h2 class="style-container titleJogo">' . $row['jogo'] . '</h2>
            <p class="style-container notajogo">' . $row['nota'] . '</p>
            <p class="style-container progress">' . $row['progresso'] . '</p>
           <button class="style-container edit-button">EDITAR</button>
          </div>
           ';

           $contador++;
        }
      } else {
        echo '
        <div id="naoTemJogo">
          <h2>Você ainda não tem nenhum jogo adicionado <img src="sad.svg"> </h2>
        </div>
          ';
      }
      ?>

    </div>

    <div id="list-mobile">

      <?php
      $sql2 = "SELECT * FROM actionsLista where username = '$username'";

      // Execute a consulta SQL
      $result2 = $conn->query($sql2);

      // Verifique se há resultados
      if ($result2->num_rows > 0) {
        $contador2 = 1;
        while ($row2 = $result2->fetch_assoc()) {
          echo '
            <div class="cards-mobile">
              <h2><span>'.$contador2.'. </span>' . $row2['jogo'] . '</h2>
              <img src="' . $row2['imagem'] . '" alt="">
              <p><span>Nota:</span>' . $row2['nota'] . '</p>
              <p id="progresso-mobile"><span>Progresso:</span>' . $row2['progresso'] . '</p>
              <p>Alterar: <button class="edit-button">Editar</button></p>
            </div>
          ';

          $contador2++;
        }
      } else {
        echo '
        <div id="naoTemJogo">
          <h2>Você ainda não tem nenhum jogo adicionado <img src="sad.svg"> </h2>
        </div>
          ';
      }
      ?>
    </div>

    <div id="editarLista">
      <form class="editItems" id="editarInputs" method="POST" action="">
        <h2>EDITAR</h2>
        <div id="alterarCampos">
          <div id="inputNota">
            <label for="nota">Sua nota: </label>
            <input type="text" name="nota" id="nota" maxlength="2" oninput="validarNota(this)" require>
          </div>

          <input type="radio" id="radio1" name="status" value="zerado">
          <label class="radioPersonalizado" for="radio1"><span class="itemsInput">Já Zerei</span></label>


          <input type="radio" id="radio2" name="status" value="incompleto">
          <label class="radioPersonalizado" for="radio2"><span class="itemsInput">Estou Jogando</span></label>

          <input type="radio" id="radio3" name="status" value="queroJogar">
          <label class="radioPersonalizado" for="radio3"><span class="itemsInput">Quero Jogar</span></label>

          <input type="radio" id="radio4" name="status" value="platinado">
          <label class="radioPersonalizado" for="radio4"><span class="itemsInput">100%</span></label>
        </div>
        <div class="buttons">
          <button type="button" id="cancelar">
            Cancelar
          </button>
          <button type="submit" id="salvar">
            Salvar
          </button>
        </div>
      </form>
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
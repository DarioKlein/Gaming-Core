<?php

include '../../DatabaseConect/dbCadastrar.php';

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: ../../../Login_Cadastro/Login/login.php");
  exit();
}

$usuarioLogado = $_SESSION['username'];
$atualizacoesBemSucedidas = true; // Variável para controlar o sucesso das atualizações

if (isset($_FILES["perfil"]) && !empty($_FILES["perfil"]["name"])) {
  $perfilNome = $_FILES["perfil"]["name"];
  $perfilExtensao = pathinfo($perfilNome, PATHINFO_EXTENSION); // Obtém a extensão do arquivo

  // Faça algo com o arquivo de perfil, como movê-lo para uma pasta de destino
  move_uploaded_file($_FILES["perfil"]["tmp_name"], "../../avatarAndBanners/" . $perfilNome);

  // Crie a conexão com o banco de dados (certifique-se de que o arquivo dbCadastrar.php contém a conexão correta)
  $conectaDB = criarConexao();
  $query = "UPDATE conta SET imgPerfil = '$perfilNome' WHERE logar = '$usuarioLogado'";
  $resultado = mysqli_query($conectaDB, $query);

  include '../../DatabaseConect/conexao.php';

  $query2 = "UPDATE comentarios SET imagemPerfil = '$perfilNome' WHERE usuario = '$usuarioLogado'";
  $resultado2 = mysqli_query($conn, $query2);

  if (!$resultado || !$resultado2) {
    $atualizacoesBemSucedidas = false;
  }
}

if (isset($_FILES["banner"]) && !empty($_FILES["banner"]["name"])) {
  $bannerNome = $_FILES["banner"]["name"];
  $bannerExtensao = pathinfo($bannerNome, PATHINFO_EXTENSION); // Obtém a extensão do arquivo

  // Faça algo com o arquivo de banner, como movê-lo para uma pasta de destino
  move_uploaded_file($_FILES["banner"]["tmp_name"], "../../avatarAndBanners/" . $bannerNome);

  // Atualize o campo de banner na tabela conta
  $queryBanner = "UPDATE conta SET banner = '$bannerNome' WHERE logar = '$usuarioLogado'";
  $resultadoBanner = mysqli_query($conectaDB, $queryBanner);

  if (!$resultadoBanner) {
    $atualizacoesBemSucedidas = false;
  }
}

if (isset($_POST["biografia"])) {
  $biografia = $_POST["biografia"];

  $conectaDB = criarConexao();
  // Atualize o campo de biografia na tabela conta
  $queryBiografia = "UPDATE conta SET biografia = '$biografia' WHERE logar = '$usuarioLogado'";
  $resultadoBiografia = mysqli_query($conectaDB, $queryBiografia);

  if (!$resultadoBiografia) {
    $atualizacoesBemSucedidas = false;
  }
}

if (isset($_POST["insta"])) {
  $instagram = $_POST["insta"];

  // Atualize o campo de Instagram na tabela conta
  $queryInstagram = "UPDATE conta SET instagram = '$instagram' WHERE logar = '$usuarioLogado'";
  $resultadoInstagram = mysqli_query($conectaDB, $queryInstagram);

  if (!$resultadoInstagram) {
    $atualizacoesBemSucedidas = false;
  }
}

if (isset($_POST["reddit"])) {
  $reddit = $_POST["reddit"];

  // Atualize o campo de Reddit na tabela conta
  $queryReddit = "UPDATE conta SET reddit = '$reddit' WHERE logar = '$usuarioLogado'";
  $resultadoReddit = mysqli_query($conectaDB, $queryReddit);

  if (!$resultadoReddit) {
    $atualizacoesBemSucedidas = false;
  }
}

if (isset($_POST["steam"])) {
  $steam = $_POST["steam"];

  // Atualize o campo de Steam na tabela conta
  $querySteam = "UPDATE conta SET steam = '$steam' WHERE logar = '$usuarioLogado'";
  $resultadoSteam = mysqli_query($conectaDB, $querySteam);

  if (!$resultadoSteam) {
    $atualizacoesBemSucedidas = false;
  }
}

if ($atualizacoesBemSucedidas) {
  // Todas as atualizações foram bem-sucedidas, redirecione o usuário
  header("Location: ../index.php");
  exit();
} else {
  echo "Erro ao atualizar um ou mais campos.";
}

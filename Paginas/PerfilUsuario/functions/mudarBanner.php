<?php

include '../../DatabaseConect/dbCadastrar.php';

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: ../../../Login_Cadastro/Login/login.php");
  exit();
}

$usuarioLogado = $_SESSION['username'];

$atualizacoesBemSucedidas = true;

$conectaDB = criarConexao();

$erro = "";

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
    $erro = "Erro ao atualizar o banner.";
  }
}

$_SESSION['erro'] = $erro;

if ($atualizacoesBemSucedidas) {
  // Todas as atualizações foram bem-sucedidas, redirecione o usuário
  header("Location: ../sucesso/sucesso.php");
  exit();
} else {
  header("Location: ../erro/erro.php");
  exit();
}

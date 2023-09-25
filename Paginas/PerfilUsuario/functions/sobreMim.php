<?php

include '../../DatabaseConect/dbCadastrar.php';

session_start();

if (!isset($_SESSION['username'])) {
header("Location: ../../../Login_Cadastro/Login/login.php");
exit();
}

$usuarioLogado = $_SESSION['username'];

$atualizacoesBemSucedidas = true;


$erro = "";

if (isset($_POST["biografia"])) {
  $biografia = $_POST["biografia"];

  $conectaDB = criarConexao();
  // Atualize o campo de biografia na tabela conta
  $queryBiografia = "UPDATE conta SET biografia = '$biografia' WHERE logar = '$usuarioLogado'";
  $resultadoBiografia = mysqli_query($conectaDB, $queryBiografia);

  if (!$resultadoBiografia) {
    $atualizacoesBemSucedidas = false;
    $erro = "Não foi possivel alterar a biografia";
  }
}

if (isset($_POST["twitch"])) {
  $twitch = trim($_POST["twitch"]);

  // Atualize o campo de twitch na tabela conta
  $querytwitch = "UPDATE conta SET twitch = '$twitch' WHERE logar = '$usuarioLogado'";
  $resultadotwitch = mysqli_query($conectaDB, $querytwitch);

  if (!$resultadotwitch) {
    $atualizacoesBemSucedidas = false;
    $erro = "Link do Twitch inválido";
  }
}

if (isset($_POST["reddit"])) {
  $reddit = trim($_POST["reddit"]);

  // Atualize o campo de Reddit na tabela conta
  $queryReddit = "UPDATE conta SET reddit = '$reddit' WHERE logar = '$usuarioLogado'";
  $resultadoReddit = mysqli_query($conectaDB, $queryReddit);

  if (!$resultadoReddit) {
    $atualizacoesBemSucedidas = false;
    $erro = "Link do Reddit inválido";
  }
}

if (isset($_POST["youtube"])) {
  $youtube = trim($_POST["youtube"]);

  // Atualize o campo de youtube na tabela conta
  $queryyoutube = "UPDATE conta SET youtube = '$youtube' WHERE logar = '$usuarioLogado'";
  $resultadoyoutube = mysqli_query($conectaDB, $queryyoutube);

  if (!$resultadoyoutube) {
    $atualizacoesBemSucedidas = false;
    $erro = "Link do Youtube inválido";
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
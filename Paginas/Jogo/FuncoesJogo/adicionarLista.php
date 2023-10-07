<?php

include '../../DatabaseConect/conexao.php';

if (isset($_POST['nomeJogo']) && ($_POST['nomeUsuario']) && ($_POST['progresso'])&& ($_POST['nota'])&& ($_POST['enderecoImagem'])) {
  $nomeJogo = $_POST['nomeJogo'];
  $nomeUsuario = $_POST['nomeUsuario'];
  $progresso = $_POST['progresso'];
  $nota = $_POST['nota'];
  $imagem = $_POST['enderecoImagem'];

  $sql = "INSERT INTO actionsLista (username, progresso, nota, jogo, imagem)
        VALUES ('$nomeUsuario', '$progresso', '$nota', '$nomeJogo', '$imagem')";

  // Execute a consulta SQL
  if ($conn->query($sql) === TRUE) {
    echo "Inserção bem-sucedida na tabela sua_tabela.";
  } else {
    echo "Erro durante a inserção na tabela sua_tabela: " . $conn->error;
  }

  // Feche a conexão com o banco de dados
  $conn->close();
} else {
  echo "Dados incompletos ou ausentes.";
}

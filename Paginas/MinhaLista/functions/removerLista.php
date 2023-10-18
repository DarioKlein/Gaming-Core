<?php

include '../../DatabaseConect/conexao.php';

if (isset($_POST['nomeJogo']) && ($_POST['nomeUsuario'])) {
  $nomeJogo = $_POST['nomeJogo'];
  $nomeUsuario = $_POST['nomeUsuario'];
  
  $sql = "DELETE FROM actionsLista WHERE jogo = '$nomeJogo' AND username = '$nomeUsuario'";

  // Execute a consulta SQL
  if ($conn->query($sql) === TRUE) {
    echo "Remoção bem-sucedida na tabela sua_tabela.";
  } else {
    echo "Erro durante a remoção na tabela sua_tabela: " . $conn->error;
  }

  // Feche a conexão com o banco de dados
  $conn->close();
} else {
  echo "Dados incompletos ou ausentes.";
}

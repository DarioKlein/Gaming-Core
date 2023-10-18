<?php

include('../../DatabaseConect/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupere os valores dos campos do formulário
  $nota = $_POST["nota"];
  $status = $_POST["status"];
  $gameName = $_POST["data-game-name"];
  $username = $_POST["username"];

  if ($nota === "") {
    $nota = 'N.A';
  } else {
    $nota = $nota . '.0';
  }

  $sql = "UPDATE actionsLista SET nota = '$nota', progresso = '$status' WHERE jogo = '$gameName' AND username = '$username'";

  if ($conn->query($sql) === TRUE) {
    $sqlJogo = "SELECT * FROM actionsLista WHERE jogo = '$gameName'";
    $result = $conn->query($sqlJogo);
    $notaJogo = array();
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $nota = $row['nota'];
        if ($nota !== 'N.A') {
          $notaJogo[] = $nota;
        }
      }
    }

    $somaNotas = array_sum($notaJogo);
    $mediaNotaJogo = round($somaNotas / count($notaJogo), 1);
    $sqlNota = "UPDATE games SET nota = '$mediaNotaJogo' WHERE nome = '$gameName'";
    if ($conn->query($sqlNota) === TRUE) {
      header("Location: ../index.php");
      exit;
    } else {
      echo "Erro ao atualizar os dados: " . $conn->error;
    }
  } else {
    echo "Erro ao atualizar os dados: " . $conn->error;
  }
} else {
  echo "O formulário não foi submetido.";
}

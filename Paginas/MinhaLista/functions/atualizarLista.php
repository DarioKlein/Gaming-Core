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
        header("Location: ../index.php");
    } else {
        echo "Erro ao atualizar os dados: " . $conn->error;
    }


} else {
    echo "O formulário não foi submetido.";
}

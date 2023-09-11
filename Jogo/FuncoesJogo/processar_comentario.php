<?php
session_start();
if (!isset($_SESSION['username'])) {
   header("Location: ../../Login_Cadastro/Login/login.php");
   exit();
}
$username = $_SESSION['username'];
include '../../DatabaseConect/conexao.php';


if (isset($_POST['comentario']) && isset($_POST['idJogo']) && isset($_POST['nomeJogo'])) {
    $usuario = $username;
    $nomeJogo = ($_POST['nomeJogo']);
    $idJogo = ($_POST['idJogo']);
    $comentario = $_POST['comentario'];
    // Inserir o novo comentário no banco de dados
    $query = "INSERT INTO comentarios (usuario, comentario, imagemLike, imagemDeslike, id_jogo) VALUES ('$usuario', '$comentario', 'extraAndImg-jogo/like.svg', 'extraAndImg-jogo/deslike.svg', '$idJogo')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        // Comentário inserido com sucesso, redirecione para a página de comentários
        header("Location: ../index.php?idJogo=$idJogo&nome=$nomeJogo");
        exit();
    } else {
        echo "Erro ao inserir o comentário: " . mysqli_error($conn);
    }
}

// Feche a conexão com o banco de dados (certifique-se de fazer isso após o processamento)
mysqli_close($conn);
?>
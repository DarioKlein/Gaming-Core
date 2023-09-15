<?php

include '../../DatabaseConect/conexao.php';

session_start();
if (!isset($_SESSION['username'])) {
   header("Location: ../../Login_Cadastro/Login/login.php");
   exit();
}
$username = $_SESSION['username'];

if (isset($_POST['commentId']) && isset($_POST['action'])) {
    $commentId = $_POST['commentId'];
    $action = $_POST['action'];

    // Determine a tabela do banco de dados onde os comentários e contagens são armazenados
    $commentsTable = "comentarios"; // Substitua pelo nome da tabela de comentários
    $countsTable = "contagens"; // Substitua pelo nome da tabela de contagens

    // Verifique se o usuário já realizou a ação no comentário
    $queryCheck = "SELECT * FROM user_actions WHERE username = '$username' AND comment_id = $commentId";

    $resultCheck = mysqli_query($conn, $queryCheck);

    if ($resultCheck) {
        // Se houver um registro correspondente, significa que o usuário já realizou a ação
        if (mysqli_num_rows($resultCheck) > 0) {
            // O usuário já realizou a ação, não permita repetição
            echo "already_done";
        } else {
            // O usuário ainda não realizou a ação no comentário
            // Registre a ação no banco de dados
            $insertQuery = "INSERT INTO user_actions (username, comment_id, action, imagemLiked, imagemDesliked) VALUES ('$username', $commentId, '$action', 'extraAndImg-jogo/icons/liked.svg', 'extraAndImg-jogo/icons/desliked.svg')";
            
            if (mysqli_query($conn, $insertQuery)) {
                // Ação registrada com sucesso

                // Agora, atualize as contagens de likes e deslikes no comentário
                if ($action === "like") {
                    // Atualize a contagem de likes
                    $updateQuery = "UPDATE $commentsTable SET likes = likes + 1 WHERE id = $commentId";
                } elseif ($action === "deslike") {
                    // Atualize a contagem de deslikes
                    $updateQuery = "UPDATE $commentsTable SET dislikes = dislikes + 1 WHERE id = $commentId";
                }
                
                if (mysqli_query($conn, $updateQuery)) {
                    // Atualização bem-sucedida
                    echo "success";
                } else {
                    // Erro na atualização das contagens
                    echo "count_update_error";
                }
            } else {
                // Erro na inserção da ação
                echo "action_insert_error";
            }
        }
    } else {
        // Erro na verificação
        echo "error";
    }
} else {
    // Dados de solicitação ausentes
    echo "missing_data";
}
?>

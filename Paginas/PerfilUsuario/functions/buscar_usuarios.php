<?php
include '../../DatabaseConect/dbCadastrar.php';
session_start(); // Inicie a sessão

$conectaDB = criarConexao();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha o termo de pesquisa enviado pelo formulário
    $search_query = $_POST['search_query'];

    // Consulta SQL para buscar usuários com base no termo de pesquisa
    $sql = "SELECT * FROM conta WHERE logar LIKE '%$search_query%'";

    // Execute a consulta
    $result = $conectaDB->query($sql);

    // Armazene os resultados na variável de sessão
    $_SESSION['resultados_pesquisa'] = $result->fetch_all(MYSQLI_ASSOC);

    // Feche a conexão com o banco de dados
    $conectaDB->close();

    // Redirecione o usuário para a página de exibição de cards
    header("Location: ../index.php");
    exit();
}

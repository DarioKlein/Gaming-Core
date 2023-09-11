<?php
function criarConexao() {
    $nomeServer = "localhost";
    $userName = "root";
    $password = "dario";
    $dbNome = "cadastrar";

    $conectaDB = mysqli_connect($nomeServer, $userName, $password, $dbNome);

    if (!$conectaDB) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    return $conectaDB;
}
?>
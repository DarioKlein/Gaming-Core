<?php
session_start();

// Encerrar a sessão (desconectar o usuário)
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style3.css" />
    <link
      rel="icon"
      type="image/x-icon"
      href="../Navbar/imgs-navbar/abi.svg"
    />
    <title>Gaming Core - Erro</title>
  </head>
  <body>
    <div class="container-erro">
      <p>Você foi deslogado!</p>
      <button class="btn-erro">
        <a href="../../../Login_Cadastro/Login/login.php">Volte para o login</a>
      </button>
    </div>
  </body>
</html>

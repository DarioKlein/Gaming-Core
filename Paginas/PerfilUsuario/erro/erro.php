<?php
session_start();

$erro = $_SESSION['erro'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style3.css" />
  <link rel="icon" type="image/x-icon" href="../Navbar/imgs-navbar/abi.svg" />
  <title>Gaming Core - Erro</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container-erro">
    <p>Erro ao Salvar:</p>
    <span id="erros"><?php echo $erro ?></span>
    <button class="btn-erro">
      <a href="../index.php">Volte para o Perfil</a>
    </button>
  </div>
</body>

</html>
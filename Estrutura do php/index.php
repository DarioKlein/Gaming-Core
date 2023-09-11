<?php 
session_start();
if (!isset($_SESSION['username'])) {
   header("Location: ../Login_Cadastro/Login/login.php");
   exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Imports Template References and CSS -->
    <?php
    include('../Template/references/ref.php');
    ?>

    <title>Gaming Core - </title>

    <link rel="stylesheet" href="../Template/Footer/style.css" />
    <link rel="stylesheet" href="../Template/Navbar/style.css" />
    <link rel="stylesheet" href="../Template/resetCss/style.css" />


    <link rel="stylesheet" href="style.css"/>

  </head>
  <body>
    <!-- Header -->
    <?php
    include('../Template/Navbar/index.php');
    ?>

    <main> </main>

    <!-- footer -->
    <?php
    include('../Template/Footer/index.php');
    ?>



    <!-- Imports template JS -->
    <script src="../Template/Navbar/script.js"></script>


    <script src="script.js"></script>

  </body>
</html>

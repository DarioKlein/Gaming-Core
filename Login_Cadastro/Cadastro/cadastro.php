<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" type="image/x-icon" href="../../Paginas/Template/Navbar/imgs-navbar/abi.svg" />
    <title>Gaming Core - Cadastro</title>
</head>

<body>
    <form method="POST" action="cadastro.php">
        <div class="main-login">
            <div class="left-login">
                <h1>Gaming Core</h1>
                <img src="../../Paginas/Template/Navbar/imgs-navbar/logo.svg" class="left-login-image">
            </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>Registro</h1>
                    <div class="textfield">
                        <label for="usuario" class="lab1" id="lab1">Usuário:</label>
                        <input type="text" name="logar" placeholder="Usuário..." oninput="verificarCampoPreenchido()" onkeyup="limitarComprimento(this, 20)" id="logar">
                    </div>
                    <div class="textfield">
                        <label for="email" class="lab2" id="lab2">Email:</label>
                        <input type="text" name="email" placeholder="Email..." oninput="verificarCampoPreenchido()" onkeyup="limitarComprimento(this, 100)" id="email">
                    </div>
                    <div class="textfield">
                        <label for="senha" class="lab3" id="lab3">Senha:</label>
                        <input type="password" name="senha" placeholder="Senha..." id="passw" oninput="verificarCampoPreenchido()" onkeyup="limitarComprimento(this, 20)">
                        <div class="botao-ver">
                            <i class="bi bi-eye-fill" id="btn-eye" onclick="mostrarSenha()"></i>
                        </div>
                    </div>
                    <input class="btn-login" id="enviar" type="submit" value="Criar" name="cadastrar" disabled>
                    <div class="esqueci">
                        <a href="../login/login.php">Já tenho uma conta</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>

    <script src="scriptlog.js"></script>
</body>

</html>
<?php
include '../function_cadastro_login/login2.php';
if (isset($_POST['cadastrar'])) {
    $logar = $_POST['logar'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if (nomeUsuarioValido($logar)) {
        if (validarEmail($email)) {
            if (verificarExistenciaUsuarioEmail($logar, $email)) {
                cadastro($logar, $senha, $email);
            }
        } else {
            echo "<script>
            var inputElement = document.getElementById('email');
            inputElement.placeholder = 'Email não é válido!';
            var algo = document.getElementById('lab2');
            algo.classList.add('lab2-2');
            </script>";
        }
    } else {
        echo "<script>
            var inputElement = document.getElementById('logar');
            inputElement.placeholder = 'Não utilize caracters especiais';
            var algo = document.getElementById('lab1');
            algo.classList.add('lab1-1');
            </script>";
    }
}
?>
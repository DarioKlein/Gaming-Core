<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="icon"
      type="image/x-icon"
      href="../../Template/Navbar/imgs-navbar/abi.svg"
    />
    <title>Gaming Core - Login</title>
  </head>
  <body>
    <form method="POST" action="">
      <div class="main-login">
        <div class="left-login">
          <h1>Gaming Core</h1>
          <img
            src="../../Template/Navbar/imgs-navbar/logo.svg"
            class="left-login-image"
          />
        </div>
        <div class="right-login">
          <div class="card-login">
            <h1>LOGIN</h1>
            <div class="textfield">
              <label class="lab1" id="lab1" for="usuario">Usuário</label>
              <input
                type="text"
                name="logar"
                id="logar"
                placeholder="Usuário"
                oninput="verificarCampoPreenchido()"
                onkeyup="limitarComprimento(this, 20)"
              />
            </div>
            <div class="textfield">
              <label class="lab2" id="lab2" for="senha">Senha</label>
              <input
                type="password"
                name="senha"
                placeholder="Senha"
                id="passw"
                oninput="verificarCampoPreenchido()"
                onkeyup="limitarComprimento(this, 20)"
              />
              <div class="botao-ver">
                <i
                  class="bi bi-eye-fill"
                  id="btn-eye"
                  onclick="mostrarSenha()"
                ></i>
              </div>
            </div>
            <input
              type="submit"
              class="btn-login"
              value="entrar"
              name="entrar"
              id="entrar"
              disabled
            />
            <div class="register">
              <div class="esqueci">
                <a href="#">Esqueceu sua senha?</a>
              </div>
              <div class="border"></div>
              <button class="new">
                <a href="../cadastro/cadastro.php">Crie uma nova conta</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <script src="scriptlog2.js"></script>
  </body>
</html>

<?php
    include '../function_cadastro_login/login2.php';
    if(isset($_POST['entrar'])){
        $logar = $_POST['logar'];
        $senha = $_POST['senha'];
        logarUsuario($logar, $senha);
        }
?>

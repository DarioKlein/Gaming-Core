<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../Login_Cadastro/Login/login.php");
  exit();
}
$username = $_SESSION['username'];

include '../DatabaseConect/conexao.php';

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

$mensagem = array();  // Inicializa a variável para conter a mensagem de sucesso/erro

if (isset($_POST['enviar'])) {
  // O formulário foi enviado, processar os dados
  $email = $_POST['email'];
  $pergunta = $_POST['pergunta'];

  if (strlen($email) > 5 && strlen($pergunta) > 5) {
    // Inserir os dados na tabela
    $sql = "INSERT INTO suporte (email, pergunta) VALUES ('$email', '$pergunta')";

    if ($conn->query($sql) === TRUE) {
      $_SESSION['mensagem'] = "Mensagem enviada, cheque a resposta no seu e-mail xD";
    } else {
      $_SESSION['mensagem'] = "Erro ao inserir dados: " . $conn->error;
    }
  } else {
    $_SESSION['mensagem'] = "Por favor, preencha ambos os campos com mais de 5 caracteres.";
  }

  // Redireciona para a mesma página para evitar reenvios acidentais
  header("Location: " . $_SERVER['PHP_SELF']);
  exit();
}

$conn->close();
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


  <link rel="stylesheet" href="style.css" />
  <script>
    function exibirAlerta(status, mensagem) {
      alert("Status: " + status + "\nMensagem: " + mensagem);
    }
  </script>
</head>

<body>
  <!-- Header -->
  <?php
  include('../Template/Navbar/index.php');
  ?>

  <main>
    <div class="main-div">

      <div class="left-suporte">

        <p id="p-titulo">DÚVIDAS SOBRE AS FUNCIONALIDADES <span>?</span></p>

        <p id="p-divmain"><span><a href="#ancora">Clique aqui</a></span> e veja nossa aba completa de dúvidas dos usuários.</p>

      </div>




      <div class="espaco">

        <div class="linha"></div>

      </div>




      <div class="right-suporte">

        <img src="imagens/logo.svg" alt="">

      </div>

    </div>
    <a name="ancora"></a>
    <hr class="linha2">
    <div class="central-perguntas">
      <div id="titulo-central">
        <h2>Dúvidas Frequentes</h2>
      </div>

      <div class="cards-central" id="t1">
        <h3>Catálogo de Jogos</h3>
        <p><img src="imagens/arrowL.svg" alt=""><span>Catálogo é atualizado semanalmente.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>Jogos de todas as desenvolvedoras.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>Jogos muito antigos não são inclusos.</span></p>
      </div>

      <div class="cards-central" id="t2">
        <h3>Meu Perfil</h3>
        <p><img src="imagens/arrowL.svg" alt=""><span>O perfil é customizável.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>O usuário pode trocar a foto de perfil.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>Pode alterar a bio, e o background.</span></p>
      </div>

      <div class="cards-central" id="t3">
        <h3>Avaliação Geral</h3>
        <p><img src="imagens/arrowL.svg" alt=""><span>O usuário pode avaliar os jogos de 0 a 10.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>É possível salvar os jogos em sua lista.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>É necessário estar logado para isso.</span></p>
      </div>

      <div class="cards-central" id="t4">
        <h3>Comentários</h3>
        <p><img src="imagens/arrowL.svg" alt=""><span>Não é permitido xingamentos/ofenças.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>É necessário estar logado para comentar.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>Se infligir as regras você será punido.</span></p>
      </div>

      <div class="cards-central" id="t5">
        <h3>Ranking</h3>
        <p><img src="imagens/arrowL.svg" alt=""><span>O ranking é atualizado em tempo real.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>O ranking é baseado apenas neste site.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>Suas avalições serão contabilizadas.</span></p>
      </div>

      <div class="cards-central" id="t6">
        <h3>Login/Registro</h3>
        <p><img src="imagens/arrowL.svg" alt=""><span>Entre em contato caso perca sua conta.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>Não é permitido nomes ofensivos.</span></p>
        <p><img src="imagens/arrowL.svg" alt=""><span>Contas inativas serão desativadas.</span></p>
      </div>

    </div>


    <hr class="linha2">



    <div class="titulo-perguntas">

      <p><span>|</span> Envie sua dúvida </p>

    </div>


    <div class="email-perguntas">

      <form method="POST" action="">

        <label for="name">E-mail<span> :</span></label>
        <input type="text" name="email" class="inputs">

        <label for="pergunta">Sua Pergunta<span> :</span></label>
        <input type="text" name="pergunta" class="inputs">

        <input class="btn-enviar" type="submit" value="Enviar" name="enviar">

      </form>

    </div>

  </main>

  <!-- footer -->
  <?php
  include('../Template/Footer/index.php');
  ?>



  <!-- Imports template JS -->
  <script src="../Template/Navbar/script.js"></script>

  <!-- verify suporte sucess message -->

  <?php if (isset($_SESSION['mensagem'])) : ?>
    <script>
      alert("<?php echo $_SESSION['mensagem']; ?>");
    </script>
    <?php unset($_SESSION['mensagem']); ?> <!-- Remove a mensagem após exibição -->
  <?php endif; ?>

</body>

</html>
<?php

include '../../DatabaseConect/dbCadastrar.php';

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: ../../../Login_Cadastro/Login/login.php");
  exit();
}

$usuarioLogado = $_SESSION['username'];
$conectaDB = criarConexao();
$query = "SELECT cod_usuario FROM conta WHERE logar = '$usuarioLogado'";


// Execute a consulta
$resultado = mysqli_query($conectaDB, $query);

// Verifique se a consulta foi bem-sucedida
if ($resultado) {
  // Obtenha o ID do usuário (se o nome de usuário existir)
  $linha = mysqli_fetch_assoc($resultado);
  if ($linha) {
    $idUsuario = $linha['cod_usuario'];
    echo "ID do usuário com nome de usuário '$usuarioLogado': $idUsuario";
  } else {
    echo "Nome de usuário '$usuarioLogado' não encontrado.";
  }
} else {
  echo "Erro ao consultar o banco de dados: " . mysqli_error($conectaDB);
}

$atualizacoesBemSucedidas = true;

if (isset($_FILES["perfil"]) && !empty($_FILES["perfil"]["name"])) {
  $perfilNome = $_FILES["perfil"]["name"];
  $perfilExtensao = pathinfo($perfilNome, PATHINFO_EXTENSION); // Obtém a extensão do arquivo

  // Faça algo com o arquivo de perfil, como movê-lo para uma pasta de destino
  move_uploaded_file($_FILES["perfil"]["tmp_name"], "../../avatarAndBanners/" . $perfilNome);

  // Crie a conexão com o banco de dados (certifique-se de que o arquivo dbCadastrar.php contém a conexão correta)
  $conectaDB = criarConexao();
  $query = "UPDATE conta SET imgPerfil = '$perfilNome' WHERE logar = '$usuarioLogado'";
  $resultado = mysqli_query($conectaDB, $query);

  include '../../DatabaseConect/conexao.php';

  $query2 = "UPDATE comentarios SET imagemPerfil = '$perfilNome' WHERE usuario = '$usuarioLogado'";
  $resultado2 = mysqli_query($conn, $query2);

  if (!$resultado || !$resultado2) {
    $atualizacoesBemSucedidas = false;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém o novo nome de login enviado pelo formulário
  $novoNome = $_POST["mudarNome"];
  $conectaDB = criarConexao();
  $erro = "";

  // Verifique se o novo nome de login está vazio
  if (empty($novoNome)) {
    // Trate o erro de nome de login vazio
    echo "O novo nome de login não pode estar em branco.";
    $atualizacoesBemSucedidas = false;
  } else {
    // Verifique se o novo nome de login contém apenas caracteres alfanuméricos
    if (ctype_alnum($novoNome)) {
      // Verifique se o novo nome de login não é igual ao nome de login de outros usuários
      $queryVerificar = "SELECT COUNT(*) as total FROM conta WHERE logar = '$novoNome'";
      $resultadoVerificar = mysqli_query($conectaDB, $queryVerificar);
      $dadosVerificar = mysqli_fetch_assoc($resultadoVerificar);

      if ($dadosVerificar['total'] > 0 && $novoNome != $usuarioLogado) {
        // Trate o erro de nome de login já existente, exceto se for o próprio usuário
        $erro = "O novo nome de login já está em uso por outro usuário.";
        $atualizacoesBemSucedidas = false;
      } else {
        // Atualize o nome de login do usuário no banco de dados
        $queryAtualizar = "UPDATE conta SET logar = '$novoNome' WHERE cod_usuario = $idUsuario"; // Substitua $codUsuario pelo ID do usuário
        $resultadoAtualizar = mysqli_query($conectaDB, $queryAtualizar);

        include '../../DatabaseConect/conexao.php';

        $queryAtualizar2 = "UPDATE comentarios SET usuario = '$novoNome' WHERE usuario = '$usuarioLogado'";
        $resultadoAtualizar2 = mysqli_query($conn, $queryAtualizar2);

        if ($resultadoAtualizar) {
          // Nome de login atualizado com sucesso
          echo "Nome de login atualizado com sucesso!";
        } else {
          // Trate o erro de atualização do nome de login
          $erro = "Erro ao atualizar o nome de login: " . mysqli_error($conectaDB);
          $atualizacoesBemSucedidas = false;
        }
      }
    } else {
      // Trate o erro de caracteres inválidos no nome de login
      $erro = "O novo nome de login contém caracteres inválidos. Use apenas letras e números.";
      $atualizacoesBemSucedidas = false;
    }
  }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verifique se o campo "opcao1" foi marcado
  if (isset($_POST["opcao1"])) {
    $opcao1 = 1; 
  } else {
    $opcao1 = 0; 
  }


  if (isset($_POST["opcao2"])) {
    $opcao2 = 1; 
  } else {
    $opcao2 = 0; 
  }

  
  if (isset($_POST["opcao3"])) {
    $opcao3 = 1; 
  } else {
    $opcao3 = 0; 
  }

  if (isset($_POST["opcao4"])) {
    $opcao4 = 1; 
  } else {
    $opcao4 = 0; 
  }

  $sql = "UPDATE conta SET playstation = $opcao2, xbox = $opcao1, switch = $opcao3, pc = $opcao4 WHERE cod_usuario = '$idUsuario'";

  // Execute a consulta de atualização
  $resultado = mysqli_query($conectaDB, $sql);

  if ($resultado) {
    echo "Opções atualizadas com sucesso.";
  } else {
    echo "Erro ao atualizar as opções: " . mysqli_error($conectaDB);
  }
}

$_SESSION['erro'] = $erro;

if ($atualizacoesBemSucedidas) {
  // Todas as atualizações foram bem-sucedidas, redirecione o usuário
  header("Location: ../sucesso/sucesso.php");
  exit();
} else {
  header("Location: ../erro/erro.php");
  exit();
}

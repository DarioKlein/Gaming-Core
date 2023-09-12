<?php

include('../../DatabaseConect/dbCadastrar.php');

function cadastro($logar,$senha,$email){
    if (verificarExistenciaUsuarioEmail($usuario, $email)) {
    $conectaDB = criarConexao();
    $query = "insert into conta(logar,senha,email) values('$logar','$senha','$email');";
    $inserir = mysqli_query($conectaDB,$query);
    if($inserir){
    header("Location: ../login/login.php");
    exit();    
    }
    else{
        echo "<script>alert('O cadastro falhou. Por favor, tente novamente.');</script>";
    }
}
}


function verificarExistenciaUsuarioEmail($logar, $email) {
   $conectaDB = criarConexao();
    // Verificar se o nome de usuário já existe
    $queryUsuario = "SELECT COUNT(*) as total FROM conta WHERE logar = '$logar'";
    $resultadoUsuario = mysqli_query($conectaDB, $queryUsuario);

    if ($resultadoUsuario) {
        $dadosUsuario = mysqli_fetch_assoc($resultadoUsuario);
        if ($dadosUsuario['total'] > 0) {
            echo "<script>
            var inputElement = document.getElementById('logar');
            inputElement.placeholder = 'Nome já cadastrado!';
            var algo = document.getElementById('lab1');
            algo.classList.add('lab1-1');
            </script>";
            return false;
        }
    }

    // Verificar se o e-mail já existe
    $queryEmail = "SELECT COUNT(*) as total FROM conta WHERE email = '$email'";
    $resultadoEmail = mysqli_query($conectaDB, $queryEmail);

    if ($resultadoEmail) {
        $dadosEmail = mysqli_fetch_assoc($resultadoEmail);
        if ($dadosEmail['total'] > 0) {
            echo "<script>
            var inputElement = document.getElementById('email');
            inputElement.placeholder = 'Email já cadastrado!';
            var algo = document.getElementById('lab2');
            algo.classList.add('lab2-2');
            </script>";
            return false;
        }
    }
    return true; // Se tudo estiver OK, o usuário e e-mail podem ser cadastrados.
}

function validarEmail($email) {
    // Usar uma expressão regular para validar o formato do e-mail
    $padrao = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
    return preg_match($padrao, $email);
}



function logarUsuario($logar, $senha) {
    //Iniciar uma sessão no PHP
session_start();
$_SESSION['username'] = $_POST['logar'];

//Verificar se o usuário cliclou no botão Entrar
if(isset($_POST['entrar'])){
  
    /*Atribuir os dados do formulário em variaveis de sessões PHP*/
    $_SESSION['logar'] = $_POST['logar'];
    $_SESSION['senha'] = $_POST['senha'];

/*Atribuir os valores que estão nas variáveis de sessões para realizar verificações*/
$logar = $_SESSION['logar'];
$senha = $_SESSION['senha'];

//Verificar se o usuário preencheu os campos
//Verificar se a variável esta nula no PHP
    $nomeServer = "localhost"; // Ou o endereço do servidor MySQL externo
    $userName = "root";
    $password = "etec";
    $dbNome = "cadastrar";

    // Criar conexão
    $conectaDB = mysqli_connect($nomeServer, $userName, $password, $dbNome);



    $query = "Select logar,senha from conta;";
    $consulta = mysqli_query($conectaDB, $query);
    while($linha = mysqli_fetch_assoc($consulta)){


//Verificar se login e senha estão corretos
if($logar==$linha["logar"] and $senha==$linha["senha"]){
header('Location: ../../Home/index.php');
exit();
} else {
    header("Location: erro/erro_login.php");
}
             }
          }
        }
    


?>
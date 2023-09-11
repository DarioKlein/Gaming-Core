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

    <title>Gaming Core - Jogos </title>

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

    <main>
        <div class="espaco"></div>
        <div class="title-principal">
         <h1>
            <span>|</span> Jogos
         </h1>
        </div>
        
        <!-- Filtragem do site -->
        <div class="filtragem-jogos">
        <div class="metade">
        <div class="dropdown">
        <div class="select">
            <span class="selected"> Filtrar por: </span>
            <div class="caret"></div>
        </div>
        <div class="menu">
            <a href="?genre=Acao e Aventura"><li>Ação/Aventura</li></a>
            <a href="?genre=RPG"><li>RPG</li></a>
            <a href="?genre=Esportes"><li>Esportes</li></a>
            <a href="?genre=Survival horror"><li>Survival Horror</li></a>
            <a href="?genre=Sobrevivencia"><li>Sobrevivencia</li></a>
            <a href="?genre=Plataforma"><li>Plataforma</li></a>
            <a href="?genre=Roguelike"><li>Roguelike</li></a>
            <a href="?genre=Luta"><li>Luta</li></a>
            <a href="?sort=name_asc"><li>A-Z</li></a>
            <a href="?sort=name_desc"><li>Z-A</li></a>
            <a href="?genre="><li>Voltar</li></a>
        </div>
        </div>
        </div>
        
        <div class="botao-pesquisa">
        <form method="POST" action="index.php">
        <input type="text" id="btn-pesquisa" name="search_query">
        <div class="imagem-pesquisa">
        <img src="extra-jogos
        /490px-Magnifying_glass_icon.svg.svg" id="image-search" alt="">
        </div>
        <input type="submit" value="Buscar" id="pesquisar">
        </form>
        </div>
        </div>
        <hr id="linha">

        <!-- Jogos --> 
    <div class="container-cards">
        <?php
//Se conectar com o Banco de dados
$nomeServer = "localhost"; // Ou o endereço do servidor MySQL externo
$userName = "root";
$password = "dario";
$dbNome = "games";

// Criar conexão
$conn = mysqli_connect($nomeServer, $userName, $password, $dbNome);

$genreFilter = $_GET['genre'] ?? '';
$sort = $_GET['sort'] ?? '';
$searchQuery = $_POST['search_query'] ?? '';
if (!empty($searchQuery)) {
    $searchQuery = mysqli_real_escape_string($conn, $searchQuery); // Sanitize input
    $sql = "SELECT nome, data_lanc, genero, endereco, imagem FROM jogos WHERE nome LIKE '%$searchQuery%'";
} elseif (!empty($genreFilter)) {
    $sql = "SELECT nome, data_lanc, genero, endereco, imagem FROM jogos WHERE genero = '$genreFilter'";
} else {
    $sql = "SELECT nome, data_lanc, genero, endereco, imagem FROM jogos";
}

if ($sort === 'name_asc') {
    $sql .= " ORDER BY nome ASC";
} elseif ($sort === 'name_desc') {
    $sql .= " ORDER BY nome DESC";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count = 0;
    echo '<div class="container-card">';
    while ($row = $result->fetch_assoc()) {
        if ($count > 0 && $count % 4 === 0) {
            echo '</div>'; 
            echo '<div class="container-card">'; 
        }
        $count++;
        echo '<div class="card1">
        <button class="fav"> <img src="extra-jogos
        /fav.png" alt=""> </button>
        <img src="'  . $row["imagem"] . '" alt="' . $row["nome"] .    '">

        <div class="titulo-card">
        <div class="raio">
        <img src="extra-jogos
        /light.svg">
        </div>
        <h2>' . $row["nome"] .  '</h2>
    </div>
    <div class="data-card">
        <p>'
        . $row["data_lanc"] .
        '</p>
    </div>
    <div class="button-card">
        <button>
            <a href="'. $row["endereco"] .'"> Veja mais <img src="extra-jogos
            /vejamais.svg"></a>
        </button>
    </div>

    </div>

    
';
    }

} else {
    echo "<div class='jogoNaoEncontrado'><h4> Nenhum Jogo foi Encontrado </h4></div>";
    echo "<div class='jogoNaoEncontrado'><h5> Tente Mudar a Pesquisa... </h5></div>";
}
?>
</div>

<div class="container-div">
        <!-- Conteúdo da div a ser exibida -->
        <?php
        $nomeServer = "localhost"; // Ou o endereço do servidor MySQL externo
        $userName = "root";
        $password = "dario";
        $dbNome = "games";
        
        // Criar conexão
        $conn = mysqli_connect($nomeServer, $userName, $password, $dbNome);

        $genreFilter = $_GET['genre'] ?? '';
        $sort = $_GET['sort'] ?? '';
        $searchQuery = $_POST['search_query'] ?? '';
        if (!empty($searchQuery)) {
            $searchQuery = mysqli_real_escape_string($conn, $searchQuery); // Sanitize input
            $sql_div = "SELECT nome, data_lanc, genero, endereco, imagem FROM jogos WHERE nome LIKE '%$searchQuery%'";
        } elseif (!empty($genreFilter)) {
            $sql_div = "SELECT nome, data_lanc, genero, endereco, imagem FROM jogos WHERE genero = '$genreFilter'";
        } else {
            $sql_div = "SELECT nome, data_lanc, genero, endereco, imagem FROM jogos";
        }

        if ($sort === 'name_asc') {
            $sql_div .= " ORDER BY nome ASC";
        } elseif ($sort === 'name_desc') {
            $sql_div .= " ORDER BY nome DESC";
        }

        $result_div = $conn->query($sql_div);

        if ($result_div->num_rows > 0) {
            while ($row_div = $result_div->fetch_assoc()) {
                echo '
                    <a href="'. $row_div["endereco"] .'";>
                    <div class="mobile-cards">
                    <div class="img-mobile">
                        <img src="'  . $row_div["imagem"] . '" alt="' . $row_div["nome"] .    '">
                    </div>
                    <div class="texto-lateral-mobile">
                        <div class="favorito-mobile">
                            <button class="fav"> <img src="extra-jogos
                            /fav.png" alt=""> </button>
                        </div>
                        <div class="title-mobile">
                            <h2>
                            ' . $row_div["nome"] .  '
                            </h2>
                        </div>
                        <div class="avaliacao-mobile">
                            <p>
                            <img src="extra-jogos
                            /star.svg" alt=""> Avaliação: <span>--</span>
                            </p>
                        </div>
                        <div class="espaco-mobile"> </div>
    
                        <div class="botao-mobile2">
                            <button>
                                + Lista Jogar
                            </button>
                        </div>
                    </div>
    
                </div>
                </a>';
            }
        } else {
            
        }
        ?>
    </div>


    <hr id="linha2">
    <div class="align">
    <div class="direct-paginas">
        <span>🢢</span>
        <a id="p1" href="jogos.php">1</a>
        <a id="p2" href="jogos2.php">2</a>
        <a id="p3" href="jogos3.php">3</a>
        <a id="p4" href="jogos4.php">4</a>
        <a id="p5" href="jogos5.php">5</a>
        <a id="p6" href="jogos6.php">6</a>
        <a id="p7" href="jogos7.php">7</a>
        <a id="p8" href="jogos8.php">8</a>
        <a id="p9" href="jogos9.php">9</a>
        <a id="p10" href="jogos10.php">10</a>
        <span>🢣</span>
    </div>
    </div>
</main>

    <!-- footer -->
    <?php
    include('../Template/Footer/index.php');
    ?>



    <!-- Imports template JS -->
    <script src="../Template/Navbar/script.js"></script>


    <script src="script.js"></script>

  </body>
</html>

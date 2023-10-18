<?php
include '../../DatabaseConect/conexao.php';

function obterNotaDoJogo($conn, $cod_jogo)
{
  $sqlNota = "SELECT nota FROM games WHERE cod_jogo = $cod_jogo";
  $resultNota = $conn->query($sqlNota);

  if ($resultNota->num_rows > 0) {
    $rowNota = $resultNota->fetch_assoc();
    return $rowNota["nota"];
  } else {
    return "N/A"; // Ou qualquer outro valor padrão
  }
}

$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
$genero = $_GET['genero'];
$sql_2 = "SELECT * FROM jogos ORDER BY RAND() LIMIT $offset, 4";
$result = $conn->query($sql_2);

if ($result->num_rows > 0) {
  $cardsExibidos = 0;

  while ($row_div2 = $result->fetch_assoc()) {
    $nota = obterNotaDoJogo($conn, $row_div2['cod_jogo']);
    echo '
    <div class="cards">
      <img class="imagens-principais" src="'. $row_div2["imagem"] .'" alt="" />
      <div class="title-cards">
        <h2>
          <img id="bolt" src="extraAndImg-jogo/icons/raio.svg" alt="" />
          '. $row_div2["nome"] . '
        </h2>
      </div>
      <div class="notas-cards">
        <p><img id="star-cards" src="extraAndImg-jogo/icons/star.svg" alt="" />' . $nota .'</p>
      </div>
      <a href="'. $row_div2["endereco"] .'">
        <img id="add-button" src="extraAndImg-jogo/icons/add.svg" alt="" />Veja Mais
      </a>
    </div>
  ';
    
  echo '
           <a class="adress-mobile" href="'. $row_div2["endereco"] .'">
            <div class="cards-mobile">
                <div class="imagem-mobile">
                  <img src="'. $row_div2["imagem"] .'" alt="" />
                </div>
                <div class="conteudo-mobile">
                  <div class="title-mobile">'. $row_div2["nome"] . '</div>

                  <div class="avaliacao-mobile">
                    <img src="extraAndImg-jogo/icons/star.svg" alt="" />
                    <p>' . $row_div2["nota"] . '</p>
                  </div>
                  <button class="add-mobile">
                    <img class="add-mobile" src="extraAndImg-jogo/icons/add.svg" alt="" /> Adicionar
                  </button>
                </div>
              </div>
              </a>
                ';
  }
  
}

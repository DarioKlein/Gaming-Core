<?php
include '../../DatabaseConect/conexao.php';
$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
$genero = $_GET['genero'];
$sql_2 = "SELECT * FROM jogos WHERE genero = '$genero' LIMIT $offset, 4";
$result = $conn->query($sql_2);

if ($result->num_rows > 0) {
  $cardsExibidos = 0;

  while ($row_div2 = $result->fetch_assoc()) {
    echo '
    <div class="cards">
      <img src="'. $row_div2["imagem"] .'" alt="" />
      <div class="title-cards">
        <h2>
          <img id="bolt" src="extraAndImg-jogo/raio.svg" alt="" />
          '. $row_div2["nome"] .'
        </h2>
      </div>
      <div class="notas-cards">
        <p><img id="star-cards" src="extraAndImg-jogo/star.svg" alt="" /> 9.7</p>
      </div>
      <a href="'. $row_div2["endereco"] .'">
        <img id="add-button" src="extraAndImg-jogo/add.svg" alt="" />Veja Mais
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
                  <div class="title-mobile">'. $row_div2["nome"] .'</div>

                  <div class="avaliacao-mobile">
                    <img src="extraAndImg-jogo/star.svg" alt="" />
                    <p>8.7</p>
                  </div>
                  <button class="add-mobile">
                    <img class="add-mobile" src="extraAndImg-jogo/add.svg" alt="" /> Adicionar
                  </button>
                </div>
              </div>
              </a>
                ';
  }
  
}



?>

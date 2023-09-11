// CARROSSEL DESTAQUES

//  SLIDE 1-2

function mudaCon() {
  var id = document.getElementById("conteudo")
  id.style.transform = "translatex(-110%)"

  var id = document.getElementById("conteudo2")
  id.style.transform = "translatex(0) translatey(-100%)"
}
// SLIDE 2-1
function voltarCon1() {
  var id = document.getElementById("conteudo")
  id.style.transform = "translatex(0)"

  var id = document.getElementById("conteudo2")
  id.style.transform = "translatex(110%) translatey(-100%)"
}

// SLIDE 2-3
function mudaCon1() {
  var id = document.getElementById("conteudo3")
  id.style.transform = "translatex(0) translatey(-100%)"

  var id = document.getElementById("conteudo2")
  id.style.transform = "translatex(-110%)  translatey(-100%)"
}
// SLIDE 3-2
function voltarCon2() {
  var id = document.getElementById("conteudo3")
  id.style.transform = "translatex(110%) translatey(-100%)"

  var id = document.getElementById("conteudo2")
  id.style.transform = "translatex(0) translatey(-100%)"
}
// SLIDE 3-4
function mudaCon2() {
  var id = document.getElementById("conteudo4")
  id.style.transform = "translatex(0) translatey(-100%)"

  var id = document.getElementById("conteudo3")
  id.style.transform = "translatey(-100%) translatex(-110%)"
}
// SLIDE 4-3
function voltarCon3() {
  var id = document.getElementById("conteudo3")
  id.style.transform = "translatex(0) translatey(-100%)"

  var id = document.getElementById("conteudo4")
  id.style.transform = "translatex(110%) translatey(-100%)"
}
// SLIDE 4-1
function mudaCon3() {
  var id = document.getElementById("conteudo4")
  id.style.transform = "translatey(-100%) translatex(110%)"

  var id = document.getElementById("conteudo")
  id.style.transform = "translatex(0)"
}

// SLIDE 1-4S
function voltarCon() {
  var id = document.getElementById("conteudo")
  id.style.transform = "translatex(-110%)"

  var id = document.getElementById("conteudo4")
  id.style.transform = "translatex(0%) translatey(-100%)"
}

// CARROSSEL 2 LANÇAMENTOS

function mudaCard() {
  var id = document.getElementById("card1")
  id.style.transform = "translatex(-110%)"

  var id = document.getElementById("card2")
  id.style.transform = "translatex(0) translatey(-100%) "
}

function mudaCard2() {
  var id = document.getElementById("card2")
  id.style.transform = "translatey(-100%) translatex(-110%)"

  var id = document.getElementById("card3")
  id.style.transform = "translatex(0) translatey(-100%) "

  var id = document.getElementById("mudaCard3")
  id.style.opacity = "30%"
}

function voltarCard2() {
  var id = document.getElementById("card2")
  id.style.transform = "translatey(-100%) translatex(110%)"

  var id = document.getElementById("card1")
  id.style.transform = "translatex(0)"
}

function voltarCard3() {
  var id = document.getElementById("card3")
  id.style.transform = "translatey(-100%) translatex(110%)"

  var id = document.getElementById("card2")
  id.style.transform = "translatex(0) translatey(-100%)"
}

//  CARROSSEL 2 MOBILE

$(document).ready(function () {
  $(".carousel2").slick({
    dots: false,
    arrows: false,
    swipe: true,
    draggable: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 768 /* Adicione um ponto de interrupção para o layout em dispositivos móveis */,
        settings: {
          slidesToShow: 2 /* Mostrar 2 imagens por slide em dispositivos móveis */,
          slidesToScroll: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 481 /* Adicione um ponto de interrupção para o layout em dispositivos menores */,
        settings: {
          slidesToShow: 1 /* Mostrar apenas 1 imagem por slide em dispositivos menores */,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  })
})

//CARROSSEL 3 FAVORITOS
// BOTÃO 1

function executarfuncao2() {
  funcao5()
  setTimeout(funcao6, 6)
}

function funcao5() {
  var id = document.getElementById("carrossel-galeria")
  id.style.display = "flex"
  var id = document.getElementById("carrossel-galeria")
  id.style.opacity = "0%"

  var id = document.getElementById("carrossel-galeria2")
  id.style.display = "none"

  var id = document.getElementById("carrossel-galeria3")
  id.style.display = "none"

  var id = document.getElementById("botao1")
  id.style.background = "#00ff88"

  var id = document.getElementById("botao2")
  id.style.background = "none"

  var id = document.getElementById("botao3")
  id.style.background = "none"
}

function funcao6() {
  var id = document.getElementById("carrossel-galeria")
  id.style.opacity = "100%"
}

// BOTÃO 2

function executarfuncao() {
  funcao1()
  setTimeout(funcao2, 6)
}

function funcao1() {
  var id = document.getElementById("carrossel-galeria2")
  id.style.display = "flex"
  var id = document.getElementById("carrossel-galeria2")
  id.style.opacity = "0%"

  var id = document.getElementById("carrossel-galeria")
  id.style.display = "none"

  var id = document.getElementById("carrossel-galeria3")
  id.style.display = "none"

  var id = document.getElementById("botao1")
  id.style.background = "none"

  var id = document.getElementById("botao2")
  id.style.background = "#00ff88"

  var id = document.getElementById("botao3")
  id.style.background = "none"
}

function funcao2() {
  var id = document.getElementById("carrossel-galeria2")
  id.style.opacity = "100%"
}

// Botão 3
function executarfuncao3() {
  funcao3()
  setTimeout(funcao4, 6)
}

function funcao3() {
  var id = document.getElementById("carrossel-galeria3")
  id.style.display = "flex"
  var id = document.getElementById("carrossel-galeria3")
  id.style.opacity = "0%"

  var id = document.getElementById("carrossel-galeria")
  id.style.display = "none"

  var id = document.getElementById("carrossel-galeria2")
  id.style.display = "none"

  var id = document.getElementById("botao1")
  id.style.background = "none"

  var id = document.getElementById("botao2")
  id.style.background = "none"

  var id = document.getElementById("botao3")
  id.style.background = "#00ff88"
}

function funcao4() {
  var id = document.getElementById("carrossel-galeria3")
  id.style.opacity = "100%"
}

// EFEITO IMAGENS CARROSSEL 3 FAVORITOS

function imagem1() {
  var id = document.getElementById("img0")
  id.style.display = "none"

  var id = document.getElementById("img01")
  id.style.display = "flex"
}

function tiraImagem1() {
  var id = document.getElementById("img01")
  id.style.display = "none"

  var id = document.getElementById("img0")
  id.style.display = "flex"
}

function imagem2() {
  var id = document.getElementById("img0")
  id.style.display = "none"

  var id = document.getElementById("img02")
  id.style.display = "flex"
}

function tiraImagem2() {
  var id = document.getElementById("img02")
  id.style.display = "none"

  var id = document.getElementById("img0")
  id.style.display = "flex"
}

function imagem3() {
  var id = document.getElementById("img0")
  id.style.display = "none"

  var id = document.getElementById("img03")
  id.style.display = "flex"
}

function tiraImagem3() {
  var id = document.getElementById("img03")
  id.style.display = "none"

  var id = document.getElementById("img0")
  id.style.display = "flex"
}

function imagem4() {
  var id = document.getElementById("img0")
  id.style.display = "none"

  var id = document.getElementById("img04")
  id.style.display = "flex"
}

function tiraImagem4() {
  var id = document.getElementById("img04")
  id.style.display = "none"

  var id = document.getElementById("img0")
  id.style.display = "flex"
}

function imagem5() {
  var id = document.getElementById("img00")
  id.style.display = "none"

  var id = document.getElementById("img05")
  id.style.display = "flex"
}

function tiraImagem5() {
  var id = document.getElementById("img05")
  id.style.display = "none"

  var id = document.getElementById("img00")
  id.style.display = "flex"
}

function imagem6() {
  var id = document.getElementById("img00")
  id.style.display = "none"

  var id = document.getElementById("img06")
  id.style.display = "flex"
}

function tiraImagem6() {
  var id = document.getElementById("img06")
  id.style.display = "none"

  var id = document.getElementById("img00")
  id.style.display = "flex"
}

function imagem7() {
  var id = document.getElementById("img00")
  id.style.display = "none"

  var id = document.getElementById("img07")
  id.style.display = "flex"
}

function tiraImagem7() {
  var id = document.getElementById("img07")
  id.style.display = "none"

  var id = document.getElementById("img00")
  id.style.display = "flex"
}

function imagem8() {
  var id = document.getElementById("img00")
  id.style.display = "none"

  var id = document.getElementById("img08")
  id.style.display = "flex"
}

function tiraImagem8() {
  var id = document.getElementById("img08")
  id.style.display = "none"

  var id = document.getElementById("img00")
  id.style.display = "flex"
}

function imagem9() {
  var id = document.getElementById("img000")
  id.style.display = "none"

  var id = document.getElementById("img09")
  id.style.display = "flex"
}

function tiraImagem9() {
  var id = document.getElementById("img09")
  id.style.display = "none"

  var id = document.getElementById("img000")
  id.style.display = "flex"
}

function imagem10() {
  var id = document.getElementById("img000")
  id.style.display = "none"

  var id = document.getElementById("img010")
  id.style.display = "flex"
}

function tiraImagem10() {
  var id = document.getElementById("img010")
  id.style.display = "none"

  var id = document.getElementById("img000")
  id.style.display = "flex"
}

function imagem11() {
  var id = document.getElementById("img000")
  id.style.display = "none"

  var id = document.getElementById("img011")
  id.style.display = "flex"
}

function tiraImagem11() {
  var id = document.getElementById("img011")
  id.style.display = "none"

  var id = document.getElementById("img000")
  id.style.display = "flex"
}

function imagem12() {
  var id = document.getElementById("img000")
  id.style.display = "none"

  var id = document.getElementById("img012")
  id.style.display = "flex"
}

function tiraImagem12() {
  var id = document.getElementById("img012")
  id.style.display = "none"

  var id = document.getElementById("img000")
  id.style.display = "flex"
}

// CARROSSEL 4 TOP

function mudaCard_v2() {
  var id = document.getElementById("card1_v2")
  id.style.transform = "translatex(-110%)"

  var id = document.getElementById("card2_v2")
  id.style.transform = "translatex(0) translatey(-100%) "
}

function mudaCard2_v2() {
  var id = document.getElementById("card2_v2")
  id.style.transform = "translatey(-100%) translatex(-110%)"

  var id = document.getElementById("card3_v2")
  id.style.transform = "translatex(0) translatey(-100%) "

  var id = document.getElementById("mudaCard3_v2")
  id.style.opacity = "30%"
}

function voltarCard2_v2() {
  var id = document.getElementById("card2_v2")
  id.style.transform = "translatey(-100%) translatex(110%)"

  var id = document.getElementById("card1_v2")
  id.style.transform = "translatex(0)"
}

function voltarCard3_v2() {
  var id = document.getElementById("card3_v2")
  id.style.transform = "translatey(-100%) translatex(110%)"

  var id = document.getElementById("card2_v2")
  id.style.transform = "translatex(0) translatey(-100%)"
}

// DropDown - Login

function menuToggle() {
  const toggleMenu = document.querySelector(".menu-dropdown")
  toggleMenu.classList.toggle("active")
}

// Favorito efeito

const elementosAlterados = []

function mudaBrilho(id) {
  const element = document.getElementById(id)
  element.style.opacity = "0.5"
}

function mudaImg(id) {
  const element = document.getElementById(id)
  element.src = "extras/favpreenchido.png"
  element.style.opacity = "1"
}

function mudaFav(id, outroId) {
  if (!elementosAlterados.includes(id)) {
    mudaBrilho(id)
    setTimeout(function () {
      mudaImg(id)
      elementosAlterados.push(id)

      // Atualize automaticamente o outro elemento
      mudaBrilho(outroId)
      setTimeout(function () {
        mudaImg(outroId)
        elementosAlterados.push(outroId)
      }, 500)
    }, 500)
  } else {
    // Reverta as alterações

    voltaFav(id)
    voltaFav(outroId)
    const index = elementosAlterados.indexOf(id)
    if (index > -1) {
      elementosAlterados.splice(index, 1)
    }
  }
}

function voltaFav(id) {
  // const element = document.getElementById(id);
  // element.src = "imagens/fav.png";
  // element.style.opacity = "1";
  const element = document.getElementById(id)
  let opacity = 1

  const fadeOutInterval = setInterval(function () {
    if (opacity > 0) {
      opacity -= 0.4 // Ajuste a velocidade de fade conforme necessário
      element.style.opacity = opacity.toString()
    } else {
      clearInterval(fadeOutInterval)
      element.src = "extras/fav.png"
      element.style.opacity = "1"
    }
  }, 100) // Ajuste o i
}

const botoes = document.querySelectorAll(".mobile-vejamais")

botoes.forEach(function (botao) {
  botao.addEventListener("click", function (event) {
    event.preventDefault()
    mudaFav(id, outroId)
  })
})

const botoes2 = document.querySelectorAll(".fav_v2")

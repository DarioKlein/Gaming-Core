function favoritar() {
  const imagem = document.getElementById("fav")

  if (imagem.src.includes("list-added.svg")) {
    imagem.classList.add("fadeOut")

    setTimeout(function () {
      imagem.src = "extraAndImg-jogo/icons/add-list.svg"
      imagem.classList.remove("fadeOut")
      imagem.classList.add("fav1")
      imagem.classList.remove("fav2")
    }, 300)
  } else {
    imagem.classList.add("fadeOut")

    setTimeout(function () {
      imagem.src = "extraAndImg-jogo/icons/list-added.svg"
      imagem.classList.remove("fadeOut")
      imagem.classList.add("fav2")
      imagem.classList.remove("fav1")
    }, 300)
  }
}

function abrirLightbox() {
  const lightbox = document.getElementById("lightbox")
  const lightboxImagem = document.getElementById("lightbox-imagem")
  const fecharImagem = document.getElementById("fechar-imagem")
  const imagem1 = document.getElementById("imgSecundaria1").textContent
  lightboxImagem.src = imagem1
  lightbox.classList.add("ativo")
  setTimeout(function () {
    lightboxImagem.style.transform = "scale(1)"
    fecharImagem.style.transform = "scale(1)"
  }, 50)
}

function abrirLightbox2() {
  const lightbox = document.getElementById("lightbox")
  const lightboxImagem = document.getElementById("lightbox-imagem")
  const fecharImagem = document.getElementById("fechar-imagem")
  const imagem2 = document.getElementById("imgSecundaria2").textContent
  lightboxImagem.src = imagem2
  lightbox.classList.add("ativo")
  setTimeout(function () {
    lightboxImagem.style.transform = "scale(1)"
    fecharImagem.style.transform = "scale(1)"
  }, 50)
}

function fecharLightbox() {
  const lightbox = document.getElementById("lightbox")
  const lightboxImagem = document.getElementById("lightbox-imagem")
  const fecharImagem = document.getElementById("fechar-imagem")
  lightboxImagem.style.transform = "scale(0.6)"
  fecharImagem.style.transform = "scale(0.8)"
  lightbox.classList.remove("ativo")
}

const fecharBotao = document.getElementById("fechar")
fecharBotao.addEventListener("click", fecharLightbox)

function lightIcon(lancamentos, listimg) {
  lancamentos.addEventListener("mouseover", () => {
    setTimeout(() => {
      listimg.src = "extraAndImg-jogo/icons/list2.svg"
    }, 100)

    lancamentos.addEventListener("mouseout", () => {
      setTimeout(() => {
        listimg.src = "extraAndImg-jogo/icons/list.svg"
      }, 100)
    })
  })
}

function configurarLightIcon(elementoId, listId) {
  const elemento = document.getElementById(elementoId)
  const list = document.getElementById(listId)
  lightIcon(elemento, list)
}

configurarLightIcon("lancamentos", "list-img")
configurarLightIcon("lancamentos2", "list-img2")
configurarLightIcon("lancamentos3", "list-img3")
configurarLightIcon("lancamentos4", "list-img4")

function abrir() {
  const ocult = document.getElementById("ocult-submit")
  ocult.style.display = "flex"
}

function cancelarComentario() {
  const ocult = document.getElementById("ocult-submit")
  ocult.style.display = "none"
}

function like(commentId) {
  const likeButton = document.getElementById(`like-${commentId}`)
  const likeCountElement = document.getElementById(`like-num-${commentId}`)
  if (!likeButton.disabled) {
    const id = likeButton.getAttribute("data_clicked_id")

    // Desative o botão de like para evitar cliques repetidos
    likeButton.disabled = true

    // Verifique se o botão de deslike estava ativado e, se sim, reativá-lo
    const dislikeButton = document.getElementById(`deslike-${commentId}`)
    dislikeButton.disabled = true

    // Faça a requisição AJAX para verificar o status do usuário
    $.ajax({
      type: "POST",
      url: "FuncoesJogo/verificar_status.php", // Substitua com o URL correto para a verificação
      data: { commentId: id, action: "like" },
      success: function (response) {
        console.log(response)
        if (response === " success") {
          // Após a confirmação do banco, atualize a contagem de likes no elemento
          const likeCount = parseInt(likeCountElement.textContent) + 1
          likeCountElement.textContent = likeCount
          likeButton.querySelector("img").src =
            "extraAndImg-jogo/icons/liked.svg"
        } else {
          // Trate o caso em que a confirmação do banco de dados falhou
          console.error("Falha na confirmação do banco de dados.", response)
        }
      },
      error: function (error) {
        // Trate erros na requisição AJAX
        console.error("Erro ao verificar o status do usuário: " + error)
      },
    })
  }
}

function deslike(commentId) {
  const deslikeButton = document.getElementById(`deslike-${commentId}`)
  const deslikeCountElement = document.getElementById(
    `deslike-num-${commentId}`
  )

  // Verifique se o botão de deslike não está desativado
  if (!deslikeButton.disabled) {
    const id = deslikeButton.getAttribute("data_clicked_id")

    // Desative o botão de deslike para evitar cliques repetidos
    deslikeButton.disabled = true

    // Verifique se o botão de like estava ativado e, se sim, reativá-lo
    const likeButton = document.getElementById(`like-${commentId}`)
    likeButton.disabled = true

    // Faça a requisição AJAX para verificar o status do usuário
    $.ajax({
      type: "POST",
      url: "FuncoesJogo/verificar_status.php", // Substitua com o URL correto para a verificação
      data: { commentId: id, action: "deslike" },
      success: function (response) {
        if (response === " success") {
          // Após a confirmação do banco, atualize a contagem de deslikes no elemento
          const deslikeCount = parseInt(deslikeCountElement.textContent) + 1
          deslikeCountElement.textContent = deslikeCount
          deslikeButton.querySelector("img").src =
            "extraAndImg-jogo/icons/Desliked.svg"
        } else {
          // Trate o caso em que a confirmação do banco de dados falhou
          console.error("Falha na confirmação do banco de dados.", response)
        }
      },
      error: function (error) {
        // Trate erros na requisição AJAX
        console.error("Erro ao verificar o status do usuário: " + error)
      },
    })
  }
}

// Selecione o campo de entrada e o botão
const comentarioInput = document.getElementById("comentario")
const enviarBotao = document.getElementById("enviar")

// Adicione um ouvinte de evento para verificar quando o campo de entrada muda
comentarioInput.addEventListener("input", function () {
  // Verifique se o campo de entrada tem caracteres
  if (comentarioInput.value.trim() !== "") {
    enviarBotao.removeAttribute("disabled")
    enviarBotao.classList.remove("enviarComentario")
  } else {
    // Se não houver caracteres, desabilite o botão
    enviarBotao.setAttribute("disabled", "disabled")
    enviarBotao.classList.add("enviarComentario")
  }
})

$(document).ready(function () {
  let offset = 5
  const cardContainer = $("#explore2") // Seleciona a div onde os cards serão adicionados
  let genero = $("#genero-atual").data("genero")
  // Função para carregar mais cards quando o botão for clicado
  $("#loading").click(function () {
    $("#loading-animation").show() // Mostra a animação de carregamento
    $.ajax({
      url: "FuncoesJogo/fetch_games.php",
      type: "GET",
      data: { offset: offset, genero: genero },
      success: function (data) {
        cardContainer.append(data) // Adiciona os dados de cards diretamente à div existente

        // Atualiza o offset para buscar os próximos 5 cards
        offset += 5

        $("#explore2").css("display", "flex") // Mostra a div após a adição dos cards
        $("#loading").hide()
        $("#loading-animation").hide() // Oculta a animação de carregamento após o carregamento dos dados
      },
    })
  })
})

// Minha Lista Adicionamento

const buttonAdicionar = document.getElementById("adicionaJogosLista")
buttonAdicionar.addEventListener("click", () => {
  const nomeJogo = buttonAdicionar.getAttribute("nomeDoJogo")
  const nomeUsuario = buttonAdicionar.getAttribute("nomeDoUsuario")
  const nota = "N.A"
  const progresso = "Quero Jogar"
  const imagemJogo = buttonAdicionar.getAttribute("imagemJogo")
  const nomeImagem = imagemJogo.split("extraAndImg-jogo/imgPrincipal/").join("")
  let imagem = "../jogo/extraAndImg-jogo/imgPrincipal/"
  const enderecoImagem = imagem + nomeImagem

  $.ajax({
    type: "POST",
    url: "FuncoesJogo/adicionarLista.php",
    data: {
      nomeJogo: nomeJogo,
      nomeUsuario: nomeUsuario,
      progresso: progresso,
      nota: nota,
      enderecoImagem: enderecoImagem,
    },
    success: function () {
      buttonAdicionar.disabled = true
      const cardAviso = document.querySelector(".cardDeAviso")
      cardAviso.style.transform = ('translateX(0)')
      const h2 = cardAviso.querySelector('h2')
      h2.innerText = 'Jogo Adicionado'
      const efeito = document.getElementById("linhaEfeito")
      efeito.style.animation = "animacaoCard 3s linear"
      setTimeout(() => {
        const cardAviso = document.querySelector(".cardDeAviso")
        cardAviso.style.transform = "translateX(100%)"
      }, 3000)

      setTimeout(() => {
        location.reload()
      }, 4000)
    },
    error: function (error) {
      console.error("Erro ao enviar dados: " + error.responseText)
    },
  })
})

function removeLista() {
    const buttonRemover = document.getElementById("removeJogosLista")
    const nomeJogo = buttonRemover.getAttribute("nomeDoJogo")
    const nomeUsuario = buttonRemover.getAttribute("nomeDoUsuario")
    $.ajax({
      type: "POST",
      url: "FuncoesJogo/removerLista.php",
      data: {
        nomeJogo: nomeJogo,
        nomeUsuario: nomeUsuario
      },
      success: function () {
         buttonRemover.disabled = true
         const cardAviso = document.querySelector(".cardDeAviso")
         cardAviso.style.transform = "translateX(0)"
         const h2 = cardAviso.querySelector("h2")
         h2.innerText = "Jogo Removido"
         const efeito = document.getElementById("linhaEfeito")
         efeito.style.animation = "animacaoCard 3s linear"
         setTimeout(() => {
           const cardAviso = document.querySelector(".cardDeAviso")
           cardAviso.style.transform = "translateX(100%)"
         }, 3000)

         setTimeout(() => {
           location.reload()
         }, 4000)
      },
      error: function (error) {
        console.error("Erro ao enviar dados: " + error.responseText)
      },
    })
}
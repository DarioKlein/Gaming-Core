function validarNota(input) {
  let valor = input.value.trim() // Remova espaços em branco no início e no fim

  // Use uma expressão regular para permitir somente números inteiros de 0 a 10
  if (/^[0-9]$|^10$/.test(valor)) {
    // Se o valor for um número inteiro entre 0 e 10, mantenha-o
    input.value = valor
  } else {
    // Caso contrário, limpe o campo
    input.value = ""
  }
}

const buttonsEdit = document.querySelectorAll(".edit-button")

buttonsEdit.forEach((button) => {
  button.addEventListener("click", (event) => {
    const editarLista = document.getElementById("editarLista")
    editarLista.style.display = "flex"
    const index = event.target.getAttribute("index") // Converte para número
    const gameName = document.getElementById(`gameName${index}`).textContent
    const inputGame = document.getElementById("gameName")
    inputGame.value = gameName
  })
})

const buttonsEdit2 = document.querySelectorAll(".edit-button2")

buttonsEdit2.forEach((button) => {
  button.addEventListener("click", (event) => {
    const editarLista = document.getElementById("editarLista")
    editarLista.style.display = "flex"
    const index = event.target.getAttribute("index") // Converte para número
    const h2Element = document.getElementById(`gameName2${index}`)
    const gameName = h2Element.childNodes[1].textContent.trim()
    const inputGame = document.getElementById("gameName")
    inputGame.value = gameName
  })
})

const cancelar = document.querySelectorAll(".cancelarAcao")
cancelar.forEach((button) => {
  button.addEventListener("click", () => {
    const editarLista = document.getElementById("editarLista")
    const excluirLista = document.getElementById("excluirLista")
    editarLista.style.display = "none"
    excluirLista.style.display = "none"
  })
})

const buttonsExcluir = document.querySelectorAll(".remove-button")
buttonsExcluir.forEach((button) => {
  button.addEventListener("click", (event) => {
    const excluirLista = document.getElementById("excluirLista")
    excluirLista.style.display = "flex"
    const numerador = event.target.getAttribute("numerador")
    const gameName = document.getElementById(`gameName${numerador}`).textContent
    const removerDaLista = document.getElementById("removerDaLista")
    removerDaLista.setAttribute("data-NomeDoJogo", gameName)
  })
})

const buttonsExcluir2 = document.querySelectorAll(".remove-button2")
buttonsExcluir2.forEach((button) => {
  button.addEventListener("click", (event) => {
    const excluirLista = document.getElementById("excluirLista")
    excluirLista.style.display = "flex"
    const numerador = event.target.getAttribute("numerador")
    const gameName = document.getElementById(`gameName${numerador}`).textContent
    const removerDaLista = document.getElementById("removerDaLista")
    removerDaLista.setAttribute("data-NomeDoJogo", gameName)
  })
})

const excluirDaLista = document.getElementById("removerDaLista")
excluirDaLista.addEventListener("click", () => {
  const nomeUsuario = excluirDaLista.getAttribute("data-username")
  const nomeJogo = excluirDaLista.getAttribute("data-NomeDoJogo")

  $.ajax({
    type: "POST",
    url: "functions/removerLista.php",
    data: {
      nomeJogo: nomeJogo,
      nomeUsuario: nomeUsuario,
    },
    success: function () {
      location.reload()
    },
    error: function (error) {
      console.error("Erro ao enviar dados: " + error.responseText)
    },
  })
})

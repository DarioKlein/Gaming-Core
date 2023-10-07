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
  button.addEventListener("click", () => {
    const editarLista = document.getElementById("editarLista")
    editarLista.style.display = "flex"
  })
})

const cancelar = document.getElementById("cancelar")
cancelar.addEventListener('click', ()=> {
  const editarLista = document.getElementById("editarLista")
  editarLista.style.display = "none"
})


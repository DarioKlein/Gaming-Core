function mostrarSenha() {
  let inputPass = document.getElementById("passw")
  let btnShowPass = document.getElementById("btn-eye")

  if (inputPass.type === "password") {
    inputPass.setAttribute("type", "text")
    btnShowPass.classList.replace("bi-eye-fill", "bi-eye-slash-fill")
  } else {
    inputPass.setAttribute("type", "password")
    btnShowPass.classList.replace("bi-eye-slash-fill", "bi-eye-fill")
  }
}

function verificarCampoPreenchido() {
  const campo1 = document.getElementById("logar")
  const campo2 = document.getElementById("email")
  const campo3 = document.getElementById("passw")
  const botao = document.getElementById("enviar")

  const logarLength = campo1.value.trim().length
  const emailLength = campo2.value.trim().length
  const senhaLength = campo3.value.trim().length

  if (logarLength >= 5 && emailLength >= 15 && senhaLength >= 5) {
    // Habilita o botão se todos os campos estiverem preenchidos corretamente
    botao.disabled = false
    botao.style.backgroundColor = "#00ff80"
  } else {
    // Desabilita o botão se algum dos campos estiver vazio ou abaixo do número mínimo de caracteres
    botao.disabled = true
    botao.style.backgroundColor = "#00ff886e"
  }
}

function limitarComprimento(input, maxLength) {
  if (input.value.length > maxLength) {
    input.value = input.value.slice(0, maxLength)
  }
}

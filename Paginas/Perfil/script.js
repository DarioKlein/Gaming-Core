const editar = document.getElementById("editar")
const edit = document.getElementById("edicao-perfil")
const form = document.getElementById("form")

editar.addEventListener("click", () => {
  edit.style.display = "flex"

  // Adicione um timeout para alterar a opacidade após 1000 milissegundos (1 segundo)
  setTimeout(() => {
    form.style.opacity = "1"
  }, 50)
})

const cancelar = document.getElementById("cancelar")

cancelar.addEventListener("click", () => {
  edit.style.display = "none"

  // Adicione um timeout para alterar a opacidade após 1000 milissegundos (1 segundo)
  setTimeout(() => {
    form.style.opacity = "0"
  }, 50)
})

const icon = document.getElementById("icon-edit")

icon.addEventListener("mouseenter", () => {
  icon.src = "icons/edited.svg"
})

icon.addEventListener("mouseleave", () => {
  icon.src = "icons/edit.svg"
})


document.addEventListener("DOMContentLoaded", function () {
  const inputImagem = document.getElementById("perfil-up")
  const imagemPreview = document.getElementById("imagem-preview")
  const bannerPreview = document.getElementById("banner-preview")
  const inputBanner = document.getElementById("banner-up")

  
inputBanner.addEventListener("change", function () {
  const arquivo2 = inputBanner.files[0]

  if (arquivo2) {
    const leitor2 = new FileReader()

    leitor2.onload = function (e) {
      bannerPreview.src = e.target.result
    }

    leitor2.readAsDataURL(arquivo2)
  }
})

  inputImagem.addEventListener("change", function () {
    const arquivo = inputImagem.files[0]

    if (arquivo) {
      const leitor = new FileReader()

      leitor.onload = function (e) {
        imagemPreview.style.backgroundImage = `url('${e.target.result}')`
        imagemPreview.style.backgroundSize = "cover" // Para ajustar o tamanho da imagem
      }

      leitor.readAsDataURL(arquivo)
    }
  })
})

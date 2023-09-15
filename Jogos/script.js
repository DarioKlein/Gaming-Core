// Filtro

document.addEventListener("DOMContentLoaded", () => {
  const dropdowns = document.querySelectorAll(".dropdown")

  dropdowns.forEach((dropdown) => {
    const select = dropdown.querySelector(".select")
    const caret = dropdown.querySelector(".caret")
    const menu = dropdown.querySelector(".menu")
    const options = dropdown.querySelectorAll(".menu li")
    const selected = dropdown.querySelector(".selected")

    select.addEventListener("click", () => {
      select.classList.toggle("select-clicked")
      caret.classList.toggle("caret-rotate")
      menu.classList.toggle("menu-open")
    })

    options.forEach((option) => {
      option.addEventListener("click", () => {
        selected.innerText = option.innerText
        select.classList.remove("select-clicked")
        caret.classList.remove("caret-rotate")
        menu.classList.remove("menu-open")
        options.forEach((option) => option.classList.remove("active"))
        option.classList.add("active")
      })
    })
  })
})

function menuToggle() {
  const toggleMenu = document.querySelector(".menu-dropdown")
  toggleMenu.classList.toggle("active")
}

function favoritar(id) {
  event.preventDefault()
  const img = document.getElementById("imgFav" + id)
  const imgMobile = document.getElementById("imgMobileFav" + id)

  // Verifica se a imagem atual é a imagem original ou a imagem favoritada
  if (img.src.includes("extra-jogos/favpreenchido.svg" || imgMobile.src.includes("extra-jogos/favpreenchido.svg" ))) {
    // Se a imagem atual for a imagem favoritada, troque para a imagem original com efeito de opacidade
    img.style.opacity = 0 // Define a opacidade como 0 (invisível)
    setTimeout(function () {
      img.src = "extra-jogos/fav.svg"
      imgMobile.src = "extra-jogos/fav.svg" // Substitua "imagem-original.svg" pelo caminho da sua imagem original
      img.style.opacity = 1 // Define a opacidade de volta para 1 (totalmente visível)
      imgMobile.style.opacity = 1 // Define a opacidade de volta para 1 (totalmente visível)
    }, 300) // Tempo em milissegundos para a troca com efeito (ajuste conforme desejado)
  } else {
    // Caso contrário, troque para a imagem favoritada com efeito de opacidade
    img.style.opacity = 0 // Define a opacidade como 0 (invisível)
    imgMobile.style.opacity = 0 // Define a opacidade como 0 (invisível)
    setTimeout(function () {
      img.src = "extra-jogos/favpreenchido.svg"
      imgMobile.src = "extra-jogos/favpreenchido.svg"
      img.style.opacity = 1 // Define a opacidade de volta para 1 (totalmente visível)
      imgMobile.style.opacity = 1 // Define a opacidade de volta para 1 (totalmente visível)
    }, 300) // Tempo em milissegundos para a troca com efeito (ajuste conforme desejado)
  }
}

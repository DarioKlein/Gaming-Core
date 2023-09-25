const editImg = document.getElementById("edit-img")

editImg.addEventListener("mouseenter", () => {
  editImg.src = "icons/edited.svg"
})

editImg.addEventListener("mouseleave", () => {
  editImg.src = "icons/edit.svg"
})

const editImg2 = document.getElementById("edit-img2")

editImg2.addEventListener("mouseenter", () => {
  editImg2.src = "icons/edited.svg"
})

editImg2.addEventListener("mouseleave", () => {
  editImg2.src = "icons/edit.svg"
})

const editImg3 = document.getElementById("edit-img3")

editImg3.addEventListener("mouseenter", () => {
  editImg3.src = "icons/edited.svg"
})

editImg3.addEventListener("mouseleave", () => {
  editImg3.src = "icons/edit.svg"
})

function abrir(id) {
  const button = document.getElementById(id)
  button.style.display = "flex"
}

function fechar(id) {
  const button = document.getElementById(id)
  button.style.display = "none"
}

const banner = document.getElementById("banner-edit")
const previewBanner = document.getElementById("previewBanner")

banner.addEventListener("change", function () {
  if (banner.files && banner.files[0]) {
    const reader = new FileReader()

    reader.onload = function (e) {
      previewBanner.src = e.target.result
    }

    reader.readAsDataURL(banner.files[0])
  }
})


const perfil = document.getElementById("perfil-edit")
const previewPerfil = document.getElementById("perfil-imgs")

perfil.addEventListener("change", function () {
  if (perfil.files && perfil.files[0]) {
    const reader = new FileReader()

    reader.onload = function (e) {
      previewPerfil.src = e.target.result
    }

    reader.readAsDataURL(perfil.files[0])
  }
})

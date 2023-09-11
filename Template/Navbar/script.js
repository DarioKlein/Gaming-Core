class MobileNavbar {
  constructor(mobileMenu, paginas, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu)
    this.navList = document.querySelector(paginas)
    this.navLinks = document.querySelectorAll(navLinks)
    this.activeClass = "active"

    this.handleClick = this.handleClick.bind(this)
  }

  animateLinks() {
    this.navLinks.forEach((link, index) => {
      const delay = index * 0.2
      link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${delay}s`)
    })
  }

  handleClick() {
    this.navList.classList.toggle(this.activeClass)
    this.mobileMenu.classList.toggle(this.activeClass)
    this.animateLinks()
  }

  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick)
  }

  init() {
    if (this.mobileMenu) {
      this.addClickEvent()
    }
    return this
  }
}

const mobileNavbar = new MobileNavbar(".mobile-menu", ".paginas", ".paginas li")
mobileNavbar.init()

// DropDown - Login

function menuToggle() {
  const toggleMenu = document.querySelector(".menu-dropdown")
  toggleMenu.classList.toggle("active")
}

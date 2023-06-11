const menu = document.querySelector(".menu");
const navMenu = document.querySelector(".nav-menu");

const toogleMenu = () => {
    navMenu.classList.toggle("show");
};

menu.addEventListener("click", () => toogleMenu());
navMenu.addEventListener("click", () => toogleMenu());

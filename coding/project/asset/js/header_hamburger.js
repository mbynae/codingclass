const btnHam = document.querySelector(".ham_menu");
const btnMenu = document.querySelector(".header__menu");
const btnMenuList = btnMenu.querySelectorAll("ul li a")

btnHam.addEventListener("click", () => {
    btnHam.classList.toggle("active");
    btnMenu.classList.toggle("active");
});
document.querySelectorAll(".header__menu li a").forEach(li => {
    li.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(li.getAttribute("href")).scrollIntoView({
            behavior: "smooth"  //부드럽게 움직이도록 해줌
        });
    });
});
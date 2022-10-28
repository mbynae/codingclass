//로그인창 닫기
const login = document.querySelector(".header__menu .login");
const loginpopup = document.querySelector(".login__popup");
const closeBtn = document.querySelector(".close_btn");

login.addEventListener("click", (e) => {
    e.preventDefault();
    loginpopup.style.display = "block";
    document.querySelector("body").classList.add("scrollStop");
});
closeBtn.addEventListener("click", () => {
    loginpopup.style.display = "none";
    document.querySelector("body").classList.remove("scrollStop");
});

// 헤더바 색깔 조절
const headerType = document.getElementById("headerType");
window.addEventListener("scroll", () => {
    let scrollTop = window.scrollY;

    if (scrollTop > 0) {
        headerType.style.backgroundColor = "#fff";
        headerType.style.borderBottom = "1px solid #f5f5f5";
    } else {
        headerType.style.backgroundColor = "transparent";
        headerType.style.borderBottom = "0";
    }
});

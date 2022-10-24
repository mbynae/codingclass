
// 탭메뉴 버튼
const tabMenuId = document.querySelector(".id");
const tabMenuPass = document.querySelector(".pass");
const searchIDcontents = document.querySelector(".search_IDcontents");
const searchPASScontents = document.querySelector(".search_PASScontents");


tabMenuId.addEventListener("click", () => {
    tabMenuId.classList.add("active");
    tabMenuPass.classList.remove("active");
    searchIDcontents.classList.remove("close");
    searchPASScontents.classList.add("close");

    method.forEach(e => {
        e.classList.remove("method_choice");
    });

    ConfirmBtn = ConfirmBtn.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]|[a-z]/gi, "").trim();
    certifyConfirm.innerHTML = ConfirmBtn;
});

tabMenuPass.addEventListener("click", () => {
    tabMenuPass.classList.add("active");
    tabMenuId.classList.remove("active");
    searchPASScontents.classList.remove("close");
    searchIDcontents.classList.add("close");

    method.forEach(e => {
        e.classList.remove("method_choice");
    });

    ConfirmBtn = ConfirmBtn.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]|[a-z]/gi, "").trim();
    certifyConfirm.innerHTML = ConfirmBtn;
});



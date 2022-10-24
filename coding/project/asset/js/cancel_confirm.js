const boardBtn = document.querySelector(".board_btn");

boardBtn.addEventListener("click", (e) => {
    e.preventDefault();
    boardBtn.alert("정말 삭제 할래?");
});
const bottomBTn = document.querySelector(".bottomBTn a");

bottomBTn.addEventListener("click", (e) => {
    e.preventDefault();
    window.scroll({left: 0, top: 0, behavior: "smooth"});
});
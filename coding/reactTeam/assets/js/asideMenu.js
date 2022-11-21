/** @format */

const left = document.querySelector(".left");
const aside = document.getElementById("aside");
const regionBox = document.querySelector(".region_box");
const headerImg = document.querySelector("#header img");

left.addEventListener("mouseenter", (e) => {
    aside.classList.remove("active");
    regionBox.style.left = "0";
    headerImg.style.transform = "translate(120px, 10px)";
    headerImg.style.transition = "all 0.4s 0.09s";
});
left.addEventListener("mouseleave", (e) => {
    aside.classList.add("active");
    regionBox.style.left = "-15%";
    headerImg.style.transform = "translate(0, 10px)";
    headerImg.style.transition = "all 0.2s";
});

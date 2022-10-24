const mainBanner = document.querySelector("main_banner");
const mainImg = document.querySelector("main_img");
const slider = document.querySelectorAll(".slider");

let currentIndex = 0;
let sliderCount = slider.length;

setInterval(() => {
    let nextIndex = (currentIndex + 1) % sliderCount;

    slider[currentIndex].style.opacity = "0";
    slider[nextIndex].style.opacity = "1";

    currentIndex = nextIndex;
}, 2000);
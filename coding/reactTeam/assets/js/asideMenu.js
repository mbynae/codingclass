/** @format */

const left = document.querySelector(".left");
const aside = document.getElementById("aside");
const regionBox = document.querySelector(".region_box");
const headerImg = document.querySelector("#header img");
const scroller = document.querySelector(".scroll");

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

window.addEventListener("scroll", () => {
    let scrollTop = window.scrollY;
    // scroller.innerText = Math.round(scrollTop);
    headerSearchBar(scrollTop);
});

function headerSearchBar(scrollTop) {
    const headerSearch = document.getElementById("header_search");
    const roomSearch = document.querySelector("#bannerType .roomSearch");
    console.log(roomSearch.offsetTop);

    if (scrollTop >= roomSearch.offsetTop * 3) {
        headerSearch.classList.remove("close");
    } else {
        headerSearch.classList.add("close");
    }
}

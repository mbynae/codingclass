// const menubar = document.querySelectorAll(".header_menubar nav > ul > li > a");
// const submenu = document.querySelector(".submenu");

// $('header_menubar').mouseenter(function(){
//     $('submenu"').slideDown(800)
// })

// $('header_menubar').mouseleave(function(){
//     $('submenu').stop().slideUp(500)
// })


// sliderEffect
const sliderWrap = document.querySelector(".slider_wrap");
const slider_inner = document.querySelector(".slider_inner");
const slider = document.querySelectorAll(".slider");

let currentIndex = 0,
    sliderNum = slider.length,
    sliderHeight = sliderWrap.offsetHeight,
    sliderClone = slider_inner.firstElementChild.cloneNode(true);
    slider_inner.appendChild(sliderClone);

function sliderEffect(){
    currentIndex++;

        slider_inner.style.transition = "all 0.6s";
        slider_inner.style.transform = "translateY(-"+ sliderHeight*currentIndex +"px)";

        setTimeout(() => {
            if(currentIndex == sliderNum){
                slider_inner.style.transition = "0s";
                slider_inner.style.transform = "translateY(0px)";
               
                currentIndex = 0;
            }
    }, 600);

}
setInterval(sliderEffect, 3000);


// tabmenu
const tabText = document.querySelectorAll(".tab_text span");
const left = document.querySelector(".left");
const right = document.querySelector(".right");
const noticeTextBox = document.querySelector(".notice_textBox");
const noticeGallery = document.querySelector(".notice_gallery");

left.addEventListener("click", (e) => {
    right.classList.remove("active");
    left.classList.add("active");
    noticeTextBox.classList.remove("close")
    noticeGallery.classList.add("close")
});
right.addEventListener("click", (e) => {
    right.classList.add("active");
    left.classList.remove("active");
    noticeTextBox.classList.add("close")
    noticeGallery.classList.remove("close")
});
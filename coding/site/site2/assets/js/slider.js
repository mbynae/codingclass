const sliderWrap = document.querySelector(".slider__wrap");
const sliderImg = document.querySelector(".slider__img");       
const sliderInner = document.querySelector(".slider__inner");   
const slider = document.querySelectorAll(".slider");  
const sliderBtnPrev = document.querySelector(".buttonL");       //왼쪽 버튼
const sliderBtnNext = document.querySelector(".buttonR");       //오른쪽 버튼          

let currentIndex = 0;                                               
let sliderCount = slider.length;                                
let sliderWidth = sliderImg.offsetWidth                            
let sliderClone = sliderInner.firstElementChild.cloneNode(true);   
sliderInner.appendChild(sliderClone);                               

function sliderEffect(){
    currentIndex++
    sliderInner.style.transition = "all 0.6s";

    sliderInner.style.transform = "translateX(-"+ sliderWidth * currentIndex +"px)";
    
    if(currentIndex == sliderCount){
        setTimeout(() => {
            sliderInner.style.transition = "0s";
            sliderInner.style.transform = "translateX(0px)";
        }, 700);

        currentIndex = 0;
    }
};
setInterval(sliderEffect, 2000);


function gotoSlider(num){
    sliderInner.style.transition = "all 400ms";
    sliderInner.style.transform = "translateX(-"+ sliderWidth * num + "px)";
    currentIndex = num;
}


sliderBtnPrev.addEventListener("click", () => {
    let prevIndex = (currentIndex + (sliderCount-1)) % sliderCount;
    gotoSlider(prevIndex);
});

sliderBtnNext.addEventListener("click", () => {
    let nextIndex = (currentIndex + 1) % sliderCount;
    gotoSlider(nextIndex);
});



//스크롤 이동
document.querySelectorAll(".header__menu li a").forEach(li => {
    li.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(li.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
        });
    });
});
// 01 HTML/CSS 디자인 구성
// 02 클릭한 카드 뒤집기
// 03 두개의 카드 뒤집기 확인하기(첫번째, 두번째)

const memoryWrap = document.querySelector(".memory__wrap");
const memoryCards = memoryWrap.querySelectorAll(".cards li");
const memoryStartBtn = memoryWrap.querySelector(".memory__startBtn button");
const memoryTimer = document.querySelector(".memory__timer__sec em");
const loadingBox = document.querySelector(".loading__box");

let cardOne, cardTwo;
let disableDeck = false;
let matchedCard = 0;
let timer = "";

let sound = ["../audio/match.mp3", "../audio/unmatch.mp3", "../audio/success.mp3"];
let soundMatch = new Audio(sound[0]);
let soundUnmatch = new Audio(sound[0]);
let soundUnsuccess = new Audio(sound[0]);

// 카드 뒤집기
function flipCard(e) {
    let clickedCard = e.target;

    if (clickedCard !== cardOne && !disableDeck) {
        clickedCard.classList.add("flip");

        if (!cardOne) {
            return (cardOne = clickedCard);
        }
        cardTwo = clickedCard;
        disableDeck = true;

        let cardOneImg = cardOne.querySelector(".back img").src;
        let cardTwoImg = cardTwo.querySelector(".back img").src;

        matchCards(cardOneImg, cardTwoImg);
    }
}

// 카드 확인(두개의 이미지 비교)
function matchCards(img1, img2) {
    if (img1 == img2) {
        //같을 경우
        matchedCard++;

        if (matchedCard == 8) {
            memoryEnd();
        }

        cardOne.removeEventListener("click", flipCard);
        cardTwo.removeEventListener("click", flipCard);
        cardOne = cardTwo = "";
        disableDeck = false;
        soundmatch.play();
    } else {
        // 일치하지 않는 경우(틀린 음악, 이미지가 좌우로 흔들림)
        setTimeout(() => {
            cardOne.classList.add("shakeX");
            cardTwo.classList.add("shakeX");
        }, 500);

        setTimeout(() => {
            cardOne.classList.remove("shakeX", "flip");
            cardTwo.classList.remove("shakeX", "flip");
            cardOne = cardTwo = "";
            disableDeck = false;
        }, 1600);

        soundUnmatch.play();
    }
}

// 카드 섞기
function shuffledCard() {
    cardOne = cardTwo = "";
    disableDeck = false;
    let matchedCard = 0;
    let arr = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8];
    let result = arr.sort(() => (Math.random() > 0.5 ? 1 : -1));

    memoryCards.forEach((card, index) => {
        card.classList.remove("flip");

        setTimeout(() => {
            card.classList.add("flip");
        }, 200 * index);

        setTimeout(() => {
            card.classList.remove("flip");
        }, 8000);

        let imgTag = card.querySelector(".back img");
        imgTag.src = `../assets/memory/memoryCard0${arr[index]}.png`;
    });
}

// 카드 클릭
memoryCards.forEach((card) => {
    card.addEventListener("click", flipCard);
});

// 버튼 클릭 시 스타트
memoryStartBtn.addEventListener("click", () => {
    loadingBox.classList.add("close");
    shuffledCard();
    preTimeStart();
    memoryTimer.innerText = "08";
});


// 준비 시간 출력
function preTimeStart() {
    let pretime = 8;

    // 시간 설정하기
    function reduceTime() {
        pretime--;
        MemoryTime();
    }

    timer = setInterval(reduceTime, 1000);

    // 시간 표시하기
    function MemoryTime() {
        if (pretime <= 0) {
            memoryTimer.innerText = "00";
            clearInterval(timer);
            setTimeout(memoryTimeStart, 200);
        } else if (pretime >= 0 && pretime < 10) {
            memoryTimer.innerText = "0" + pretime;
        } else {
            memoryTimer.innerText = pretime;
        }
    }
}


// 게임 스타트 시간
function memoryTimeStart() {
    let pretime = 10;

    // 시간 설정하기
    function reduceTime() {
        pretime--;
        MemoryTime();
    }

    timer = setInterval(reduceTime, 1000);

    // 시간 표시하기
    function MemoryTime() {
        if (pretime <= 0 || matchedCard == 8) {
            memoryTimer.innerText = "00";
            clearInterval(timer);
            memoryEnd();
        } else if (pretime >= 0 && pretime < 10) {
            memoryTimer.innerText = "0" + pretime;
        } else {
            memoryTimer.innerText = pretime;
        }
    }
}



const memoryAlert = document.querySelector(".memory__alert");
const lowScore = document.querySelector(".lowScore");
const highScore = document.querySelector(".highScore");
const peferctScore = document.querySelector(".peferctScore");
const scoreClose = document.querySelector(".scoreClose");

let memoryScore = document.querySelector(".memory__alert__inner > span em");

// 종료시 알람
function memoryEnd(){
    memoryAlert.classList.remove("close");
    memoryScore.innerText = matchedCard;

    if(matchedCard <= 4){
        lowScore.classList.remove("close");
    } else if(matchedCard > 4 && matchedCard <= 7){
        highScore.classList.remove("close");
    } else if(matchedCard == 8){
        peferctScore.classList.remove("close");
    }
}

// 알람창 닫기
scoreClose.addEventListener("click", () => {
    memoryAlert.classList.add("close");
    lowScore.classList.add("close");
    highScore.classList.add("close");
    highScore.classList.add("close");
});
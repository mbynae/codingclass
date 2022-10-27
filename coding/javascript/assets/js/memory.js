// 01 HTML/CSS 디자인 구성
// 02 클릭한 카드 뒤집기
// 03 두개의 카드 뒤집기 확인하기(첫번째, 두번째)

const memoryWrap = document.querySelector(".memory__wrap");
const memoryCards = memoryWrap.querySelectorAll(".cards li");

let cardOne, cardTwo;
let disableDeck = false;
let matchedCard = 0;

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
            alert("게임 오버");
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
shuffledCard();

// 카드 클릭
memoryCards.forEach((card) => {
    card.addEventListener("click", flipCard);
});

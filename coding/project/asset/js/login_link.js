// <공통 선택자>
const loginpopupLoginBtn = document.querySelector(".login");
const loginPopup = document.querySelector(".login__popup");
const agreePopup = document.querySelector(".agree__popup");
const joinPopup = document.querySelector(".join__popup");

const popupArray = [
    loginPopup,
    agreePopup,
    joinPopup
];


// <로그인 팝업창>

// 로그인 눌렀을 시 활성화
loginpopupLoginBtn.addEventListener("click", () => {
    loginPopup.classList.remove("close");
});


// // 회원가입 눌렀을 시 약관 동의 창 이동
// const loginpopupjoinBtn = document.querySelector(".loginpopup_joinBtn");

// loginpopupjoinBtn.addEventListener("click", () => {
//     loginPopup.classList.add("close");
//     agreePopup.classList.remove("close");
// });



// <약관 동의 팝업창>
const agree_cancelBtn = document.querySelector(".cancel_btn");

// 취소 클릭 시 로그인 창으로 이동
// agree_cancelBtn.addEventListener("click", () => {
//     agreePopup.classList.add("close");
//     loginPopup.classList.remove("close");

//     agree_checkAll.checked = false;
//     aggre_checkArray.forEach((e, i, a) => {
//         a[i].checked = false;
//     })
// });

//확인 클릭 시 회원가입창으로 이동
// function confirmButton(){
//     const btn = document.querySelector(".confirm_btn");
//     let btnContents = btn.innerText;

//     if(aggre_checkArray[0].checked == true && aggre_checkArray[1].checked ){
//         btn.addEventListener("click", () => {
//             // agreePopup.classList.add("close");
//             // joinPopup.classList.remove("close");
//             alert("실행")
//         });
//     }
// };
// confirmButton();


// <닫기 버튼>
// close_btn.forEach((e, i, a) => {
//     // e.addEventListener("click", () => {
//         //     popupArray[i].classList.add("close");
//         // });
// });


    


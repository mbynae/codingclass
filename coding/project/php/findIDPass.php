<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 정보 입력 페이지</title>

    <!-- 공통 CSS -->
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">
    <link rel="stylesheet" href="../asset/css/login/idPassCommon.css">

    <!-- 아이디찾기 CSS -->
    <link rel="stylesheet" href="../asset/css/login/findID.css">

    <style>
        /* .join__inner {
            margin: 0 auto;
        }
        .join__inner > h2 {
            margin-bottom: 20px !important;
        } */
    </style>

</head>
<body>
<?php include "../include/header.php"?>
    <div class="login__popup score">
        <div class="login__inner">
            <div class="login__header">
                <h3>I.D/P.W 찾기</h3>
            </div>
            <div class="tab_menu">
                <span class="id active">ID</span> <em>|</em> <span class="pass">Password</span>
                <div class="search_IDcontents negative_mb18">
                    <h4 class="user_search">아이디 찾기</h4>
                    <div class="certify_method">
                        <p>원하시는 인증 방법을 선택해주세요.</p>
                        <div class="search_choice">
                            <figure class="method email_choice">
                                <img src="../asset/img/email_logo.svg" alt="이메일 로고">
                               <figcaption>이메일 인증</figcaption> 
                            </figure>
                            <figure class="method phone_choice">
                                <img src="../asset/img/phone_logo.svg" alt="핸드폰 로고">
                               <figcaption>핸드폰 인증</figcaption> 
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="search_PASScontents negative_mb18 close">
                    <h4 class="user_search">비밀번호 찾기</h4>
                    <div class="certify_method">
                        <p>원하시는 인증 방법을 선택해주세요.</p>
                        <div class="search_choice">
                            <figure class="method email_choice">
                                <img src="../asset/img/email_logo.svg" alt="이메일 로고">
                               <figcaption>이메일 인증</figcaption> 
                            </figure>
                            <figure class="method phone_choice">
                                <img src="../asset/img/phone_logo.svg" alt="핸드폰 로고">
                               <figcaption>핸드폰 인증</figcaption> 
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="certify_confirm">선택완료</div>
            </div>
            <div class="close_btn"><a href="main.php">
                <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="#ffffff"/>
                    <path d="M5.33334 4.66675L14.6667 15.3334" stroke="#6CC4B3" stroke-linecap="round"/>
                    <path d="M14.6667 4.66675L5.33333 15.3334" stroke="#6CC4B3" stroke-linecap="round"/>
                </svg>
            </a></div>
        </div>
    </div>

    <!-- 모달 및 탭메뉴 -->
    <script src="../asset/js/tab_modal.js"></script>

    <script>
        // 공통 선택자
        const method = document.querySelectorAll(".method");
        const certifyConfirm = document.querySelector(".certify_confirm");
        let ConfirmBtn = certifyConfirm.innerText;



        // 아이디 찾기 선택
        const IDemailChoice = document.querySelector(".search_IDcontents .email_choice");
        const IDphoneChoice = document.querySelector(".search_IDcontents .phone_choice");
        const IDemailLink = "<a href='findID_email.php' type='sumbmit'>"
        const IDphoneLink = "<a href='findID_phone.php' type='sumbmit'>"

        function searchID(){
            IDemailChoice.addEventListener("click", () => {
                IDemailChoice.classList.add("method_choice");
                IDphoneChoice.classList.remove("method_choice");
                
                ConfirmBtn = ConfirmBtn.replace(IDphoneLink, "");

                if(ConfirmBtn.indexOf(IDemailLink) == -1){
                    ConfirmBtn = IDemailLink + ConfirmBtn + "</a>";
                    certifyConfirm.innerHTML = ConfirmBtn;
                } else {
                    ConfirmBtn = certifyConfirm.innerText;
                }
            });

            IDphoneChoice.addEventListener("click", () => {
                IDphoneChoice.classList.add("method_choice");
                IDemailChoice.classList.remove("method_choice");

                    ConfirmBtn = ConfirmBtn.replace(IDemailLink, "");  
                    
                    if(ConfirmBtn.indexOf(IDphoneLink) == -1){
                        ConfirmBtn = IDphoneLink + ConfirmBtn + "</a>";
                        certifyConfirm.innerHTML = ConfirmBtn;
                    } else {
                        ConfirmBtn = certifyConfirm.innerText;
                    }
            });
        };
        searchID();


        // 비밀번호 찾기 선택
        const PASSemailChoice = document.querySelector(".search_PASScontents .email_choice");
        const PASSphoneChoice = document.querySelector(".search_PASScontents .phone_choice");
        const PASSemailLink = "<a href='findPW_email.php' type='sumbmit'>"
        const PASSphoneLink = "<a href='findPW_phone.php' type='sumbmit'>"

        function searchPass(){
            PASSemailChoice.addEventListener("click", () => {
                PASSemailChoice.classList.add("method_choice");
                PASSphoneChoice.classList.remove("method_choice");
                
                ConfirmBtn = ConfirmBtn.replace(PASSphoneLink, "");

                if(ConfirmBtn.indexOf(PASSemailLink) == -1){
                    ConfirmBtn = PASSemailLink + ConfirmBtn + "</a>";
                    certifyConfirm.innerHTML = ConfirmBtn;
                } else {
                    ConfirmBtn = certifyConfirm.innerText;
                }
            });

            PASSphoneChoice.addEventListener("click", () => {
                PASSphoneChoice.classList.add("method_choice");
                PASSemailChoice.classList.remove("method_choice");

                    ConfirmBtn = ConfirmBtn.replace(PASSemailLink, "");  
                    
                    if(ConfirmBtn.indexOf(PASSphoneLink) == -1){
                        ConfirmBtn = PASSphoneLink + ConfirmBtn + "</a>";
                        certifyConfirm.innerHTML = ConfirmBtn;
                    } else {
                        ConfirmBtn = certifyConfirm.innerText;
                    }
            });
        };
        searchPass();


    </script>
</body>
</html>
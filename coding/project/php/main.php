<?php 

    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>어서오세요 winimal에</title>

    <!-- 공통 CSS -->
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">
    <link rel="stylesheet" href="../asset/css/header.css">

    <!-- 메인 CSS -->
    <link rel="stylesheet" href="../asset/css/main/mainBanner.css">
    <link rel="stylesheet" href="../asset/css/main/mainHospital.css">
    <link rel="stylesheet" href="../asset/css/main/mainDisease.css">
    <link rel="stylesheet" href="../asset/css/main/mainparrallex.css">

    <link rel="stylesheet" href="../asset/css/login/idPassCommon.css">

    <link rel="stylesheet" href="../asset/css/login/login.css">

    <style>
        .reveal {
            opacity: 0;
            transform: translateY(100px);
            transition: all 1s ease-in-out;
        }
        .revealDel1 {
            transition: all 1s 0.3s ease-in-out;
        }
        .reveal.show {
            opacity: 1;
            transform: translateY(0);
        }
        .reveal2 {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s ease-in-out;
        }
        .reveal2.show {
            opacity: 1;
            transform: translateY(0);
        }
        .revealDel2 {
            transition: all 1s 0.9s ease-in-out;
        }
    </style>
</head>
<body>
<?php include "../include/header.php"?>

    <section id="main__banner">
        <div class="bannerText__box">
            <div class="bannerText">
                <p>
                    <span>위니멀</span>은 언제나 <span>당신</span>과 함께합니다.<br>
                    언제든지 환영해요.
                </p>
            </div>
        </div>
        <div class="bannerSearch__box">
            <div class="searchBox">
                <form action="" method="POST" class="searchBox__form">
                    <div class="searchBox_inner">
                        <button class="searchBtn">
                            <img src="../asset/img/searchBtn.svg" alt="찾기 버튼">
                        </button>
                        <input type="text" name="search" id="search" placeholder="궁금하신 내용을 검색해주세요." required>
                    </div>
                    <ul class="searchTag__box">
                        <li class="searchTag"><a href="#">#중성화</a></li>
                        <li class="searchTag"><a href="#">#유행병</a></li>
                        <li class="searchTag"><a href="#">#겨울</a></li>
                        <li class="searchTag"><a href="#">#동물병원</a></li>
                    </ul>
                </form>
            </div>
        </div>
    </section>

    <section id="main_hospital">
        <div class="hospi__box container">
            <div class="hospi__title reveal">
                <div class="hospi__titleCont">
                    <span>A.Hospital</span>
                    <p>
                        혹시 전문 동물 병원에 대해
                        알아보고 싶으신가요??
                    </p>
                    <a href="#">더 알아보기</a>
                </div>
            </div>
            <div class="hospi__contents">
                <div class="hospi__card">
                    <div class="hospi__text">
                        <div class="hospi__textCont">
                            <span>
                                <a href="#"><img src="../asset/img/hospitalCard_icon.svg" alt=""></a>
                                <h4>디오빌 동물병원</h4>
                            </span>
                            <address>경기도 시흥시 배곧로 4820</address>
                            <p>
                                디오빌 동물 병원은 여러가지에 진찰을 하고 있으며, 미용 및 다양한 애견 용품을 팔고 있는 동물 병원입니다.
                            </p> 
                        </div>
                    </div>
                    <div class="hospi__map">
                        <!-- 나중에 api로 처리할 것 -->
                        <img src="../asset/img/temporary_map1.jpg" alt="">
                    </div>
                </div>
                <div class="hospi__card">
                    <div class="hospi__map">
                        <!-- 나중에 api로 처리할 것 -->
                        <img src="../asset/img/temporary_map2.jpg" alt="">
                    </div>
                    <div class="hospi__text">
                        <div class="hospi__textCont">
                            <span>
                                <a href="#"><img src="../asset/img/hospitalCard_icon.svg" alt=""></a>
                                <h4>배곧도담 동물병원</h4>
                            </span>
                            <address>경기도 시흥시 배곧 1로 47-11</address>
                            <p>
                                배곧도담동물병원은 수술 및 예방 접종 전문 병원입니다. 또한 노령견을 전문으로 하는 동물 병원 입니다.
                            </p> 
                        </div>
                    </div>
                </div>
                <div class="hospi__card">
                    <div class="hospi__text">
                        <div class="hospi__textCont">
                            <span>
                                <a href="#"><img src="../asset/img/hospitalCard_icon.svg" alt=""></a>
                                <h4>온누리 종합 동물 병원</h4>
                            </span>
                            <address>서울 영등포구 이우로 222</address>
                            <p>
                                온누리 종합 동물 병원은 특수한 진료를 위주로 맡고있으며,리뷰도 상당히 좋은 평가 위주로 코멘트가 달리고 있습니다.
                            </p> 
                        </div>
                    </div>
                    <div class="hospi__map">
                        <!-- 나중에 api로 처리할 것 -->
                        <img src="../asset/img/temporary_map3.jpg" alt="">
                    </div>
                </div>
                <div class="hospi__card">
                    <div class="hospi__map">
                        <!-- 나중에 api로 처리할 것 -->
                        <img src="../asset/img/temporary_map4.jpg" alt="">
                    </div>
                    <div class="hospi__text">
                        <div class="hospi__textCont">
                            <span>
                                <a href="#"><img src="../asset/img/hospitalCard_icon.svg" alt=""></a>
                                <h4>미소로 동물병원</h4>
                            </span>
                            <address>경기도 수원시 탑동 521</address>
                            <p>
                                미소로 동물 병원은 주로 슬개골, 중성화 등등수술 위주로 운영하는 동물 병원입니다.
                            </p> 
                        </div>
                    </div>
                </div>
                <div class="hospi__card">
                    <div class="hospi__text">
                        <div class="hospi__textCont">
                            <span>
                                <a href="#"><img src="../asset/img/hospitalCard_icon.svg" alt=""></a>
                                <h4>위드동물병원</h4>
                            </span>
                            <address>경기 시흥시 정왕대로 2111</address>
                            <p>
                                위드동물병원은 마이크로(최소 절개)중성화 전문 특화병원입니다. 많은 분들이 주로 이 병원에서 수술을 받으셨습니다.
                            </p> 
                        </div>
                    </div>
                    <div class="hospi__map">
                        <!-- 나중에 api로 처리할 것 -->
                        <img src="../asset/img/temporary_map5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="main_disease">
        <div class="disease_box container">
            <div class="disease__title reveal">
                <div class="disease__titleCont">
                    <span>disease</span>
                    <p>
                        우리 반려동물들이 조심해야 할
                        다양한 질병들을 알려드릴게요.
                    </p>
                    <a href="#">더 알아보기</a>
                </div>
            </div>
            <div class="disease__contents1">
                <div class="disease__card">
                    <div class="disease__cardConts">
                        <span></span>
                        <div>
                            <h4>슬개골</h4>
                            <p>
                                강아지 슬개골 탈구, 아주 흔한 질병이지만 한 번 걸리면 다시 이전의 상태로 돌아가기 어려운 진행성 질환이에요. 그래서 꾸준한 관리가 필수적입니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="disease__card">
                    <div class="disease__cardConts">
                        <span></span>
                        <div>
                            <h4>신부전</h4>
                            <p>
                                강아지의 신체는 약 60-70%가 수분(체액)으로 이뤄져 있는데요. 신장이 제대로 기능을 해야 몸속에 있는 수분 속의 전해질 농도가 정상을 유지할 수 있어요.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="disease__card">
                    <div class="disease__cardConts">
                        <span></span>
                        <div>
                            <h4>치매</h4>
                            <p>
                                사람의 알츠하이머성 치매와 유사해 주인을 몰라볼뿐 아니라 방향감각 상실, 밤과 낮의 수면 패턴 변화, 잦은 배변실수, 식욕변화 등 증상을 보인다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="disease__card">
                    <div class="disease__cardConts">
                        <span></span>
                        <div>
                            <h4>당뇨</h4>
                            <p>
                                구토, 식욕감퇴, 체력저하 소변을 보기 힘들어 함, 소변량 감소 등의 증상이 나타나면 당뇨를 의심해봐야합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="disease__contents2">
                <div class="disease2__Title">
                    <span>Disease</span>
                    <p>가볍게 최근 유행병들을 살펴보세요!</p>
                </div>
                <div class="disease__sliderBox">
                    <div class="slider__category">CATEGORY</div>
                    <div class="slider__Box">
                        <div class="slider__inner">
                            <div class="slider">
                                <div class="slider__contents">
                                    <div>CATEGORY</div>
                                    <p>Disease</p>
                                    <a href="#">MORE</a>
                                </div>
                            </div>
                            <div class="slider">
                                <div class="slider__contents">
                                    <div>CATEGORY</div>
                                    <p>Disease</p>
                                    <a href="#">MORE</a>
                                </div>
                            </div>
                            <div class="slider">
                                <div class="slider__contents">
                                    <div>CATEGORY</div>
                                    <p>Disease</p>
                                    <a href="#">MORE</a>
                                </div>
                            </div>
                            <div class="slider">
                                <div class="slider__contents">
                                    <div>CATEGORY</div>
                                    <p>Disease</p>
                                    <a href="#">MORE</a>
                                </div>
                            </div>
                            <div class="slider">
                                <div class="slider__contents">
                                    <div>CATEGORY</div>
                                    <p>Disease</p>
                                    <a href="#">MORE</a>
                                </div>
                            </div>
                            <div class="slider">
                                <div class="slider__contents">
                                    <div>CATEGORY</div>
                                    <p>Disease</p>
                                    <a href="#">MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <h3>winimal Login</h3>
            </div>
            <div class="login__welcome">
                <h3>어서오세요! 위니멀에!</h3>
                <figure>
                    <img src="../asset/img/loginWelcome.jpg" alt="login">
                </figure>
            </div>
            <div class="login__contents">
                <form name="login" action="loginSave.php" method="POST">
                    <fieldset>
                        <legend class="blind">로그인 입력폼</legend>
                        <div class="text_input">
                            <div>
                                <label class="blind" for="youID"></label>
                                <input type="id" name="youID" id="youID" placeholder="아이디를 입력해주세요." class="input__style" required>
                            </div>
                            <div>
                                <label class="blind" for="youPass">비밀번호</label>
                                <input type="password" name="youPass" id="youPass" placeholder="비밀번호를 입력해주세요." class="input__style" required>
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" name="loginBox" id="loginBox" class="login__box">
                            <label for="loginBox">로그인 상태 유지</label>
                        </div>
                        <div class="btn">
                            <div class="btn_login">
                                <button>Login</button>
                            </div>
                            <div class="btn_kakao">
                                <a href="#">KaKao Login</a>            
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="login__footer">
                <div class="footer_btn">
                    <li><a href="../php/joinAgree.php" class="loginpopup_joinBtn">회원가입</a></li>
                    <li><a href="findIDPass.php">ID / PW 찾기</a></li>
                </div>
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

    <?php include "../include/footer.php"?>
    
    <!-- <script src="../assets/js/gsap.min.js.js"></script> -->
    <script src="../../asset/js/header_hamburger.js"></script>

    <script>
        //메인 페이지 패럴랙스 효과
        const hospiText = document.querySelectorAll(".hospi__text");
        const hospiMap = document.querySelectorAll(".hospi__map");
        const diseaseCardIcon = document.querySelectorAll(".disease__cardConts span");
        const diseaseCardText = document.querySelectorAll(".disease__cardConts div");
        
        function pallaxEffect(){
            //클래스 달기
            hospiText.forEach((e) => {
                e.classList.add("reveal");
            });
            hospiMap.forEach((e) => {
                e.classList.add("reveal");
                e.classList.add("revealDel1");
            });
            diseaseCardIcon.forEach((e) => {
                e.classList.add("reveal2");
                e.classList.add("revealDel2");
            });
            diseaseCardText.forEach((e) => {
                e.classList.add("reveal");
            });

            //스크롤 좌표에 따른 패럴랙스 효과
            window.addEventListener("scroll", () => {
                const revealContents = document.querySelectorAll(".reveal");
                const revealContents2 = document.querySelectorAll(".reveal2");
                let scrollTop = window.scrollY;
                revealContents.forEach((e,i) => {
                    console.log(e)
                    if(scrollTop > e.offsetTop - window.innerHeight/1.5){
                        e.classList.add("show");
                    } else {
                        e.classList.remove("show");
                    }
                });
                revealContents2.forEach((e,i) => {
                    console.log(e)
                    if(scrollTop > e.offsetTop - window.innerHeight/1.5){
                        e.classList.add("show");
                    } else {
                        e.classList.remove("show");
                    }
                });   
            });
        }
        pallaxEffect();

    </script>

    <script>
        const login = document.querySelector(".header__menu .login");

        const loginpopup = document.querySelector(".login__popup");

        const closeBtn = document.querySelector(".close_btn");

        login.addEventListener("click", ()=>{
            loginpopup.classList.add("show");
        })
        closeBtn.addEventListener("click", ()=>{
            loginpopup.classList.remove("show");
        })

    </script>
</body>
</html>
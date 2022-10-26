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

    <?php include "../include/footer.php"?>
    
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


        // 여기서부터 슬라이드
        const sliderBox = document.querySelector(".slider__Box");
        const sliderInner = document.querySelector(".slider__inner");
        const slider = document.querySelectorAll(".slider");


        let currentIndex = 0,
            functionNum = 1,
            sliderCount = slider.length,
            sliderFirst = slider[0],
            sliderLast = sliderCount-1,
            sliderHeight = sliderFirst.offsetHeight + 20,
            cloneFirst = slider[0].cloneNode(true),
            // cloneSecond= slider[1].cloneNode(true),
            cloneAlmost = slider[sliderLast-1].cloneNode(true),
            cloneLast = slider[sliderLast].cloneNode(true);

        function sliderInit(){
            sliderInner.appendChild(cloneFirst);
            sliderInner.insertBefore(cloneLast, sliderFirst);
            sliderInner.insertBefore(cloneAlmost, cloneLast);
            sliderInner.style.transform = "translateY(-160px)";
            currentIndex = 1;
        }
        sliderInit();

        const slider2 = document.querySelectorAll(".slider");

        function sliderFocus(){
            slider2.forEach((e, i) => {
                e.classList.add("nonfocus");
                if(i == currentIndex+1){
                    e.classList.remove("nonfocus");
                }
            })
        }
        sliderFocus();

        function sliderDelay(){
            setTimeout(()=>{
                sliderWheel();
            },1000);
        }

        sliderBox.addEventListener("wheel", (e) => {
            e.preventDefault();
        });

        function sliderWheel(){
            sliderBox.addEventListener("wheel", (e) => {
                // console.log(e.deltaY)
            
                if(e.deltaY > 0){
                    currentIndex++;
                    slideEffect();
                } else {
                    currentIndex--;
                    slideEffect();
                }
            },{
                once: true
            });
        }
        sliderWheel();

        function slideEffect(){
            console.log("translateY(-"+ 120 * currentIndex +"px)")
            sliderInner.style.transform = "translateY(-"+ 120 * currentIndex +"px)";
            sliderInner.style.transition = "all 0.7s cubic-bezier(0.7, 0, 0.3, 1)";
            sliderFocus();
            sliderDelay();

            setTimeout(() => {
                if (currentIndex == sliderCount){
                    sliderInner.style.transform = "translateY(0px)";
                    sliderInner.style.transition = "0s";
                    currentIndex = 0;
                    sliderFocus();
                    return;
                } else if (currentIndex == 0){
                    sliderInner.style.transform = "translateY(-"+ sliderHeight * sliderCount +"px)";
                    sliderInner.style.transition = "0s";
                    currentIndex = sliderCount;
                    sliderFocus();
                    return;
                }
            }, 700)
        }

    </script>

    <script>
        //로그인창 닫기
    const login = document.querySelector(".header__menu .login");
    const loginpopup = document.querySelector(".login__popup");
    const closeBtn = document.querySelector(".close_btn");

    login.addEventListener("click", (e)=>{
        e.preventDefault();
        loginpopup.style.display = "block";
        document.querySelector("body").classList.add("scrollStop");
    })
    closeBtn.addEventListener("click", ()=>{
        loginpopup.style.display = "none";
        document.querySelector("body").classList.remove("scrollStop");
    })

    // 헤더바 색깔 조절
    const headerType = document.getElementById("headerType");
    window.addEventListener("scroll", () => {
        let scrollTop = window.scrollY;

        if(scrollTop > 0){
            headerType.style.backgroundColor = "#fff";
        } else {
            headerType.style.backgroundColor = "transparent";
        }
    });
    </script>
</body>
</html>
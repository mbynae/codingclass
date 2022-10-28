<?php
    include "../connect/connect.php";


    $DisID = $_GET['page'];

    $DisSql = "SELECT * FROM Disease WHERE DisID = '{$DisID}'";
    $DisResult = $connect -> query($DisSql);

    $DisInfo = $DisResult -> fetch_array(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>질병 상세 페이지</title>
        <link rel="stylesheet" href="../asset/css/hospital/hospital_detail.css"/>
        <link rel="stylesheet" href="../asset/css/board/boardComment.css" />
    </head>

    <link rel="stylesheet" href="../asset/css/disease/disease_detail.css" />

<body>

    <!-- header -->
    <?php include "../include/header.php"?>
    <!-- //header -->

    <!-- 검색창 -->
    <section id="searchType" class="container">
        <div class="searchBox">
            <form action="" method="POST" class="searchBox__form">
            <div class="searchBox_inner">
                <button class="searchBtn">
                <img src="../asset/img/searchBtn.svg" alt="찾기 버튼" />
                </button>
                <input type="text" name="search" id="search" placeholder="궁금하신 내용을 검색해주세요." required/>
            </div>
            <ul class="searchTag__box">
                <li class="searchTag"><a href="#">#중성화</a></li>
                <li class="searchTag"><a href="#">#유행병</a></li>
                <li class="searchTag"><a href="#">#겨울</a></li>
                <li class="searchTag"><a href="#">#동물병원</a></li>
            </ul>
            </form>
        </div>
    </section>

    <!-- 타이틀 -->
    <section id="TitleType">
        <div class="title__inner">
            <div class="title__name">
                <span></span>
                <h2><?=$DisInfo['DisName']?></h2>
            </div>
            <span>평균가 : <?=$DisInfo['DisCurePrice']?>원</span>
            <p><?=$DisInfo['DisSymptom']?></p>
            <a href="hospitalMain.php">병원 알아보러 가기</a>
        </div>
    </section>

    <section id="informationType" class="container">
            <h2 class="butler800">Patella Information</h2>
            <div class="disease__box">
                <div class="disease__info">
                    <img src="../asset/img/disease_img01.jpg" alt="질병설명1" />
                    <div class="text__box">
                        <span class="information">
                            <h3><?=$DisInfo['DisName']?>이란?</h3>
                            <ul>
                                <li><?=$DisInfo['DisSymptom']?></li>
                            </ul>
                        </span>
                    </div>
                </div>
                <div class="disease__info">
                    <div class="text__box">
                        <span class="information">
                            <h3>예방법?</h3>
                            <ul>
                                <li><?=$DisInfo['DisPrevent1']?></li>
                                <li><?=$DisInfo['DisPrevent2']?></li>
                            </ul>
                        </span>
                    </div>
                    <img src="../asset/img/disease_img02.jpg" alt="질병설명1" />
                </div>
                <div class="disease__info">
                    <img src="../asset/img/disease_img03.jpg" alt="질병설명1" />
                    <div class="text__box">
                        <span class="information">
                            <h3>발생 원인</h3>
                            <ul>
                                <li><?=$DisInfo['DisCause1']?></li>
                                <li><?=$DisInfo['DisCause2']?></li>
                            </ul>
                        </span>
                    </div>
                </div>
                <div class="disease__info">
                    <div class="text__box">
                        <span class="information">
                            <h3>초기 증상</h3>
                            <ul>
                                <li><?=$DisInfo['DisEarlySymptom1']?></li>
                                <li><?=$DisInfo['DisEarlySymptom2']?></li>
                            </ul>
                        </span>
                    </div>
                    <img src="../asset/img/disease_img04.jpg" alt="질병설명1" />
                </div>
                <div class="disease__info">
                    <img src="../asset/img/disease_img05.jpg" alt="질병설명1" />
                    <div class="text__box">
                        <span class="information">
                            <h3><?=$DisInfo['DisName']?> 수술이 필요한 이유는?</h3>
                            <ul>
                                <li><?=$DisInfo['DisSurgeryReason']?></li>
                            </ul>
                        </span>
                    </div>
                </div>
                <div class="disease__info">
                    <div class="text__box">
                        <span class="information">
                            <h3>수술 후 관리법</h3>
                            <ul>
                                <li><?=$DisInfo['DisAfterCare1']?></li>
                                <li><?=$DisInfo['DisAfterCare2']?></li>
                            </ul>
                        </span>
                    </div>
                    <img src="../asset/img/disease_img06.jpg" alt="질병설명1" />
                </div>
            </div>
        </section>

        <?php include "../include/footer.php"?>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../asset/js/header_hamburger.js"></script>
    <script>
        //카테고리 선택 선택자
        const category = document.querySelectorAll(".category__titleChoice li a");
        const categoryRegtion = document.querySelector(".cate1");
        const categoryDisease = document.querySelector(".cate2");
        const categorySurgery = document.querySelector(".cate3");
        const categoryContents = document.querySelectorAll(".category__contents");
        const regionChoice = document.querySelector(".regionCho");
        const diseaseChoice = document.querySelector(".diseaseCho");
        const surgeryChoice = document.querySelector(".surgeryCho");
        const categoryCircle = document.querySelectorAll(".category__contents > div");
        const categoryCircleLab = document.querySelectorAll(".category__contents > div > label");
        const categoryCircleInp = document.querySelectorAll(".category__contents > div > input");

        //카테고리 선택
        category.forEach((cate, index) => {
            cate.addEventListener("click", (link)=>{
                link.preventDefault();
                categoryCircleInp.forEach((input) => {
                    input.checked = false;
                });
                categoryCircle.forEach((label) => {
                    label.classList.remove("tapActive");
                });
                category.forEach((all) => {
                    all.classList.remove("tapActive");
                    cate.classList.add("tapActive");
                });
                categoryContents.forEach((cont) => {
                    cont.classList.remove("tapActive");
                    if(category[index].classList.contains("tapActive")){
                        categoryContents[index].classList.add("tapActive");
                    }
                });
            })
        });

        //카테고리 내용 선택
        categoryCircleLab.forEach((e, i) => {
            e.addEventListener("click", ()=>{
                categoryCircle.forEach(rem => {
                    rem.classList.remove("tapActive");
                })
                categoryCircle[i].classList.add("tapActive");
            });
        });
    </script>
</html>

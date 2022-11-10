<?php
    include "../connect/connect.php";
    

    $search = $_GET['search'];


    $HosSql = "SELECT * FROM Hospital WHERE HosCategory  LIKE '%$search%'";
    $HosResult = $connect -> query($HosSql);

    // $HosInfo = $HosResult -> fetch_array(MYSQLI_ASSOC);

    $DisSql = "SELECT * FROM Disease WHERE DisCategory  LIKE '%$search%'";
    $DisResult = $connect -> query($DisSql);



?>




<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>통합 검색</title>
    <style>
    </style>

    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">
    <link rel="stylesheet" href="../asset/css/reset.css">

    <link rel="stylesheet" href="../asset/css/header.css">
    <link rel="stylesheet" href="../asset/css/footer.css">

    <link rel="stylesheet" href="../asset/css/allSearch/searchBox.css">
    <link rel="stylesheet" href="../asset/css/allSearch/allSearchCate.css">
    <link rel="stylesheet" href="../asset/css/allSearch/allHospital.css">
    <link rel="stylesheet" href="../asset/css/allSearch/allDisease.css">
    <style>
        .searchNon {
            font-size: 32px;
            text-align: center;
            margin: 350px 0 250px 0;
            color: #757575;
        }
        .allHospital__text {
            justify-content: space-between !important;
        }
    </style>
</head>
<body class="score">
    <!-- header -->
    <?php include "../include/header.php"?>
    <!-- //header -->

    <!-- allSearchBox -->
    <div class="pin container"></div>
    <section id="searchBox">
        <!-- header -->
        <?php include "../include/searchBox.php"?>
        <!-- //header -->
    </section>
    <!-- //allSearchBox -->

    <!-- allHospital -->
    <section id="allHospital">
        <div class="allHospital__inner container" style="padding: 0px !important;">
            <div class="allHospital__top">
                <h2>A.Hsospital</h2>
                <p>
                    <a href="hospitalMain.php?category=<?=$search?>">
                        더보기
                        <img src="../asset/img/allMore.svg" alt="">
                    </a>
                </p>
            </div>
            <div class="allHospital__box">
                <?php
                    foreach($HosResult as $HosKeyword){ ?>
                    <div class="allHospital__text">
                        <div class="allHospital__desc">
                            <h2><a href="hospitalView.php?page=<?=$HosKeyword['HosID']?>"><?=$HosKeyword['HosName']?></a></h2>
                            <h3><a href="hospitalView.php?page=<?=$HosKeyword['HosID']?>"><?=$HosKeyword['HosSpecialty1']?> 및 <?=$HosKeyword['HosSpecialty2']?></a></h3>
                            <p>
                                <a href="hospitalView.php?page=<?=$HosKeyword['HosID']?>">
                                    <?=$HosKeyword['HosCon1']?>
                                </a>
                            </p>
                        </div>
                        <div class="allHospital__img">
                            <figure>
                                <img src="../asset/img/hospital/<?=$HosKeyword['HosImgFile']?>" alt="통합검색병원사진">
                            </figure>
                        </div>
                    </div>
                <?php } ?>  
            </div>
            <!-- <div class="allHospital__text">
                    <div class="allHospital__desc">
                        <h2><a href="#">배곧도담동물병원</a></h2>
                        <h3><a href="#">수술 전문 및 슬개골</a></h3>
                        <p>
                            <a href="#">
                                배곧도담동물병원은 수술 및 예방 접종 전문 병원입니다. 또한 노령견을 전문으로...
                                반려동물들과 함께 쌓아가는 추억과 행복한 하루하루를 지켜드리기 위해 저희 병...
                            </a>
                        </p>
                    </div>
                    <div class="allHospital__img">
                        <figure>
                            <img src="../../asset/img/allHospital.jpg" alt="통합검색병원사진">
                        </figure>
                    </div>
                </div> -->
    
            <div class="allDisease__top">
                <h2>A.Disease</h2>
                <p>
                    <a href="diseaseMain.php?category=<?=$search?>">
                        더보기
                        <img src="../asset/img/allMore.svg" alt="">
                    </a>
                </p>
            </div>
            <div class="allDisease__box">
                <?php
                    foreach($DisResult as $DisKeyword){ ?>
                    <div class="allDisease__text">
                        <div class="allDisease__desc">
                            <h2><a href="diseaseView.php?page=<?=$DisKeyword['DisID']?>"><?=$DisKeyword['DisName']?></a></h2>
                            <h3><a href="diseaseView.php?page=<?=$DisKeyword['DisID']?>"><?=$DisKeyword['DisCategory']?> 및 <?=$DisKeyword['DisCurePrice']?></a></h3>
                            <p>
                                <a href="diseaseView.php?page=<?=$DisKeyword['DisID']?>">
                                    <?=$DisKeyword['DisSymptom']?>
                                </a>
                            </p>
                        </div>
                        <div class="allHospital__img">
                            <figure>
                                <img src="../asset/img/disease/<?=$DisKeyword['DisImgFile']?>" alt="통합검색질병사진">
                            </figure>
                        </div>
                    </div>
                <?php } ?>  
            </div>
        
        </div>
    </section>

    <?php include "../include/footer.php"?>


    <script>
        const allHospitalCont = document.querySelector(".allHospital__desc h2 a");
        const allHospitalTop = document.querySelector(".allHospital__top");
        const allHospitalBox = document.querySelector(".allHospital__box");
        const allDiseaseCont = document.querySelector(".allDisease__desc h2 a");
        const allDiseaseTop = document.querySelector(".allDisease__top");
        const allDiseaseBox = document.querySelector(".allDisease__box");
        

        function block(){
            if(allHospitalBox.innerHTML.includes("div") == false && allDiseaseBox.innerHTML.includes("div") == true){
                allHospitalTop.style.display = "none";
            } else if(allDiseaseBox.innerHTML.includes("div") == false && allHospitalBox.innerHTML.includes("div") == true){
                allDiseaseTop.style.display = "none";
            } else if (allHospitalBox.innerHTML.includes("div") == false && allDiseaseBox.innerHTML.includes("div") == false){
                allHospitalTop.style.display = "none";
                allDiseaseTop.style.display = "none";

                document.querySelector(".allHospital__inner").innerHTML = `<div class='searchNon'>검색 결과가 없습니다.</div>`;
            }
        }
        block();
    </script>
</body>
</html>
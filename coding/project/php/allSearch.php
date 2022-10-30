<?php
    include "../connect/connect.php";
    

    $search = $_GET['search'];


    $HosSql = "SELECT * FROM Hospital WHERE HosCategory  LIKE '%$search%'";
    $HosResult = $connect -> query($HosSql);

    // $HosInfo = $HosResult -> fetch_array(MYSQLI_ASSOC);



?>




<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>통합검색</title>
    <style>
    </style>

    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/butler.css">

    <link rel="stylesheet" href="../asset/css/header.css">
    <link rel="stylesheet" href="../asset/css/footer.css">

    <link rel="stylesheet" href="../asset/css/allSearch/searchBox.css">
    <link rel="stylesheet" href="../asset/css/allSearch/allSearchCate.css">
    <link rel="stylesheet" href="../asset/css/allSearch/allHospital.css">
    <link rel="stylesheet" href="../asset/css/allSearch/allDisease.css">
    <style>
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
    <div class="allHospital__inner container">
        <div class="allHospital__top">
            <h2 class="butler800">A.Hsospital</h2>
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
    </div>
    </section>

    <?php include "../include/footer.php"?>
</body>
</html>
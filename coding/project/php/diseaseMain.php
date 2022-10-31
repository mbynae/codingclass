<?php

    include "../connect/connect.php";
    include "../connect/session.php";

    $DisSql = "SELECT * FROM Disease";
    $DisResult = $connect -> query($DisSql);

    // $HosInfo = $HosResult -> fetch_array(MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="ko">
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>질병 메인</title>

        <link rel="stylesheet" href="../asset/css/reset.css" />
        <link rel="stylesheet" href="../asset/css/common.css" />
        <link rel="stylesheet" href="../asset/css/font.css" />
        <link rel="stylesheet" href="../asset/css/header.css" />

        <link rel="stylesheet" href="../asset/css/disease/Banner.css" />
        <link rel="stylesheet" href="../asset/css/disease/inormation.css" />

        <style>
           /* diseaseSlider */
           #diseaseSlider {
                margin: 80px 0 60px 0;
            }
            .diseaseSlider__inner {
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
            }
            .slider__box {
                width: 1200px;
                height: 200px;
                position: relative;
                overflow: hidden;
            }
            .diseaseSlider__card {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 320px;
                padding: 20px;
                box-shadow: 2px 2px 8px 1px rgba(210, 210, 210, 0.25);
                border-radius: 20px;
                transition: 0.5s;
                cursor: pointer;
            }
            .diseaseSlider__card a {
                color: #6cc4b3;
                font-size: 20px;
            }
            .diseaseSlider__card:hover {
                background-color: #6cc4b3;
            }
            .diseaseSlider__card:hover a {
                color: #fff;
            }
            .diseaseSlider__card:hover a .diseaseSlider__card__bottom {
                color: #fff;
            }
            .diseaseSlider__card:nth-child(1) {
                left: calc(50% - 800px);
            }
            .diseaseSlider__card:nth-child(2) {
                left: calc(50% - 400px);
            }
            .diseaseSlider__card:nth-child(4) {
                left: calc(50% + 400px);
            }
            .diseaseSlider__card:nth-child(5) {
                left: calc(50% + 800px);
            }

            .diseaseSlider__card a h3 {
                font-size: 20px;
                color: #6cc4b3;
                margin-bottom: 20px;
            }
            .diseaseSlider__card__bottom {
                display: flex;
                justify-content: space-between;
                color: #757575;
                font-size: 14px;
            }
            .prev,
            .next {
                line-height: 150px;
                width: 18px;
                cursor: pointer;
                position: absolute;
            }
            .prev {
                left: 40px;
            }
            .next {
                right: 40px;
            }

            /* diseaseTap */
            .diseaseTap__inner > h2 {
                text-align: center;
                font-size: 32px;
                color: #6cc4b3;
                margin-bottom: 30px;
            }
            .diseaseTap__card__wrap {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .diseaseTap__card {
                position: relative;
                width: 25%;
                padding: 30px;
                max-height: 400px;
                margin-bottom: 78px;
                box-shadow: 2px 2px 8px 2px rgba(222, 222, 222, 0.25);
                border-radius: 30px;
            }
            .diseaseTap__card:last-child {
                margin-bottom: 40px;
            }
            .diseaseTap__card img {
                display: block;
                left: 50%;
                margin: 0 auto;
                width: 200px;
                height: 200px;
                margin-top: 25px;
                border-radius: 20px;
            }
            .diseaseTap__card > h3 {
                margin-top: 15px;
                text-align: center;
                color: #6cc4b3;
            }
            .diseaseTap__card > P {
                margin-top: 10px;
                text-align: center;
                color: #6cc4b3;
                font-size: 12px;
                margin-bottom: 20px;
            }
            .diseaseTap__card > em {
                font-size: 16px;
                line-height: 22px;
                text-align: center;
                color: #757575;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 3; 
                -webkit-box-orient: vertical;
            }

            .board__pages {
                margin: 70px 0 20px 0;
            }
            .board__pages ul {
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .board__pages ul li a {
                padding: 13px 10px;
                color: #505050;
            }
            .board__pages ul li.active a {
                color: #6cc4b3;
            }
        </style>
    </head>

<body>
    <!-- header -->
    <?php include "../include/header.php"?>
    <!-- //header -->

    <section id="searchType" class="container">
        <div class="searchBox">
            <form action="" method="POST" class="searchBox__form">
                <div class="searchBox_inner">
                    <button class="searchBtn">
                        <img src="../asset/img/searchBtn.svg" alt="찾기 버튼" />
                    </button>
                    <input type="text" name="search" id="search" placeholder="궁금하신 내용을 검색해주세요." required />
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

    <section id="diseaseSlider">
        <div class="diseaseSlider__inner container">
            <div class="slider__view">
                <div class="slider__box">
                    <?php
                        for($i=1; $i <= 5; $i++){
                            $Dis = $DisResult -> fetch_array(MYSQLI_ASSOC);
                            
                            echo "<div class='diseaseSlider__card'><a href='diseaseView.php?page=".$Dis['DisID']."'";
                                echo "<h3>".$Dis['DisName']."</h3>";
                                echo "<div class='diseaseSlider__card__bottom'>";
                                    echo "<p>평균가</p>";
                                    echo "<p>".$Dis['DisCurePrice']."원</p>";
                                echo "</div>";
                            echo "</a></div>";
                        }
                    ?>
                    <!-- <div class="diseaseSlider__card">
                        <h3>강아지 종합백신</h3>
                        <div class="diseaseSlider__card__bottom">
                            <p>평균가</p>
                            <p>35000원</p>
                        </div>
                    </div>
                    <div class="diseaseSlider__card">
                        <h3>안과</h3>
                        <div class="diseaseSlider__card__bottom">
                            <p>평균가</p>
                            <p>21,000원</p>
                        </div>
                    </div>
                    <div class="diseaseSlider__card">
                        <h3>슬개골 탈구 수술</h3>
                        <div class="diseaseSlider__card__bottom">
                            <p>평균가</p>
                            <p>1,135,000원</p>
                        </div>
                    </div>
                    <div class="diseaseSlider__card">
                        <h3>슬개골 탈구 수술2</h3>
                        <div class="diseaseSlider__card__bottom">
                            <p>평균가</p>
                            <p>1,135,000원</p>
                        </div>
                    </div>
                    <div class="diseaseSlider__card">
                        <h3>슬개골 탈구 수술3</h3>
                        <div class="diseaseSlider__card__bottom">
                            <p>평균가</p>
                            <p>1,135,000원</p>
                        </div>
                    </div> -->
                </div>
            </div>
            <img src="../asset/img/LeftLine.svg" alt="" class="prev" />
            <img src="../asset/img/RightLine.svg" alt="" class="next" />
        </div>
    </section>

    <section id="infomationType" class="container">
        <div class="Info_textBox">
            <h2>질병 알아보기</h2>
            <div class="category__box">
                <div class="category__title">
                    <h3>Catetory</h3>
                    <nav class="category__titleChoice">
                        <li><a href="#" class="tapActive">부위</a></li>
                        <span>|</span>
                        <li><a href="#">병명</a></li>
                    </nav>
                </div>
                <div class="category__contents body tapActive">
                    <div>
                        <label for="body1">머리</label>
                        <input type="radio" id="body1" name="body" value="머리" />
                    </div>
                    <div>
                        <label for="body2">얼굴</label>
                        <input type="radio" id="body2" name="body" value="얼굴" />
                    </div>
                    <div>
                        <label for="body3">눈</label>
                        <input type="radio" id="body3" name="body" value="눈" />
                    </div>
                    <div>
                        <label for="body4">코</label>
                        <input type="radio" id="body4" name="body" value="코" />
                    </div>
                    <div>
                        <label for="body5">입</label>
                        <input type="radio" id="body5" name="body" value="입" />
                    </div>
                    <div>
                        <label for="body6">몸</label>
                        <input type="radio" id="body6" name="body" value="몸" />
                    </div>
                    <div>
                        <label for="body7">다리</label>
                        <input type="radio" id="body7" name="body" value="다리" />
                    </div>
                    <div>
                        <label for="body8">기타</label>
                        <input type="radio" id="body8" name="body" value="기타" />
                    </div>
                </div>
                <div class="category__contents disease__name">
                    <div>
                        <label for="disease__name1">질병1</label>
                        <input type="radio" id="disease__name1" name="disease__name" value="질병1" />
                    </div>
                    <div>
                        <label for="disease__name2">질병2</label>
                        <input type="radio" id="disease__name2" name="disease__name" value="질병2" />
                    </div>
                    <div>
                        <label for="disease__name3">질병3</label>
                        <input type="radio" id="disease__name3" name="disease__name" value="질병3" />
                    </div>
                    <div>
                        <label for="disease__name4">질병4</label>
                        <input type="radio" id="disease__name4" name="disease__name" value="질병4" />
                    </div>
                    <div>
                        <label for="disease__name5">질병5</label>
                        <input type="radio" id="disease__name5" name="disease__name" value="질병5" />
                    </div>
                    <div>
                        <label for="disease__name6">질병6</label>
                        <input type="radio" id="disease__name6" name="disease__name" value="질병6" />
                    </div>
                    <div>
                        <label for="disease__name7">질병7</label>
                        <input type="radio" id="disease__name7" name="disease__name" value="질병7" />
                    </div>
                    <div>
                        <label for="disease__name8">질병8</label>
                        <input type="radio" id="disease__name8" name="disease__name" value="질병8" />
                    </div>
                </div>
                <div class="category__confirm">
                    <span><a href="#">NO</a></span>
                    <span>|</span>
                    <span><a href="#" class="Yes" data-name="">YES</a></span>
                </div>
            </div>
        </div>
    </section>

    <section id="diseaseTap">
        <div class="diseaseTap__inner container">
            <h2>
                반려동물들을 아프게 하는<br />
                질병들을 알아봐요
            </h2>
            <div class="diseaseTap__card__wrap">
                <?php
                    if(isset($_GET['page'])){
                        $page = (int) $_GET['page'];
                    } else {
                        $page = 1;
                    }

                    $viewNum = 9;
                    $viewLimit = ($viewNum * $page) - $viewNum;


                    $DisSql = "SELECT * FROM Disease ORDER BY DisID DESC LIMIT {$viewLimit}, {$viewNum}";
                    $DisResult = $connect -> query($DisSql);

                    // echo $DisSql;

                    $count = $DisResult -> num_rows;

                    if($DisResult){
                        $count = $DisResult -> num_rows;
            
                        if($count > 0 ){
                            for($i=1; $i <= $count; $i++){
                                $Dis = $DisResult -> fetch_array(MYSQLI_ASSOC);
                                echo "<div class='diseaseTap__card'>";
                                    echo "<div class='bodyKeyword ir'>".$Dis['DisCategory']."</div>";
                                    echo "<a href='diseaseView.php?page=".$Dis['DisID']."'><img src='../asset/img/disease/".$Dis['DisImgFile']."' alt=''></a>";
                                    echo "<h3>".$Dis['DisName']."</h3>";
                                        echo "<p> 치료비 ".$Dis['DisCurePrice']."원</p>";
                                        echo "<em>".$Dis['DisSymptom']."</em>";
                                echo "</div>";
                            }
                        }
                    }
                ?>
            </div>
            <div class="board__pages">
                <ul>
<?php
    if(isset($_GET['category'])){
        $sql = "SELECT count(DisID) FROM Disease WHERE DisCategory = '$category'";
        
    } else {
        $sql = "SELECT count(DisID) FROM Disease";
    }


    $result = $connect -> query($sql);

    $DisCount = $result -> fetch_array(MYSQLI_ASSOC);
    $DisCount = $DisCount['count(DisID)'];

    

    // 총 페이지 갯수
    $DisCount = ceil($DisCount / $viewNum);

    // echo $HosCount;

    // 현재 페이지 기준으로 보여주고 싶은 갯수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    // 처음 페이지 초기화

    if($startPage < 1) $startPage = 1;

    // 마지막 페이지 초기화
    if($endPage >= $DisCount) $endPage = $DisCount;

    // 이전 페이지 , 처음 페이지
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='diseaseMain.php?page=1'>처음으로</li>";
        echo "<li><a href='diseaseMain.php?page={$prevPage}'>이전</li>";
    }

    // 페이지 넘버 표시
    for($i = $startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo"<li class='{$active}'><a href='diseaseMain.php?page={$i}'>{$i}</a></li>";
    }

    // 다음 페이지 , 마지막 페이지
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='diseaseMain.php?page={$nextPage}'>다음</li>";
        echo "<li><a href='diseaseMain.php?page={$DisCount}'>마지막으로</li>";
    }
?>
                </ul>
            </div>
        </div>
    </section>

    <?php include "../include/footer.php"?>
    <!-- //header -->


</body>

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
    const ChoiceYes = document.querySelector(".Yes");

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
            ChoiceYes.dataset.name = e.innerText;
        });
    });


    const bodyKeyword = document.querySelectorAll(".bodyKeyword");

    bodyKeyword.forEach((e) => {
        ChoiceYes.addEventListener("click", (choice) => {
            choice.preventDefault();
            e.parentNode.style.display = "block";
            if(choice.target.dataset.name !== e.innerText){
                e.parentNode.style.display = "none";
            }
        });
    });


    // 슬라이드

    document.querySelector(".next").onclick = function () {
        let lists = document.querySelectorAll(".diseaseSlider__card");
        document.querySelector(".slider__box").appendChild(lists[0]);
    };

    document.querySelector(".prev").onclick = function () {
        let lists = document.querySelectorAll(".diseaseSlider__card");
        document.querySelector(".slider__box").prepend(lists[lists.length - 1]);
    };

    function autoSlider() {
        setInterval(() => {
            document.querySelector(".next").click();
        }, 3000);
    }
    autoSlider();


</script>
</html>
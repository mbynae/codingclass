<?php

    include "../connect/connect.php";

    $HosSql = "SELECT * FROM Hospital";
    $HosResult = $connect -> query($HosSql);

    // $HosInfo = $HosResult -> fetch_array(MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>병원 메인 페이지</title>

    <link rel="stylesheet" href="../asset/css/hospital/hospital_main.css">
    <style>
        
               
        
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
    </section>

    <section id="mainSliderType" class="container">
        <div class="slider__text">
            <div class="slider__textName">
                <h3>배곧도담병원</h3>
                <span><a href="#" class="ir">버튼</a></span>
                <div class="slider__tag">
                    <span>#수술</span>
                    <span>#예방접종</span>
                </div>
            </div>
            <p>
                배곧도담동물병원은 수술 및 예방 접종 전문 병원입니다. 또한 노령견을 전문으로 하는 동물 병원 입니다.
            </p>
            <a href="#">더 알아보기</a>
        </div>
    </section>

    <section id="infomationType" class="container">
        <!-- 카테고리 박스 -->
        <div class="Info_textBox">
            <h2>동물병원 알아보기</h2>
            <div class="category__box">
                <div class="category__title">
                    <h3>Catetory</h3>
                    <nav class="category__titleChoice">
                        <li><a href="#" class="cate1 tapActive">지역</a></li>
                        <span>|</span>
                        <li><a href="#" class="cate2">병명</a></li>
                        <span>|</span>
                        <li><a href="#" class="cate3">수술</a></li>
                    </nav>
                </div>
                <form action="#" name="" method="" onsubmit="">
                    <fieldset>
                        <!-- 지역 카테고리 -->
                        <div class="category__contents regionCho tapActive">
                            <div>
                                <label for="region1">서울</label>
                                <input type="radio" id="region1" name="region" value="서울">
                            </div>
                            <div>
                                <label for="region2">경기도</label>
                                <input type="radio" id="region2" name="region" value="경기도">
                            </div>
                            <div>
                                <label for="region3">인천</label>
                                <input type="radio" id="region3" name="region" value="인천">
                            </div>
                            <div>
                                <label for="region4">충청도</label>
                                <input type="radio" id="region4" name="region" value="충청도">
                            </div>
                            <div>
                                <label for="region5">전라도</label>
                                <input type="radio" id="region5" name="region" value="전라도">
                            </div>
                            <div>
                                <label for="region6">강원도</label>
                                <input type="radio" id="region6" name="region" value="강원도">
                            </div>
                            <div>
                                <label for="region7">경상도</label>
                                <input type="radio" id="region7" name="region" value="경상도">
                            </div>
                            <div>
                                <label for="region8">제주도</label>
                                <input type="radio" id="region8" name="region" value="제주도">
                            </div>
                        </div>
                        <!-- 질병 카테고리 -->
                        <div class="category__contents diseaseCho">
                            <div>
                                <label for="region1">서울</label>
                                <input type="radio" id="region1" name="region" value="서울">
                            </div>
                        </div>
                        <!-- 수술명 카테고리 -->
                        <div class="category__contents surgeryCho">
                            <div>
                                <label for="region1">서울</label>
                                <input type="radio" id="region1" name="region" value="서울">
                            </div>
                        </div>
                        <div class="category__confirm">
                            <button>NO</span>
                            <span>|</span>
                            <button type="submit">YES</span>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>

        <!-- 이미지 박스 -->
        <div class="hospital__contBox">
            <?php

                if(isset($_GET['page'])){
                    $page = (int) $_GET['page'];
                } else {
                    $page = 1;
                }

                $viewNum = 9;
                $viewLimit = ($viewNum * $page) - $viewNum;


                $HosSql = "SELECT * FROM Hospital ORDER BY HosID DESC LIMIT {$viewLimit}, {$viewNum}";
                $HosResult = $connect -> query($HosSql);

                // echo $HosSql;

                $count = $HosResult -> num_rows;

                if($HosResult){
                    $count = $HosResult -> num_rows;
        
                    if($count > 0 ){
                        for($i=1; $i <= $count; $i++){
                            $Hos = $HosResult -> fetch_array(MYSQLI_ASSOC);
                            echo "<div class='hospital__card'>";
                                echo "<a href='hospitalView.php?page=".$Hos['HosID']."'><img src='../asset/img/hospital/".$Hos['HosImgFile']."' alt=''></a>";
                            echo "<div class='hospital__cardText'>";
                            echo "<h4>".$Hos['HosName']."</h4>";
                            echo "<address>".$Hos['HosAdress']."</address></div>";
                            echo "<div class='hospital__cardTag'>";
                            echo "<span>#".$Hos['HosSpecialty1']."</span>";
                            echo "<span>#".$Hos['HosSpecialty2']."</span></div></div>";
                            // echo "<div class='hospital__cardTag'>";
                            // echo "</tr>";
                            // <div class="hospital__card">
                            //     <img src="../asset/img/hospitalCard_cont2.jpg" alt="">
                            //     <div class="hospital__cardText">
                            //         <h4>디오빌동물병원</h4>
                            //         <address>서울 영등포구 당산로 222</address>
                            //     </div>
                            //     <div class="hospital__cardTag">
                            //         <span>#종합</span>
                            //         <span>#미용</span>
                            //     </div>
                            // </div>
                        }
                    }
                }
                ?>
<!--             
            
            <div class="hospital__card">
                <img src="../asset/img/hospitalCard_cont3.jpg" alt="">
                <div class="hospital__cardText">
                    <h4>미소로동물병원</h4>
                    <address>서울 영등포구 영신로 238 미소로</address>
                </div>
                <div class="hospital__cardTag">
                    <span>#슬개골</span>
                    <span>#중성화</span>
                </div>
            </div>
            <div class="hospital__card">
                <img src="../asset/img/hospitalCard_cont4.jpg" alt="">
                <div class="hospital__cardText">
                    <h4>온누리종합동물병원</h4>
                    <address>서울 영등포구 도신로 186</address>
                </div>
                <div class="hospital__cardTag">
                    <span>#특수진료</span>
                    <span>#노령견</span>
                </div>
            </div>
            <div class="hospital__card">
                <img src="../asset/img/hospitalCard_cont5.jpg" alt="">
                <div class="hospital__cardText">
                    <h4>위드동물병원</h4>
                    <address>경기 시흥시 정왕대로 230</address>
                </div>
                <div class="hospital__cardTag">
                    <span>#최소절개</span>
                    <span>#중성화</span>
                </div>
            </div>
            <div class="hospital__card">
                <img src="../asset/img/hospitalCard_cont6.jpg" alt="">
                <div class="hospital__cardText">
                    <h4>메종동물병원</h4>
                    <address>서울 중구 다산로 230</address>
                </div>
                <div class="hospital__cardTag">
                    <span>#수술전문</span>
                    <span>#호텔</span>
                </div>
            </div>
            <div class="hospital__card">
                <img src="../asset/img/hospitalCard_cont7.jpg" alt="">
                <div class="hospital__cardText">
                    <h4>배곧도담동물병원</h4>
                    <address>경기도 시흥시 배곧1로 27-16</address>
                </div>
                <div class="hospital__cardTag">
                    <span>#수술</span>
                    <span>#예방접종</span>
                </div>
            </div>
            <div class="hospital__card">
                <img src="../asset/img/hospitalCard_cont8.jpg" alt="">
                <div class="hospital__cardText">
                    <h4>바우미우동물병원</h4>
                    <address>서울 중구 다산로 175</address>
                </div>
                <div class="hospital__cardTag">
                    <span>#종합</span>
                    <span>#위생</span>
                </div>
            </div>
            <div class="hospital__card">
                <img src="../asset/img/hospitalCard_cont9.jpg" alt="">
                <div class="hospital__cardText">
                    <h4>라온동물병원</h4>
                    <address>서울 용산구 회나무로13길 6</address>
                </div>
                <div class="hospital__cardTag">
                    <span>#16년차</span>
                    <span>#영어진료</span>
                </div>
            </div> -->
        </div>
        <div class="board__pages">
                <ul>
<?php
    $sql = "SELECT count(HosID) FROM Hospital";
    $result = $connect -> query($sql);

    $HosCount = $result -> fetch_array(MYSQLI_ASSOC);
    $HosCount = $HosCount['count(HosID)'];

    

    // 총 페이지 갯수
    $HosCount = ceil($HosCount / $viewNum);

    // echo $HosCount;

    // 현재 페이지 기준으로 보여주고 싶은 갯수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    // 처음 페이지 초기화

    if($startPage < 1) $startPage = 1;

    // 마지막 페이지 초기화
    if($endPage >= $HosCount) $endPage = $HosCount;

    // 이전 페이지 , 처음 페이지
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='hospitalMain.php?page=1'>처음으로</li>";
        echo "<li><a href='hospitalMain.php?page={$prevPage}'>이전</li>";
    }

    // 페이지 넘버 표시
    for($i = $startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo"<li class='{$active}'><a href='hospitalMain.php?page={$i}'>{$i}</a></li>";
    }

    // 다음 페이지 , 마지막 페이지
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='hospitalMain.php?page={$nextPage}'>다음</li>";
        echo "<li><a href='hospitalMain.php?page={$HosCount}'>마지막으로</li>";
    }
?>
                </ul>
            </div>
        <!-- <div class="hospitalMain__pages">
            <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
            </ul>
        </div> -->
    </section>

    <!-- header -->
    <?php include "../include/footer.php"?>
    <!-- //header -->


</body>

<script src="../asset/js/header_hamburger.js"></script>
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

    //카테고리 선택
    category.forEach((cate, index) => {
        cate.addEventListener("click", (link)=>{
            link.preventDefault();
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
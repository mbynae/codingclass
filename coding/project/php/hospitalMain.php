<?php

    include "../connect/connect.php";

    $HosSql = "SELECT * FROM Hospital";
    $HosResult = $connect -> query($HosSql);

<<<<<<< Updated upstream
    
    $HosSql2 = "SELECT * FROM Hospital";
    $HosResult2 = $connect -> query($HosSql2);

    $HosInfo = $HosResult -> fetch_array(MYSQLI_ASSOC);

    $hosCategory = $_GET['category'];


    if(isset($_GET['category'])){
        $category = $_GET['category'];
        $HosSql = "SELECT * FROM Hospital WHERE hosCategory='$category'";
        
    } else {
        $HosSql = "SELECT * FROM Hospital";
    }

    $allCategory = "SELECT DISTINCT HosCategory FROM Hospital";
    $allResult = $connect -> query($allCategory);
?>

=======
    // $HosInfo = $HosResult -> fetch_array(MYSQLI_ASSOC);

?>


>>>>>>> Stashed changes
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>병원 메인 페이지</title>

    <link rel="stylesheet" href="../asset/css/hospital/hospital_main.css">
    <style>
<<<<<<< Updated upstream
        .category__contents div > a {
            color: #26675B;
        }
        .category__contents div {
            color: #26675B;
            line-height: 60px;
            cursor: pointer;
            font-size: 16px;
        }
              
=======
        
               
>>>>>>> Stashed changes
        
    </style>
</head>

<body>
    <!-- header -->
    <?php include "../include/header.php"?>
    <!-- //header -->

    <section id="searchType" class="container">
<<<<<<< Updated upstream
        <?php include "../include/searchBox.php"?>
    </section>


    <section id="mainSliderType">
        <div id="slider__inner">
            <div id="hos__slider">
            <?php
                if(isset($_GET['page'])){
                    $slipage = (int) $_GET['page'];
                } else {
                    $slipage = 1;
                }

                $sliviewNum =6;
                $sliviewLimit = ($sliviewNum * $slipage) - $sliviewNum;


                $HosSql2 .= " ORDER BY HosID DESC LIMIT {$sliviewLimit}, {$sliviewNum}";
                $sliHosResult = $connect -> query($HosSql2);

                $slicount = $sliHosResult -> num_rows;

                if($HosSql2){
                    $slicount = $HosResult -> num_rows;
        
                    if($slicount > 0 ){
                        for($i=1; $i <= $slicount; $i++){
                            $sliHos = $sliHosResult -> fetch_array(MYSQLI_ASSOC);
                            echo "<div class='slider__item' style='background-image: url(../asset/img/hospital/".$sliHos['HosImgFile'].")'>";
                                echo "<div class='slider__text'>";
                                    echo "<div class='slider__textName'>";
                                        echo "<h2>".$hosCategory."</h2>";
                                        echo "<h3>".$sliHos['HosName']."</h3>";
                                        echo "<span><a href='hospitalView.php?page=".$sliHos['HosID']."' class='blind'>버튼</a></span>";
                                        echo "<div class='slider__tag'>";
                                            echo "<span>#수술</span>";
                                            echo "<span>#예방접종</span>";
                                        echo "</div>";
                                    echo "</div>";
                                    echo "<p>".$sliHos['HosCon1']."</p>";
                                    echo "<a href='hospitalView.php?page=".$sliHos['HosID']."'>더 알아보기</a>";
                                echo "</div>";
                            echo "</div>";
                        }
                    }
                }
            ?>

                <!-- <div class="slider__item" style="background-image: url(../asset/img/hospital_mainBanner01.jpg)">
                    <div class="slider__text">
                        <div class="slider__textName">
                            <h3>배곧도담병원</h3>
                            <span><a href="#" class="blind">버튼</a></span>
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
                </div>
                <div class="slider__item" style="background-image: url(../asset/img/hospital_mainBanner02.jpg)">
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
                </div>
                <div class="slider__item" style="background-image: url(../asset/img/hospital_mainBanner03.jpg)">
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
                </div>
                <div class="slider__item" style="background-image: url(../asset/img/hospital_mainBanner04.jpg)">
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
                </div>
                <div class="slider__item" style="background-image: url(../asset/img/hospital_mainBanner05.jpg)">
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
                </div>
                <div class="slider__item" style="background-image: url(../asset/img/hospital_mainBanner06.jpg)">
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
                </div> -->
            </div>
            <div class="slider__buttons">
                <button id="prev"></button>
                <button id="next"></button>
            </div>
        </div>
    </section>

    <!-- <section id="mainSliderType" class="container">
=======
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
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
            <a href="hospitalView.php?page=<?=$HosInfo['HosID']?>">더 알아보기</a>
        </div>
    </section> -->
=======
            <a href="#">더 알아보기</a>
        </div>
    </section>
>>>>>>> Stashed changes

    <section id="infomationType" class="container">
        <!-- 카테고리 박스 -->
        <div class="Info_textBox">
<<<<<<< Updated upstream
            <h2>A.Hospital</h2>
            <div class="category__box">
                <div class="category__title">
                    <nav class="category__titleChoice">
                        <li>
                            <a href="#" class="cate1 tapActive">
                                <img src="../asset/img/pin.svg" alt="">
                                지역
                            </a>
                        </li>
                        <li>
                            <a href="#" class="cate2">
                                <img src="../asset/img/disease.svg" alt="">
                                병명
                            </a>
                        </li>   
                        <li>
                            <a href="#" class="cate3">
                                <img src="../asset/img/surgery.svg" alt="">
                                수술
                            </a>
                        </li>
                    </nav>
                </div>
                <div>
                    <!-- 지역 카테고리 -->
                    <div class="category__contents regionCho tapActive">
                        <?php
                        
                            foreach($allResult as $all){ ?>
                                <div>                                    
                                    <a href="hospitalMain.php?category=<?=$all['HosCategory']?>"><?=$all['HosCategory']?></a>
                                </div>
                        <?php }
                            ?>
                          
                            <!-- <div>
                                <a href="#">서울</a>
                            </div>
                            <div>
                                <a href="#">경기도</a>
                            </div>
                            <div>
                                <a href="#">인천</a>
                            </div>
                            <div>
                                <a href="#">충청도</a>
                            </div>
                            <div>                                
                                <a href="#">강원도</a>
                            </div>
                            <div>
                                <a href="#">강원도</a>
                            </div>
                            <div>
                                <a href="#">경상도</a>
                            </div>
                            <div>
                                <a href="#">제주도</a>
                            </div> -->
                        </div>
                        <!-- 질병 카테고리 -->
                        <div class="category__contents diseaseCho">
                            <div>
                                <label for="disease1">파보</label>
                                <input type="radio" id="disease1" name="disease1" value="파보">
                            </div>
                            <div>
                                <label for="disease2">홍역</label>
                                <input type="radio" id="disease2" name="disease2" value="홍역">
                            </div>
                            <div>
                                <label for="disease3">방광암</label>
                                <input type="radio" id="disease3" name="disease3" value="방광암">
                            </div>
                            <div>
                                <label for="disease4">골육종</label>
                                <input type="radio" id="disease4" name="disease4" value="골육종">
=======
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
>>>>>>> Stashed changes
                            </div>
                        </div>
                        <!-- 수술명 카테고리 -->
                        <div class="category__contents surgeryCho">
                            <div>
<<<<<<< Updated upstream
                                <label for="Operation1">슬개골</label>
                                <input type="radio" id="Operation1" name="Operation1" value="슬개골">
                            </div>
                            <div>
                                <label for="Operation2">중성화</label>
                                <input type="radio" id="Operation2" name="Operation2" value="중성화">
                            </div>
                            <div>
                                <label for="Operation3">내시경</label>
                                <input type="radio" id="Operation3" name="Operation3" value="내시경">
                            </div>
                        </div>
                    </div>
=======
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

>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
                $viewNum = 8;
                $viewLimit = ($viewNum * $page) - $viewNum;


                $HosSql .= " ORDER BY HosID DESC LIMIT {$viewLimit}, {$viewNum}";
                $HosResult = $connect -> query($HosSql);


                $count = $HosResult -> num_rows;

                if($HosSql){
=======
                $viewNum = 9;
                $viewLimit = ($viewNum * $page) - $viewNum;


                $HosSql = "SELECT * FROM Hospital ORDER BY HosID DESC LIMIT {$viewLimit}, {$viewNum}";
                $HosResult = $connect -> query($HosSql);

                // echo $HosSql;

                $count = $HosResult -> num_rows;

                if($HosResult){
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
    if(isset($_GET['category'])){
        $sql = "SELECT count(HosID) FROM Hospital WHERE HosCategory = '$category'";
        
    } else {
        $sql = "SELECT count(HosID) FROM Hospital";
    }


=======
    $sql = "SELECT count(HosID) FROM Hospital";
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
    <!-- footer -->
    <?php include "../include/footer.php"?>
    <!-- //footer -->
=======
    <!-- header -->
    <?php include "../include/footer.php"?>
    <!-- //header -->
>>>>>>> Stashed changes


</body>

<<<<<<< Updated upstream
<!-- <script src="../asset/js/header_hamburger.js"></script> -->
<script>

    //슬라이더 효과
    document.getElementById("next").onclick = function(){
        let lists = document.querySelectorAll(".slider__item");
        document.getElementById("hos__slider").appendChild(lists[0]);
    }

    document.getElementById("prev").onclick = function(){
        let lists = document.querySelectorAll('.slider__item');
        document.getElementById("hos__slider").prepend(lists[lists.length-1]);
    }


=======
<script src="../asset/js/header_hamburger.js"></script>
<script>

>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
    const ContentsActive = document.querySelectorAll(".category__contents a");





=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
            e.preventDefault();
=======
>>>>>>> Stashed changes
            categoryCircle.forEach(rem => {
                rem.classList.remove("tapActive");
            })
            categoryCircle[i].classList.add("tapActive");
        });
    });

<<<<<<< Updated upstream
    ContentsActive.forEach((e, i)=> {
        e.addEventListener("click", (el, index)=> {
            ContentsActive.forEach((arr) => {
                arr.classList.remove("red")
            })
            ContentsActive[i].classList.add("red");
        })
    })

=======
>>>>>>> Stashed changes


</script>
</html>
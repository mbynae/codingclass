<?php
    include "../connect/connect.php";
    include "../connect/session.php";


    $myMemberID = $_SESSION['myMemberID'];

    $mySql = "SELECT * FROM myMember WHERE myMemberID = {$myMemberID}";
    $myResult = $connect -> query($mySql);

    $myInfo = $myResult -> fetch_array(MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>어서오세요 winimal에</title>

    <!-- 공통 CSS -->
    <link rel="stylesheet" href="../../asset/css/reset.css">
    <link rel="stylesheet" href="../../asset/css/common.css">
    <link rel="stylesheet" href="../../asset/css/font.css">
    <link rel="stylesheet" href="../../asset/css/header.css">

    <!-- 마이페이지 CSS -->
    <link rel="stylesheet" href="../../asset/css/main/mypage.css">

    <style>
        .myPage__inner {
            margin-top: 80px;
            display: flex;
            justify-content: space-between;
        }
        .card {
            width: 49%;
        }
        .card__inner {
            box-sizing: border-box;
            padding: 72px 115px;
        }
        .card img {
            box-sizing: border-box;
        }
        .profile__header {
            display: flex;
        }
        .profile__header h1 {
            margin-top: 18px;
        }
        .profile__header img {
            width: 60px;
            margin-right: 10px;
        }
        .profile__contents h3 {
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 18px;
            color: #6CC4B3;
        }
        .profile__contents p {
            color: #505050;
            line-height: 25.2px;
            font-weight: 200;
        }
        .profile__box {
            border-radius: 10px;
            background-color: #fff;
            margin-top: 60px;
            display: flex;
            justify-content: space-between;
            padding: 20px;
            margin-bottom: 130px;
            box-sizing: border-box;
            box-shadow: 8px 8px 20px 2px rgba(222, 222, 222, 0.4);
        }
        .profile__box p {
            color: #6cc4b3;
            font-size: 16px;
        }
        .profile__box img {
            width: 18px;
        }
        .winimal {
            width: 92px;
        }

        /* msg */
        .msg {
            font-size: 14px !important;
        }

        /* information */
        .information__inner {
            position: relative;
            background: #F9FAFB;
        }
        .information__inner h3 {
            text-align: center;
            font-size: 16px;
            color: #6cc4b3;
        }
        .information__inner .closeBtn {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 16p9x;
            color: #6cc4b3;
        }
        .information__wrap {            
            display: flex;
            justify-content: space-between;
            padding: 50px 340px;
        }
        .information__card {
            width: 48%;
            height: 400px;
        }
        .information__card h4 {
            margin-bottom: 20px;
        }
        .information__card p {
            font-size: 38px;
        }
        .information__card span {
            color: #6cc4b3;
        }
        .information__card:first-child p {
            margin-bottom: 48px;
        }
        .information__card form {
            padding: 20px 44px;
        }
        .information__card form .join__box {
            width: 100%;
            height: 25px;
            margin-top: 30px;
        }
        .information__card form input {
            border: 0;
            margin: 15px 0;
            height: 25px;
            border-bottom: 1px solid #505050;
            background: inherit;
        }
        .button {
            display: flex;
            position: absolute;
            left: 47%;
            bottom: 10px;
        }
        .button span {
            margin-right: 25px;
        }
        .button_yes {
            background: #F9FAFB;
            cursor: pointer;
        }

        /* sliderType */
        .slider__inner {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .slider {
            width: 23%;
        }
        .slider:first-child img {
            width: 92px;
            margin-left: 110px;
        }
        .slider h2 {
            font-weight: 200;
            font-size: 16px;
            color: #6cc4b3;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        .slider p {
            color: #757575;
            font-weight: 200;
            font-size: 14px;
        }



    </style>

</head>
<body>
    <!-- header -->
    <?php include "../include/header.php"?>
    <!-- //header -->

    <section id="myPage">
        <h2 class="blind">마이페이지</h2>
        <div class="myPage__inner container">
            <div class="card">
                <div class="card__inner">
                    <div class="profile__header">
                        <img src="../asset/img/profile/<?=$myInfo['youImgFile']?>" alt="프로필사진">
                        <h1><?=$myInfo['youName']?>님</h1>
                    </div>
                    <div class="profile__contents">
                        <h3>나의 기록</h3>
                        <p>22 / 19 / 20 동물 병원을 갔다 왔다. 이유는 최근에 상추가 많이 아파해서 갔다 왔으며, 진료 결과는 슬개골이 별로 안좋다고 한다. 소형견에 같이 산지 오래돼서 슬슬 아파오는 것 같다. 그래서 가까운 전문병원에 가서 우선 제대로된 진료를 받았고, 더 안좋아지면 수술을 받아야 할 수 있다고 했다 ㅜㅜ...</p>
                    </div>
                    <div class="profile__box">
                        <p>My Information</p>
                        <img src="../../asset/img/Group 231.svg" alt="">
                    </div>
                    <img class="winimal" src="../../asset/img/winimal.svg" alt="">
                </div>                
            </div>
            <div class="card">
                <img src="../../asset/img/mypageImg.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="information">
        <div class="information__inner container">
            <h3>My  Information open</h3>
            <a class="closeBtn" href="#">Close</a>
            <div class="information__wrap">
                <div class="information__card">
                    <h4>INFORMATION</h4>
                    <p>WELCOME TO <span>WINIMAL</span>!</p>
                    <p>Please<br><span>CHERISH</span> YOUR PERSONAL<span><br>INFORMATION!</span></p>
                </div>
                <div class="information__card">
                    <form action="mypage_complete.php" method="post" onSubmit="return joinChecks()" enctype="multipart/form-data">
                        <fieldset>
                            <legend class="blind">마이페이지</legend>
                            <div class="join__box">
                                <div>
                                    <label class="blind" for="REyouName">이름</label>
                                    <input type="text" id="REyouName" name="REyouName" placeholder="이름" value="<?=$myInfo['youName']?>" disabled>
                                </div>
                                <div class="id_box">
                                    <label class="blind" for="REyouID">ID</label>
                                    <input type="text" id="REyouID" name="REyouID" placeholder="ID" value="" required>
                                    <a href="#3" class="ID_confirm" onclick="IDChecking()">중복확인</a>
                                    <p class="msg" id="REyouIDComment"><!-- * 아이디가 이미 존재합니다. --></p>
                                </div>
                                <div>
                                    <label class="blind" for="REyouPass">비밀번호</label>
                                    <input type="password" id="REyouPass" name="REyouPass" placeholder="비밀번호" required>
                                    <p class="msg" id="REyouPassComment"><!-- * 비밀번호 존재합니다. --></p>
                                </div>
                                <div>
                                    <label class="blind" for="REyouEmail">이메일</label>
                                    <input type="email" id="REyouEmail" name="REyouEmail" placeholder="E-mail" value="<?=$myInfo['youEmail']?>" disabled>
                                </div>
                                <div>
                                    <label class="blind" for="REyouPhone">휴대폰번호</label>
                                    <input type="text" id="REyouPhone" name="REyouPhone" placeholder="휴대번호" value="<?=$myInfo['youPhone']?>" disabled>
                                </div>
                                <div>
                                    <label for="youFile">프로필 사진</label>
                                    <input type="file" name="youFile" id="youFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요!">
                                </div>
                            </div>
                            <div class="button">
                                <span>NO</span>
                                <button class="button_yes" type="submit">YES</button>
                            </div>                                
                        </fieldset>
                </div>
            </div>
        </div>
        
    </section>

    <section id="sliderType">
        <div class="slider__inner container">
            <div class="slider">
                <img src="../../asset/img/Recent.svg" alt="">
            </div>
            <div class="slider">
                <img src="../../asset/img/slider01.jpg" alt="">
                <h2>미소로 동물 병원 방문</h2>
                <p>2022. 10. 18</p>
            </div>
            <div class="slider">
                <img src="../../asset/img/slider02.jpg" alt="">
            </div>
            <div class="slider">
                <img src="../../asset/img/slider03.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include "../include/footer.php"?>
    <!-- //footer -->
    
    <script src="../../asset/js/header_hamburger.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>


        let IDCheck = false;

        function IDChecking(){
            let REyouID = $("#REyouID").val();

            // console.log(REyouID)

            if(REyouID == null || REyouID == ''){
                $("#REyouIDComment").text("아이디를 입력해주세요!!");
            } else {
                $.ajax({
                    type : "POST",
                    url : "mypageCheck.php",
                    data : {"REyouID": REyouID, "type": "IDCheck"},
                    dataType : "json",

                    success : function(data){
                        if(data.result == "good"){
                            $("#REyouIDComment").text("사용 가능한 아이디입니다.");
                            IDCheck = true;
                        } else {
                            $("#REyouIDComment").text("이미 존재하는 아이디입니다.");
                            IDCheck = false;
                        }
                    },
                    

                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
            
        }



        function joinChecks(){

            // 아이디 공백 검사
            if($("#REyouID").val() == ""){
                $("#REyouIDComment").text("아이디를 입력해주세요!");
                return false;
            }

            // 아이디 유효성 검사
            let getyouID = RegExp(/^[A-Za-z0-9_\.\-]/);
            if(!getyouID.test($("#REyouID").val())){
                $("#REyouIDComment").text("아이디를 형식에 맞게 작성해주세요!");
                $("#REyouID").val("");
                return false;
            }

            // 아이디 중복 검사
            if(IDCheck == false){
                $("#REyouIDComment").text("아이디 중복 검사를 해주세요!");
                return false;
            }

            // 비밀번호 공백 검사
            if($("#REyouPass").val() == ""){
                $("#REyouPassComment").text("비밀번호를 입력해주세요!");
                return false;
            }

            // 비밀번호 유효성 검사
            let getYouPass = $("#REyouPass").val();
            let getYouPassNum = getYouPass.search(/[0-9]/g);
            let getYouPassEng = getYouPass.search(/[a-z]/ig);
            let getYouPassSpe = getYouPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

            if(getYouPass.length < 8 || getYouPass.length > 20){
                $("#REyouPassComment").text("8자리 ~ 20자리 이내로 입력해주세요~");
                return false;
            } else if (getYouPass.search(/\s/) != -1){
                $("#REyouPassComment").text("비밀번호는 공백없이 입력해주세요!");
                return false;
            } else if (getYouPassNum < 0 || getYouPassEng < 0 || getYouPassSpe < 0 ){
                $("#REyouPassComment").text("영문, 숫자, 특수문자를 혼합하여 입력해주세요!");
                return false;
            }
            
        }  
    </script>


</body>
</html>
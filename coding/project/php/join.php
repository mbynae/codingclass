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

    <link rel="stylesheet" href="../asset/css/login/join.css">

    <style>
        .join__inner {
            margin: 0 auto;
        }
        .join__inner > h2 {
            margin-bottom: 20px !important;
        }
    </style>

    <!-- join -->
    <link rel="stylesheet" href="../asset/css/login/join.css">
</head>
<body>
<?php include "../include/header.php"?>
    <div class="join__popup">
        <div class="join__inner">
            <h2>회원 가입</h2>
            <form action="join_complete.php" name="join" method="post" onSubmit="return joinChecks()">
                <fieldset>
                        <legend class="blind">회원가입</legend>
                        <div class="join__box">
                            <h3>INFOMATION</h3>
                            <div>
                                <label class="blind" for="youName">이름</label>
                                <input type="text" id="youName" name="youName" placeholder="이름" required>
                                <p class="msg" id="youNameComment"><!-- * 이름은 한글로만. --></p>
                            </div>
                            <div class="choice_gender">
                                <p class="blind" for="youGender">성별</p>
                                <span>
                                    <input type="radio" id="youGenderMale" name="youGender" value="male" required>
                                    <label class="gender" for="youGenderMale">남자</label>
                                    <p class="msg" id="youGenderMaleComment"><!-- * 이메일이 존재합니다. --></p>
                                </span>
                                <span>
                                    <input type="radio" id="youGenderFemale" name="youGender" value="female" required>
                                    <label class="gender" for="youGenderFemale">여자</label>
                                    <p class="msg" id="youGenderFemaleComment"><!-- * 이메일이 존재합니다. --></p>
                                </span>
                            </div>
                            <div class="id_box">
                                <label class="blind" for="joinYouID">ID</label>
                                <input type="text" id="joinYouID" name="joinYouID" placeholder="ID" required>
                                <a href="#3" class="ID_confirm" onclick="IDChecking()">중복확인</a>
                                <p class="msg" id="joinYouIDComment"><!-- * 아이디가 이미 존재합니다. --></p>
                            </div>
                            <div>
                                <label class="blind" for="joinYouPass">비밀번호</label>
                                <input type="password" id="joinYouPass" name="joinYouPass" placeholder="비밀번호" required>
                                <p class="msg" id="joinYouPassComment"><!-- * 비밀번호 존재합니다. --></p>
                            </div>
                            <div class="info_youPassc">
                                <label class="blind" for="joinYouPassC">비밀번호 확인</label>
                                <input type="password" id="joinYouPassC" name="youPassC" placeholder="비밀번호 확인" required>
                                <p class="msg" id="joinYouPassCComment"><!-- * 이메일이 존재합니다. --></p>
                            </div>
                            <h3>E-mail</h3>
                            <div>
                                <label class="blind" for="youEmail">이메일</label>
                                <input type="email" id="youEmail" name="youEmail" placeholder="E-mail" required>
                                <p class="msg" id="youEmailComment"><!-- * 이메일이 존재합니다. --></p>
                            </div>
                            <h3>Phone</h3>
                            <div>
                                <label class="blind" for="youPhone">휴대폰번호</label>
                                <input type="text" id="youPhone" name="youPhone" placeholder="전화번호를 입력해주세요." required>
                                <p class="msg" id="youPhoneComment"><!-- * 이메일이 존재합니다. --></p>
                            </div>
                        </div>
                </fieldset>                                  
                <button class="join__btn" type="submit">가입하기</button>
            </form>
            <div class="close_btn"><a href="main.php">
                <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="#ffffff"/>
                    <path d="M5.33334 4.66675L14.6667 15.3334" stroke="#6CC4B3" stroke-linecap="round"/>
                    <path d="M14.6667 4.66675L5.33333 15.3334" stroke="#6CC4B3" stroke-linecap="round"/>
                </svg>
            </a></div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>


        let IDCheck = false;

        function IDChecking(){
            let youID = $("#joinYouID").val();

            console.log(youID)

            if(youID == null || youID == ''){
                $("#joinYouIDComment").text("아이디를 입력해주세요!!");
            } else {
                $.ajax({
                    type : "POST",
                    url : "joinCheck.php",
                    data : {"youID": youID, "type": "IDCheck"},
                    dataType : "json",

                    success : function(data){
                        if(data.result == "good"){
                            $("#joinYouIDComment").text("사용 가능한 아이디입니다.");
                            IDCheck = true;
                        } else {
                            $("#joinYouIDComment").text("이미 존재하는 아이디입니다.");
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

            // 이름 공백 확인
            if($("#youName").val() == ""){
                $("#youNameComment").text("이름을 입력해주세요");
                return false;
            }

            // 이름 유효성 검사
            let getYouName = RegExp(/^[가-힣]+$/);
            if(!getYouName.test($("#youName").val())){
                $("#youNameComment").text("이름은 한글만 사용 가능합니다.");
                $("youName").val("");
                return false;
            }

            // 아이디 공백 검사
            if($("#joinYouID").val() == ""){
                $("#joinYouIDComment").text("아이디를 입력해주세요!");
                return false;
            }

            // 아이디 유효성 검사
            let getyouID = RegExp(/^[A-Za-z0-9_\.\-]/);
            if(!getyouID.test($("#joinYouID").val())){
                $("#joinYouIDComment").text("아이디를 형식에 맞게 작성해주세요!");
                $("#joinYouID").val("");
                return false;
            }

            // 아이디 중복 검사
            if(IDCheck == false){
                $("#joinYouIDComment").text("아이디 중복 검사를 해주세요!");
                return false;
            }

            // 비밀번호 공백 검사
            if($("#joinYouPass").val() == ""){
                $("#joinYouPassComment").text("비밀번호를 입력해주세요!");
                return false;
            }

            // 비밀번호 유효성 검사
            let getYouPass = $("#joinYouPass").val();
            let getYouPassNum = getYouPass.search(/[0-9]/g);
            let getYouPassEng = getYouPass.search(/[a-z]/ig);
            let getYouPassSpe = getYouPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

            if(getYouPass.length < 8 || getYouPass.length > 20){
                $("#joinYouPassComment").text("8자리 ~ 20자리 이내로 입력해주세요~");
                return false;
            } else if (getYouPass.search(/\s/) != -1){
                $("#joinYouPassComment").text("비밀번호는 공백없이 입력해주세요!");
                return false;
            } else if (getYouPassNum < 0 || getYouPassEng < 0 || getYouPassSpe < 0 ){
                $("#joinYouPassComment").text("영문, 숫자, 특수문자를 혼합하여 입력해주세요!");
                return false;
            }

            // 확인 비밀번호 공백 확인
            if($("#joinYouPassC").val() == ""){
                $("#joinYouPassCComment").text("확인 비밀번호를 입력해주세요!");
                return false;
            }

            // 비밀번호가 동일한지 체크
            if($("#joinYouPassC").val() !== $("#joinYouPassC").val()){
                $("#joinYouPassCComment").text("비밀번호가 동일하지 않습니다.");
                return false;
            }

            // 이메일 공백 검사
            if($("#youEmail").val() == ""){
                $("#youEmailComment").text("이메일을 입력해주세요!");
                return false;
            }

            // 이메일 유효성 검사
            let getYouEmail = RegExp(/^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/);
            if(!getYouEmail.test($("#youEmail").val())){
                $("#youEmailComment").text("이메일 형식에 맞게 작성해주세요!");
                $("#youEmail").val("");
                return false;
            }

            // 휴대폰 번호 공백 확인
            if($("#youPhone").val() == ""){
                $("#youPhoneComment").text("휴대폰번호(000-0000-0000) 입력해주세요");
                return false;
            }

            // 휴대폰 번호 유효성 검사
            let getYouPhone = RegExp(/01[016789]-[^0][0-9]{2,3}-[0-9]{3,4}/);
            if(!getYouPhone.test($("#youPhone").val())){
                $("#youPhoneComment").text("휴대폰 번호가 정확하지 않습니다. 올바른 휴대폰번호(000-0000-0000)를 입력해주세요!");
                $("#youPhone").val("");
                return false;
            }
        }  
    </script>
</body>
</html>
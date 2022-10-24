<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 재설정</title>

    <!-- 공통 CSS -->
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/login/idPassCommon.css">
    
    <!-- 비밀번호 찾기 CSS -->
    <link rel="stylesheet" href="../asset/css/login/Verification2.css">



    <style>

    </style>
</head>
<body>
    <div class="login__popup score inner_height">
        <div class="login__inner">
            <div class="login__header">
                <h3><a href="findID.html">I.D/P.W 찾기</a></h3>
            </div>
            <div class="tab_menu">
                <span class="id"><a href="findID.html">ID</a></span> <em>|</em> <span class="pass active">Password</span>
                <div class="search_contents">
                    <h4 class="user_search passVer_user2">비밀번호 재설정</h4>
                    <div class="emailVerifi">
                        <form action="findPW_reviseCheck.php" name="" method="post" id="findPW" onSubmit="return pwCheck()">
                            <fieldset class="passVer_field">
                                <legend class="blind">비밀번호 재설정</legend>
                                <div class="contentBox">
                                    <h5>비밀번호 재설정</h5>
                                    <div class="first_input">
                                        <label for="youPass" class="blind">새로운 비밀번호</label>
                                        <input type="password" name="youPass" id="youPass" placeholder="새로운 비밀번호를 입력해주세요." class="input__style style1" required>                                        
                                    </div>
                                    <div class="second_input2">
                                        <label for="youPassC" class="blind">비밀번호 확인</label>
                                        <input type="password" name="youPassC" id="youPassC" placeholder="재확인을 위해 다시 입력해주세요." class="input__style" required>
                                        <p class="msg" id="youPassCComment"><!-- * 비밀번호 존재합니다. --></p>
                                    </div>
                                    <p>개인정보의 안전을 위해 비밀번호<br> 유출을 조심해주세요.</p>
                                </div>
                                <button type="submit" class="confirm__btn">인증완료</button>
                            </fieldset>
                        </form>
                    </div>
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

    <!-- 모달 및 탭메뉴 -->
    <!-- <script src="../../asset/js/close_modal.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        // document.querySelector('#findPW').addEventListener("submit",(e)=>{
        //     e.preventDefault();
        //     pwCheck();
        // })
        

        function pwCheck(){
            // 비밀번호가 동일한지 체크
            if($("#youPass").val() !== $("#youPassC").val()){
                alert("비밀번호가 동일하지않습니다.");
                return false;
            }
        }
    </script>

</body>
</html>
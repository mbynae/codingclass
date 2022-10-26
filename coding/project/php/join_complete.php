<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 완료</title>

    <!-- 공통 CSS -->
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">
    <link rel="stylesheet" href="../asset/css/login/idPassCommon.css">

    <!-- 가입완료 -->
    <link rel="stylesheet" href="../asset/css/login/joinCompete.css">
</head>
<body>
<?php include "../include/header.php"?>
    <div class="join__popup">            
        <div class="join__inner">
            <h2>회원 가입</h2>
            <div class="complete_contents">
                <h3>THANK YOU!</h3>
                <figure>
                    <img src="../asset/img/signUpWelcome.jpg" alt="웰컴">
                </figure>
                <p>
                    위니멀과 함께 해주셔서 감사합니다<br>
                    언제든지 필요할 때 찾아와주세요!
                </p>
                <?php
                        include "../connect/connect.php";

                        $youName = $_POST["youName"];
                        $youGender = $_POST["youGender"];
                        $youID = $_POST["joinYouID"];
                        $youPass = $_POST["joinYouPass"];
                        $youEmail = $_POST["youEmail"];
                        $youPhone = $_POST["youPhone"];
                        $regTime = time();

                        $youName = $connect -> real_escape_string(trim($youName));
                        $youGender = $connect -> real_escape_string(trim($youGender));
                        $youID = $connect -> real_escape_string(trim($youID));
                        $youPass = $connect -> real_escape_string(trim($youPass));
                        $youEmail = $connect -> real_escape_string(trim($youEmail));
                        $youPhone = $connect -> real_escape_string(trim($youPhone));


                        // 회원가입
                        $sql = "INSERT INTO myMember (youName, youGender, youID, youPass, youEmail, youPhone , youImgFile , regTime) VALUES('$youName', '$youGender','$youID', '$youPass', '$youEmail', '$youPhone', 'basic.jpg' , '$regTime')";
                        $result = $connect -> query($sql);



                        if($result){
                            echo "회원가입을 축하합니다. 로그인해주세요!";
                        } else {
                            echo "에러발생 -- 관리자에게 문의하세요.";
                        }
                    ?>
            </div>
            <div class="go_login">
                <a href="../php/main.php">로그인 하러가기!</a>
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

    <script>

    </script>
</body>
</html>
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
    <title>회원가입 정보 입력 페이지</title>

    <!-- 공통 CSS -->
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">
    <link rel="stylesheet" href="../asset/css/login/idPassCommon.css">

    <!-- 비밀번호 찾음 CSS -->
    <link rel="stylesheet" href="../asset/css/login/idPassConfirm.css">

</head>
<body>
<?php include "../include/header.php"?>
    <div class="login__popup score inner_height">
        <div class="login__inner">
            <div class="login__header">
                <h3><a href="findID.html">I.D/P.W 찾기</a></h3>
            </div>
            <div class="tab_menu">
                <span class="id active">ID</span> <em>|</em> <span class="pass"><a href="findPW_email.html">Password</a></span>
                <div class="search_contents">
                    <h4 class="user_search">아이디 찾기</h4>
                    <div class="id_find">
                        <figure class="findLogo">
                            <img src="../asset/img/loginFind.jpg" alt="">
                        </figure>
                        <p>당신의 소중한 아이디를 찾았습니다!</p>
                    </div>
                    <div class="searchIdBox">
                        <?php
                            echo "<h5>ID</h5><div class='input__style'>귀하의 아이디는 <span class='youID'>".$_SESSION['youID']."</span> 입니다.</div>";

                            unset($_SESSION['youName']);
                            // echo $_SESSION['youID'];                            
                        ?>                    
                </div>
                <div class="go_login">
                    <a href="loginpopup.php">로그인</a>
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
    <script src="../asset/js/close_modalPHP.js"></script>
</body>
</html> 
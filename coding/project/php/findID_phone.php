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

    <!-- 아이디찾기 CSS -->
    <link rel="stylesheet" href="../asset/css/login/Verification.css">

</head>
<body>
<?php include "../include/header.php"?>
    <div class="login__popup score inner_height">
        <div class="login__inner">
            <div class="login__header">
                <h3><a href="findIDPass.php">I.D/P.W 찾기</a></h3>
            </div>
            <div class="tab_menu">
                <span class="id active">ID</span> <em>|</em> <span class="pass"><a href="findIDPass.php">Password</a></span>
                <div class="search_contents">
                    <h4 class="user_search">아이디 찾기</h4>
                    <div class="emailVerifi">
                        <form action="findID_phoneCheck.php" name="" method="post">
                            <fieldset>
                                <legend class="blind">이메일 인증</legend>
                                <div class="contentBox">
                                    <p>소중한 아이디를 기억해주세요!</p>
                                    <h5>휴대번호 인증</h5>
                                    <div class="first_input">
                                        <label for="youName" class="blind">이름</label>
                                        <input type="text" name="youName" id="youName" placeholder="이름을 입력해주세요." class="input__style style1" required>
                                    </div>
                                    <div>
                                        <label for="youPhone" class="blind">휴대전화 번호</label>
                                        <input type="text" name="youPhone" id="youPhone" placeholder="휴대번호를 입력해주세요." class="input__style" required>
                                    </div>
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
    <script src="../asset/js/close_modalPHP.js"></script>
</body>
</html>
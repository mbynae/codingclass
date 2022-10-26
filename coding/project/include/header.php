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
    <title>헤더</title>

    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/header.css">
    <link rel="stylesheet" href="../asset/css/font.css">

    <link rel="stylesheet" href="../asset/css/login/idPassCommon.css">
    <link rel="stylesheet" href="../asset/css/login/login.css">
    <style>
               
        
    </style>
</head>

<body>
    <header id="headerType" class="header__wrap">
        <div class="header__inner container">
            <div class="header__logo">
                <a href="../php/main.php">winimal</a>
            </div>
            <nav class="header__menu">
                <ul>
                    <li><a href="#">A.hopsital</a></li>
                    <li><a href="#">Disease</a></li>
                    <li><a href="../php/board.php">Community</a></li>
                    <li><a href="#">Pet shop</a></li>
                    <?php if( isset($_SESSION['myMemberID']) ){ ?>
                    <li><a href="../php/mypage.php" class="black">My page</a></li>
                    <li><a href="../php/logout.php">LOGOUT</a></li>
                <?php } else { ?>                    
                    <li><a href="../php/loginpopup.php" class="login">LOGIN</a></li>
                <?php } ?>
                </ul>
            </nav>
            <div class="ham_menu">
                <input type="checkbox">
                <div></div>
                <div></div>
                <div></div>
            </div>                
        </div>
    </header>

    <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <h3>winimal Login</h3>
            </div>
            <div class="login__welcome">
                <h3>어서오세요! 위니멀에!</h3>
                <figure>
                    <img src="../asset/img/loginWelcome.jpg" alt="login">
                </figure>
            </div>
            <div class="login__contents">
                <form name="login" action="loginSave.php" method="POST">
                    <fieldset>
                        <legend class="blind">로그인 입력폼</legend>
                        <div class="text_input">
                            <div>
                                <label class="blind" for="youID"></label>
                                <input type="id" name="youID" id="youID" placeholder="아이디를 입력해주세요." class="input__style" required>
                            </div>
                            <div>
                                <label class="blind" for="youPass">비밀번호</label>
                                <input type="password" name="youPass" id="youPass" placeholder="비밀번호를 입력해주세요." class="input__style" required>
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" name="loginBox" id="loginBox" class="login__box">
                            <label for="loginBox">로그인 상태 유지</label>
                        </div>
                        <div class="loginBox_btn">
                            <div class="btn_login">
                                <button>Login</button>
                            </div>
                            <div class="btn_kakao">
                                <a href="#">KaKao Login</a>            
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="login__footer">
                <div class="footer_btn">
                    <li><a href="../php/joinAgree.php" class="loginpopup_joinBtn">회원가입</a></li>
                    <li><a href="findIDPass.php">ID / PW 찾기</a></li>
                </div>
            </div>
            <div class="close_btn">
                <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="#ffffff"/>
                    <path d="M5.33334 4.66675L14.6667 15.3334" stroke="#6CC4B3" stroke-linecap="round"/>
                    <path d="M14.6667 4.66675L5.33333 15.3334" stroke="#6CC4B3" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
    </div>

</body>

<script src="../asset/js/header_hamburger.js"></script>
<script>
    
</script>
</html>
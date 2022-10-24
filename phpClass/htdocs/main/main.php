<?php
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트 만들기</title>

    <?php include "../include/link.php" ?>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main">
        <section id="banner">
            <h2>블로그 소개입니다.</h2>
            <div class="banner__inner container">
                <div class="img">
                    <img src="../assets/img/bg01.jpg" alt="이미지">
                </div>
                <div class="desc">
                    어떤 일이라도 <em>노력</em>하고 즐기면  그 결과는 <em>빛</em>을 바란다고 생각합니다.
                    신입의 <em>열정</em>과 <em>도전정신</em>을 깊숙히 새기며 <em>배움</em>에 있어 겸손함을
                    유지하며 세부적인 곳까지 파고드는 <em>개발자</em>가 되겠습니다.
                </div>
            </div>
        </section>
        <!-- //banner -->
    </main>

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <!-- 로그인 팝법 -->
    <!-- <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <h3>로그인</h3>
            </div>
            <div class="login__content">
                <form name="login" action="loginSave.php" method="post">
                    <fieldset>
                        <legend>로그인 입력폼</legend>
                        <div>
                            <label for="youEmail">이메일</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPass">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                        </div>
                        <button type="submit" class="input__button">로그인</button>
                    </fieldset>
                </form>
            </div>
            <div class="login__footer">
                <div class="btn">
                    <a href="#">회원가입</a>
                    <a href="#">아이디 찾기</a>
                    <a href="#">비밀번호 찾기</a>
                </div>
                <ul class="desc">
                    <li>비밀번호 분실시 본인 책임입니다.</li>
                    <li>회원가입하면 이익 없습니다. 도움 안됩니다.</li>
                    <li>개발자가 초급이여서 개인 정보는 잘 팔릴겁니다.</li>
                </ul>
                <button type="button" class="btn-close"><span>닫기</span></button>
            </div>
        </div>
    </div> -->

    <?php include "../login/login.php"?>
    <!-- //로그인 -->

    <script src="../assets/js/custom.js"></script>
    <!-- script -->

    <script>
        // const login1 = document.querySelector(".nav li a");
        // const login2 = document.querySelector(".right li a");
        // const loginPopup = document.querySelector(".login__popup");
        // const btnClose = document.querySelector(".btn-close");


        // login1.addEventListener("click", () => {
        //     loginPopup.classList.add("open");
        // });

        // login2.addEventListener("click", () => {
        //     loginPopup.classList.add("open");
        // });
        // btnClose.addEventListener("click", () => {
        //     loginPopup.classList.remove("open");
        // });
        
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <!-- link -->
    <?php include "../include/link.php"?>
</head>

<body>
    <!-- header -->
    <?php include "../include/header.php"?>



    <main id="main">
        <section id="banner">
            <h2>회원가입 페이지 입니다.</h2>
            <div class="banner__inner2 container">
                <div class="img">
                    <img src="../assets/img/banner_bg03.svg" alt="배너 이미지">
                </div>
                <div class="desc">
                    어떤 일이라도 <em>노력</em>하고 즐기면 그 결과는 <em>빛</em>을 바란다고 생각합니다.<br>
<?php
    include "../connect/connect.php";

    $youEmail = $_POST["youEmail"];
    $youNickName = $_POST["youNickName"];
    $youName = $_POST["youName"];
    $youPass = $_POST["youPass"];
    $youBirth = $_POST["youBirth"];
    $youPhone = $_POST["youPhone"];
    $regTime = time();

    $youEmail = $connect -> real_escape_string(trim($youEmail));
    $youNickName = $connect -> real_escape_string(trim($youNickName));
    $youName = $connect -> real_escape_string(trim($youName));
    $youPass = $connect -> real_escape_string(trim($youPass));
    $youBirth = $connect -> real_escape_string(trim($youBirth));
    $youPhone = $connect -> real_escape_string(trim($youPhone));

    $youPass = sha1("web".$youPass);

    // 회원가입
    $sql = "INSERT INTO myAdminMember (youEmail, youNickName, youName, youPass, youBirth, youPhone, regTime) VALUES('$youEmail', '$youNickName', '$youName', '$youPass', '$youBirth', '$youPhone', '$regTime')";
    $result = $connect -> query($sql);

    if($result){
        echo "회원가입을 축하합니다. 로그인해주세요!";
    } else {
        echo "에러발생 -- 관리자에게 문의하세요.";
    }
?>
                </div>
                <a href="main.html">메인으로</a>
            </div>
        </section>
        <!-- //banner -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    <!-- 아이디 찾기 팝업 -->
    <!-- 아이디 찾기 에러 팝업 -->
    <!-- 아이디 찾기 완료 팝업 -->
    <!-- 비밀번호 찾기 팝업 -->
    <!-- 비밀번호 찾기 에러 팝업 -->
    <!-- 비밀번호 찾기 완료 팝업 -->
</body>

</html>
<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $myMemberID = $_SESSION['myMemberID'];

    $BoardSql = "SELECT count(*) FROM myBoard WHERE myMemberID = {$myMemberID}";
    $BoResult = $connect -> query($BoardSql);

    $BoInfo = $BoResult -> fetch_array(MYSQLI_ASSOC);

    $CommentSql = "SELECT count(*) FROM myComment WHERE myMemberID = {$myMemberID}";
    $CoResult = $connect -> query($CommentSql);

    $CoInfo = $CoResult -> fetch_array(MYSQLI_ASSOC);
?>


<!-- boardLoginBanner -->
<section id="boardLoginBanner" class="loginBanner">
    <h2 class="blind">loginBanner</h2>
    <div class="lB__inner">
        <figure class="MyprofileL">
            <img src="../asset/img/profile/<?=$myInfo['youImgFile']?>" alt="프로필사진">
                <figcaption><?=$_SESSION['youName']?>님 어서오세요!</figcaption>
            <a href="../php/logout.php">LOGOUT</a>
        </figure>
        <div class="Myprofile">
            <ul>
                <li>가입일 : <?=date('Y-m-d', $myInfo['regTime'] )?></li>
                <li><a href="../php/mypage.php">나의 정보</a></li>
                <li><a href="../php/mypage.php">나의 반려견</a></li>
                <li>나의 글 : <?=$BoInfo["count(*)"]?>개</li>
                <li>댓글 수 : <?=$CoInfo["count(*)"]?>개</li>
            </ul>
        </div>
    </div>
</section>
<!-- //boardLoginBanner -->
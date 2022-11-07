<?php
    if( !isset($_SESSION['myMemberID'])){
        //로그인 페이지 이동
        echo "<script>alert('로그인 먼저 해주세요!'); location.href='main.php';</script>";
        // echo "로그인을 먼저 해주세요!!";
    }
?>

<script>
</script>
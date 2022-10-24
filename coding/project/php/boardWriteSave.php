<?php
    include "../connect/connect.php";
    include "../connect/session.php";



    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);
    $boardCate = $_POST['boardCate'];
    $boardLike = 0;
    $boardView = 1;
    $regTime = time();
    $myMemberID = $_SESSION['myMemberID'];

    $sql = "INSERT INTO myBoard (myMemberID, boardTitle, boardContents, boardCate, boardLike, boardView,  regTime) VALUES('$myMemberID', '$boardTitle', '$boardContents', '$boardCate', '$boardLike', '$boardView', '$regTime')";
    $connect -> query($sql);
?>


<script>
    location.href = "board.php";
</script>
<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $myBoardID = $_GET['myBoardID'];
    $myBoardID = $connect -> real_escape_string($myBoardID);

    $sql = "DELETE FROM myBoard WHERE myBoardID = {$myBoardID}";
    $connect -> query($sql);
?>

<script>
    location.href="board.php";
</script>
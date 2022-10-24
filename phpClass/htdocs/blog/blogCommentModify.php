<?php
    include "../connect/connect.php";

    $commentMsg = $_POST["msg"];
    $commentPass = $_POST["pass"];
    $commentID = $_POST["commentID"];

    $sql = "UPDATE myComment SET commentMsg = '{$commentMsg}', commentPass = '{$commentPass}' WHERE myCommentID = '{$commentID}'";
    $result = $connect -> query($sql);

    echo json_encode(array("info" => $commentID));
?>
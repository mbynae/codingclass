<?php
    include "../connect/connect.php";
    // include "../connect/session.php";

    // $myMemberID = $_SESSION['myMemberID'];

    $myBoardID = $_POST['boardID'];
    $commentName = $_POST["name"];
    $commentPass = $_POST["pass"];
    $commentMsg = $_POST["msg"];
    $regTime = time();

    $sql = "INSERT INTO myComment (myMemberID, myBoardID, commentName, commentMsg, commentPass, commentDelete, regTime) VALUES ('1','$myBoardID','$commentName','$commentMsg','$commentPass','0','$regTime')";
    $result = $connect -> query($sql);

    echo json_encode(array("info" => $sql));

?>
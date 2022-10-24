<?php

    include "../connect/connect.php";
    include "../connect/session.php";

    $type = $_POST['type'];
    $comment = $_POST['comment'];
    $myMemberID = $_SESSION['myMemberID'];
    $myboardID = $_POST['myboardID'];
    $regTime = time();

    
    $type = $connect -> real_escape_string(trim($type));
    $comment = $connect -> real_escape_string(trim($comment));
    $myMemberID = $connect -> real_escape_string(trim($myMemberID));
    $myboardID = $connect -> real_escape_string(trim($myboardID));
    $regTime = $connect -> real_escape_string(trim($regTime));
  
    if($type == "textCheck"){
        $sql = "INSERT INTO comment (myboardID, myMemberID, comment, regTime) VALUES( '$myboardID', '$myMemberID', '$comment', '$regTime')";
        $result = $connect -> query($sql);
    }
    $jsonResult = "bad";

    // 데이터 유무 확인
    if($result){
        $jsonResult = "good";
    }

    echo json_encode(array("result" => $jsonResult));

?>
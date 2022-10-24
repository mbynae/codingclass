<?php
    include "../connect/connect.php";

    // 변수 설정
    $type = $_POST['type'];

    // 쿼리문 생성
    // $sql = "SELECT youEmail, youNickName FROM myAdminMember WHERE youEmail = '{$youEmail}'";
    // $sql = "SELECT youEmail, youNickName FROM myAdminMember WHERE youNickName = '{$youNickName}'";

    $sql = "SELECT youID FROM myMember ";

    if($type == "IDCheck"){
        $youID = $connect -> real_escape_string(trim($_POST['youID']));
        $sql .= "WHERE youID = '{$youID}'";
    }


    $result = $connect -> query($sql);
    $jsonResult = "bad";

    // 데이터 유무 확인
    if($result -> num_rows == 0){
        $jsonResult = "good";
    }

    echo json_encode(array("result" => $jsonResult));

?>
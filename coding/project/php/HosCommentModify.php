<?php
    include "../connect/connect.php";

    $commentPass = $_POST['pass'];
    $commentmsg = $_POST["commentmsg"];
    $HosID = $_POST["commentID"];

    

    $sql = "UPDATE HosComment SET commentMsg = '{$commentmsg}' WHERE HosID = {$HosID} AND commentPass = {$commentPass}";
    $result = $connect -> query($sql);

    echo json_encode(array("info" => $sql));


?>
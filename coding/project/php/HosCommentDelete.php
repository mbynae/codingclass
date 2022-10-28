<?php
    include "../connect/connect.php";

    $commentPass = $_POST['pass'];
    $HosID = $_POST["commentID"];

    $sql = "DELETE FROM HosComment WHERE HosID = {$HosID} AND commentPass = {$commentPass}";
    $result = $connect -> query($sql);

    echo json_encode(array("info" => $sql));

?>
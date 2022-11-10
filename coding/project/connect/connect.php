<?php
    $host = "localhost";
    $user = "ipkg72102";
    $pass = "kdb7913!";
    $db = "ipkg72102";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    // if(mysqli_connect_errno()){
    //     echo "Database Connect False";
    // } else {
    //     echo "Database Connect True";
    // }


?>
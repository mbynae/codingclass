<?php
    $host = "localhost";
    $user = "leesh3432";
    $pass = "gkrtks12!";
    $db = "leesh3432";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    // if(mysqli_connect_errno()){
    //     echo "Database Connect False";
    // } else {
    //     echo "Database Connect True";
    // }


?>
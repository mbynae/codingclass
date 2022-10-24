<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $myBoardID = $_POST['myBoardID'];
        $youName = $_POST['youName'];
        $youEmail = $_POST['youEmail'];


        // echo $youName;
        // echo $youEmail;

        $sql = "SELECT youID FROM myMember WHERE (youName = '{$youName}' && youEmail = '{$youEmail}')";
        $result = $connect -> query($sql);

        $info = $result->fetch_array(MYSQLI_ASSOC);


        $_SESSION['youID'] = $info['youID'];


        if($_SESSION['youID']){
            echo "<script>location.href='findID_confirm.php';</script>";
        } else {
            echo "<script>alert('이름 혹은 이메일이 틀렸습니다!')</script>";
            echo "<script>location.href='findID_email.php';</script>";
        }
    ?>
</body>
<script>
    
</script>
</html>
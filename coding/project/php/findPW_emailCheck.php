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

        $youName = $_POST['youName'];
        $youID = $_POST['youID'];
        $youEmail = $_POST['youEmail'];


        // echo $youName;
        // echo $youEmail;

        $sql = "SELECT myMemberID FROM myMember WHERE (youName = '{$youName}' AND youID = '{$youID}' AND youEmail = '${youEmail}')";
        $result = $connect -> query($sql);

        $info = $result->fetch_array(MYSQLI_ASSOC);


        // echo $sql;
        // $info['myMemberID'];

        $_SESSION['myMemberID'] = $info['myMemberID'];




        if($info['myMemberID']){
            echo "<script>location.href='findPW_revise.php';</script>";
        } else {
            echo "<script>alert('이름, 아이디 혹은 이메일이 틀렸습니다!')</script>";
            echo "<script>location.href='findPW_email.php';</script>";
        }
    ?>
</body>
<script>

    
    
</script>
</html>
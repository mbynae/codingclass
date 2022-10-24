<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $youPass = $_POST['youPass'];
        $myMemberID = $_SESSION['myMemberID'];

        // echo $_SESSION['myMemberID']."<br>";
        // echo $youPass."<br>";
        $sql = "UPDATE myMember SET youPass = '{$youPass}' WHERE myMemberID = '{$myMemberID}'";
        $result = $connect -> query($sql);
    ?>
    
</body>
<script>
    location.href="../php/findPW_confirm.php";
</script>
</html>
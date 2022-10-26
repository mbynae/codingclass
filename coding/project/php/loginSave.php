<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .errCenter {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<?php
                        include "../include/header.php";
                        include "../connect/connect.php";
                        include "../connect/session.php";

                        $youID = $_POST['youID'];
                        $youPass = $_POST['youPass'];


                        function msg($alert){
                            echo "<p class='alert'>{$alert}</p>";
                        }

                        // 아이디 검사
                        if($youID == null || $youID == ''){
                            msg("아이디를 입력해주세요!");
                            exit;
                        }

                        // // 비밀번호 검사
                        if( $youPass == null || $youPass == '' ){
                            msg("비밀번호를 입력해주세요!");
                            exit;
                        }

                        // 데이터 가져오기 --> 유효성 검사  --> 데이터 조회  --> 로그인
                        $sql = "SELECT myMemberID, youID, youName, youPass FROM myMember WHERE youID = '$youID' AND youPass = '$youPass'";
                        $result = $connect -> query($sql);

                        if($result){
                            $count = $result -> num_rows;

                            if($count == 0){
                                // msg("아이디 또는 비밀번호가 틀렸습니다.");
                                echo "<h2 class='errCenter'>아이디 또는 비밀번호가 틀렸습니다!!</h2>";
                                echo "<p class='errCenter'><a href='../php/main.php'>메인으로</a><p>";
                            } else {
                                $info = $result -> fetch_array(MYSQLI_ASSOC);

                                $_SESSION['myMemberID'] = $info['myMemberID'];
                                $_SESSION['youID'] = $info['youID'];
                                $_SESSION['youName'] = $info['youName'];

                                // echo "<pre>";
                                // var_dump($info);
                                // echo "</pre>";

                                // Header("Location: main.php");
                                echo "<script>location.href ='main.php';</script>";
                            }
                        } else {
                            msg("에러발생 - 관리자에게 문의하세요!");
                        }
                    ?>
</body>
</html>
<?php
    include "../connect/connect.php";

    
    $DisCategory = $_POST["DisCategory"];
    $DisName = $_POST["DisName"];
    $DisSymptom = $_POST["DisSymptom"];
    $DisCurePrice = $_POST["DisCurePrice"];
    $DisImgFile = $_FILES['DisImgFile'];
    $DisImgSize = $_FILES['DisImgFile']['size'];
    $DisImgType = $_FILES['DisImgFile']['type'];
    $DisImgName = $_FILES['DisImgFile']['name'];
    $DisImgTmp = $_FILES['DisImgFile']['tmp_name'];
    $DisPrevent1 = $_POST["DisPrevent1"];
    $DisPrevent2 = $_POST["DisPrevent2"];
    $DisCause1 = $_POST["DisCause1"];
    $DisCause2 = $_POST["DisCause2"];
    $DisEarlySymptom1 = $_POST["DisEarlySymptom1"];
    $DisEarlySymptom2 = $_POST["DisEarlySymptom2"];
    $DisSurgeryReason = $_POST["DisSurgeryReason"];
    $DisAfterCare1 = $_POST["DisAfterCare1"];
    $DisAfterCare2 = $_POST["DisAfterCare2"];

    // echo "<pre>";
    // echo "var_dump($DisImgFile)";
    // echo "</pre>";

    // $sql = "가나다라";
                        

    $fileTypeExtension = explode("/", $DisImgType);
    $fileType = $fileTypeExtension[0];      //image
    $fileExtension = $fileTypeExtension[1]; //png
    //이미지 타입 확인
    if($fileType == "image"){
        if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
            $DisImgDir = "../asset/img/disease/";
            $DisImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
            // echo "이미지 파일이 맞네요!";
            $sql = "INSERT INTO Disease SET DisCategory = '{$DisCategory}', DisName = '{$DisName}' , DisSymptom = '{$DisSymptom}' 
                , DisCurePrice = '{$DisCurePrice}' , DisImgFile = '{$DisImgName}' , DisPrevent1 = '{$DisPrevent1}' 
                , DisPrevent2 = '{$DisPrevent2}' , DisCause1 = '{$DisCause1}' , DisCause2 = '{$DisCause2}' , DisEarlySymptom1 = '{$DisEarlySymptom1}' 
                , DisEarlySymptom2 = '{$DisEarlySymptom2}' , DisSurgeryReason = '{$DisSurgeryReason}' , DisAfterCare1 = '{$DisAfterCare1}' 
                , DisAfterCare2 = '{$DisAfterCare2}'
                ";
        }
    }
    echo $sql;

    $result = $connect -> query($sql);
    $result = move_uploaded_file($DisImgTmp, $DisImgDir.$DisImgName);


    // Header("Location: main.php");    

?>
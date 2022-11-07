<?php
    include "../connect/connect.php";

    
    $HosCategory = $_POST["HosCategory"];
    $HosName = $_POST["HosName"];
    $HosAdress = $_POST["HosAdress"];
    $HosCon1 = $_POST["HosCon1"];
    $HosCon2 = $_POST["HosCon2"];
    $HosImgFile = $_FILES['HosImgFile'];
    $HosImgSize = $_FILES['HosImgFile']['size'];
    $HosImgType = $_FILES['HosImgFile']['type'];
    $HosImgName = $_FILES['HosImgFile']['name'];
    $HosImgTmp = $_FILES['HosImgFile']['tmp_name'];
    $HosTime = $_POST["HosTime"];
    $HosSpecialty1 = $_POST["HosSpecialty1"];
    $HosSpecialty2 = $_POST["HosSpecialty2"];
    $HosParking = $_POST["HosParking"];
    $HosService1 = $_POST["HosService1"];
    $HosService2 = $_POST["HosService2"];
    $HosPhone = $_POST["HosPhone"];
    $HosEmail = $_POST["HosEmail"];

    // echo "<pre>";
    // echo "var_dump($HosImgFile)";
    // echo "</pre>";

    // $sql = "가나다라";
                        

    $fileTypeExtension = explode("/", $HosImgType);
    $fileType = $fileTypeExtension[0];      //image
    $fileExtension = $fileTypeExtension[1]; //png
    //이미지 타입 확인
    if($fileType == "image"){
        if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
            $HosImgDir = "../asset/img/hospital/";
            $HosImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
            // echo "이미지 파일이 맞네요!";
            $sql = "INSERT INTO Hospital SET HosCategory = '{$HosCategory}', HosName = '{$HosName}' , HosAdress = '{$HosAdress}',
                HosCon1 = '{$HosCon1}', HosCon2 = '{$HosCon2}', HosImgFile = '{$HosImgName}' , HosTime = '{$HosTime}' , HosSpecialty1 = '{$HosSpecialty1}'
                , HosSpecialty2 = '{$HosSpecialty2}' , HosParking = '{$HosParking}' , HosService1 = '{$HosService1}' , HosService2 = '{$HosService2}'
                , HosPhone = '{$HosPhone}' , HosEmail = '{$HosEmail}'
                ";
        }
    }

    $result = $connect -> query($sql);
    $result = move_uploaded_file($HosImgTmp, $HosImgDir.$HosImgName);


    // Header("Location: main.php");    

?>
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
    $DisDetails = $_POST["DisDetails"];
    $DisPreventName1 = $_POST["DisPreventName1"];
    $DisPreventName2 = $_POST["DisPreventName2"];
    $DisPreventName3 = $_POST["DisPreventName3"];
    $DisPreventName4 = $_POST["DisPreventName4"];
    $DisPreventCont1 = $_POST["DisPreventCont1"];
    $DisPreventCont2 = $_POST["DisPreventCont2"];
    $DisPreventCont3 = $_POST["DisPreventCont3"];
    $DisPreventCont4 = $_POST["DisPreventCont4"];
    $DisCauseName1 = $_POST["DisCauseName1"];
    $DisCauseName2 = $_POST["DisCauseName2"];
    $DisCauseName3 = $_POST["DisCauseName3"];
    $DisCauseName4 = $_POST["DisCauseName4"];
    $DisCauseCont1 = $_POST["DisCauseCont1"];
    $DisCauseCont2 = $_POST["DisCauseCont2"];
    $DisCauseCont3 = $_POST["DisCauseCont3"];
    $DisCauseCont4 = $_POST["DisCauseCont4"];
    $DisEarlySymptom1 = $_POST["DisEarlySymptom1"];
    $DisEarlySymptom2 = $_POST["DisEarlySymptom2"];
    $DisEarlySymptom3 = $_POST["DisEarlySymptom3"];
    $DisEarlySymptom4 = $_POST["DisEarlySymptom4"];
    $DisSurgeryReason = $_POST["DisSurgeryReason"];
    $DisAfterCare1 = $_POST["DisAfterCare1"];
    $DisAfterCare2 = $_POST["DisAfterCare2"];
    $DisAfterCare3 = $_POST["DisAfterCare3"];
    $DisAfterCare4 = $_POST["DisAfterCare4"];

    echo "<pre>";
    echo "var_dump($DisImgFile)";
    echo "</pre>";

    $sql = "가나다라";
                        

    // $fileTypeExtension = explode("/", $HosImgType);
    // $fileType = $fileTypeExtension[0];      //image
    // $fileExtension = $fileTypeExtension[1]; //png
    // //이미지 타입 확인
    // if($fileType == "image"){
    //     if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
    //         $HosImgDir = "../asset/img/hospital/";
    //         $HosImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
    //         // echo "이미지 파일이 맞네요!";
    //         $sql = "INSERT INTO Hospital SET HosCategory = '{$HosCategory}', HosName = '{$HosName}' , HosAdress = '{$HosAdress}',
    //             HosCon1 = '{$HosCon1}', HosCon2 = '{$HosCon2}', HosImgFile = '{$HosImgName}' , HosTime = '{$HosTime}' , HosSpecialty1 = '{$HosSpecialty1}'
    //             , HosSpecialty2 = '{$HosSpecialty2}' , HosParking = '{$HosParking}' , HosService1 = '{$HosService1}' , HosService2 = '{$HosService2}'
    //             , HosPhone = '{$HosPhone}' , HosEmail = '{$HosEmail}'
    //             ";
    //     }
    // }
    // echo $sql;

    // $result = $connect -> query($sql);
    // $result = move_uploaded_file($HosImgTmp, $HosImgDir.$HosImgName);


    // Header("Location: main.php");    

?>
<?php
    include "../connect/connect.php";
    
    $shopCate = $_POST["shopCate"];
    $shopBrand = $_POST["shopBrand"];
    $shopItemName = $_POST["shopItemName"];
    $shopItemMainEx = $_POST["shopItemMainEx"];
    $shopItemSubEx = $_POST["shopItemSubEx"];
    $shopItemEx01 = $_POST["shopItemEx01"];
    $shopItemEx02 = $_POST["shopItemEx02"];
    $shopItemEx03 = $_POST['shopItemEx03'];
    $shopItemEx04 = $_POST["shopItemEx04"];
    $shopItemPrice = $_POST['shopItemPrice'];
    $shopItemLink01 = $_POST['shopItemLink01'];
    $shopItemLink02 = $_POST['shopItemLink02'];
    $shopItemLink03 = $_POST['shopItemLink03'];
    $shopItemLink04 = $_POST['shopItemLink04'];
    $shopImgFile = $_FILES['shopImgFile'];
    $shopImgSize = $_FILES['shopImgFile']['size'];
    $shopImgType = $_FILES['shopImgFile']['type'];
    $shopImgName = $_FILES['shopImgFile']['name'];
    $shopImgTmp = $_FILES['shopImgFile']['tmp_name'];

    $fileTypeExtension = explode("/", $shopImgType);
    $fileType = $fileTypeExtension[0];      //image
    $fileExtension = $fileTypeExtension[1]; //png

    //이미지 타입 확인
    if($fileType == "image"){
        if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
            $shopImgDir = "../asset/img/petshop/";
            $shopImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
            // echo "이미지 파일이 맞네요!";
            $sql = "INSERT INTO petShop SET shopCate = '{$shopCate}', shopBrand = '{$shopBrand}' , shopItemName = '{$shopItemName}',
                shopItemMainEx = '{$shopItemMainEx}', shopItemSubEx = '{$shopItemSubEx}', shopItemEx01 = '{$shopItemEx01}', shopItemEx02 = '{$shopItemEx02}',
                shopItemEx03 = '{$shopItemEx03}', shopItemEx04 = '{$shopItemEx04}', shopItemPrice = '{$shopItemPrice}', shopItemLink01 = '{$shopItemLink01}',
                shopItemLink02 = '{$shopItemLink02}', shopItemLink03 = '{$shopItemLink03}', shopItemLink04 = '{$shopItemLink04}',
                shopImgFile = '{$shopImgName}'
                ";
        }
    }
    echo $sql;

    $result = $connect -> query($sql);
    $result = move_uploaded_file($shopImgTmp, $shopImgDir.$shopImgName);


    // Header("Location: main.php");    

?>
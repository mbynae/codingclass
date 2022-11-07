<?php
    include "../connect/connect.php";

    $petShopID = $_GET['page'];

    $shopSql = "SELECT * FROM petShop WHERE petShopID = '{$petShopID}'";
    $shopResult = $connect -> query($shopSql);

    $shopInfo = $shopResult -> fetch_array(MYSQLI_ASSOC);

    $shopCate = $_GET['category'];

    if(isset($_GET['category'])){
        $shopCate = $_GET['category'];
        $shopSql = "SELECT * FROM petShop WHERE shopCate='$shopCate'";
        
    } else {
        $shopSql = "SELECT * FROM petShop";
    }

    $petShopCate = "SELECT DISTINCT shopCate FROM petShop";
    $shopResult = $connect -> query($petShopCate);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>펫샵 상세보기</title>

    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">
    <link rel="stylesheet" href="../asset/css/reset.css">

    <link rel="stylesheet" href="../asset/css/petShop/petShopItemCate.css">
    <link rel="stylesheet" href="../asset/css/petShop/petShopInfo.css">
    <link rel="stylesheet" href="../asset/css/petShop/itemExplanation.css">

    <style>
        .line {
            width: 1360px;
            height: 10px;
            background: #F9FAFB;
            margin: 0 auto;
            margin-top: 80px;
        }
    </style>
</head>
<body>
    <!-- header -->
    <?php include "../include/header.php"?>
    <!-- //header -->

    <!-- petShopItem category -->
    <section id="petShopItemCate">
        <div class="petShopItemCate__inner container">
            <ul class="itemCate">
                <?php
                    foreach($shopResult as $shop){ ?>
                        <il>
                            <a href="petShopMain.php?category=<?=$shop['shopCate']?>"><?=$shop['shopCate']?></a>
                        </il>
                <?php }?>
                <!-- <li class="cateOne"><a href="#">CATEGORY</a></li>
                <li><a href="#">의류 / 악세서리</a></li>
                <li><a href="#">미용 / 케어</a></li>
                <li><a href="#">배변 / 위생</a></li>
                <li><a href="#">간식 / 영양제</a></li>
                <li><a href="3">산책 / 놀이</a></li>
                <li><a href="#">목욕</a></li> -->
            </ul>
        </div>
    </section>
    <!-- //petShopItem category -->

    <!-- petShopInfo -->
    <section id="petShopInfo">
        <div class="petShopInfo__inner container">
            <div class="itemImg">
                <figure>
                    <img src="../asset/img/petshop/<?=$shopInfo['shopImgFile']?>" alt="상품사진">
                </figure>
            </div>
            <div class="itemInfo">
                <div class="itemInfo_name">
                    <h3><?=$shopInfo['shopBrand']?></h3>
                    <h2><?=$shopInfo['shopItemName']?></h2>
                    <p><?=$shopInfo['shopItemMainEx']?></p>
                    <h4><?=$shopInfo['shopItemSubEx']?></h4>
                </div>
                <div class="itemInfo__review">
                    <div class="star">
                        <img src="../asset/img/star.svg" alt="별점">
                    </div>
                    <!-- <h3>Review 3건</h3> -->
                </div>
                <div class="itemInfo__link">
                    <h2>Link</h2>
                    <a href="<?=$shopInfo['shopItemLink01']?>"><p><em></em><?=$shopInfo['shopItemLink01']?></p></a>
                    <a href="<?=$shopInfo['shopItemLink02']?>"><p><?=$shopInfo['shopItemLink02']?></p></a>
                    <a href="<?=$shopInfo['shopItemLink03']?>"><p><?=$shopInfo['shopItemLink03']?></p></a>
                    <a href="<?=$shopInfo['shopItemLink04']?>"><p><?=$shopInfo['shopItemLink04']?></p></a> 
                </div>
                <div class="item__btn">
                    <h2><a href="#">장바구니</a></h2>
                    <h2><a href="#">최저가 이동</a></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- //petShopInfo -->

    <!-- itemExplanation -->
    <section id="itemExplanation">
        <div class="line"></div>
        <div class="itemExplanation__inner container">
            <div class="explanation__cate">
                <ul class="">
                    <li><a href="#">Information</a></li>
                    <li><a href="#">Link</a></li>
                    <!-- <li><a href="#">Review</a></li> -->
                </ul>
            </div>
            <div class="Explanation__info">
                    <div class="Explanation__img">
                        <div class="Explanation__desc">
                            <img src="../asset/img/petshop/<?=$shopInfo['shopImgFile']?>" alt="상품사진">
                        </div>
                    </div>
                    <div class="Explanation__more">
                        <h2><?=$shopInfo['shopItemEx01']?></h2>
                        <h2><?=$shopInfo['shopItemEx02']?></h2>
                        <h3><?=$shopInfo['shopItemEx03']?></h3>
                        <p><?=$shopInfo['shopItemEx04']?></p>
                    </div>
                </figure>
            </div>
        </div>
    </section>
    <!-- //itemExplanation -->

    <!-- header -->
    <?php include "../include/footer.php"?>
    <!-- //header -->

    
</body>
</html>
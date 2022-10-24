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
    <title>헤더</title>

    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/header.css">

    <!-- <link rel="stylesheet" href="../asset/css/login/login.css">
    <link rel="stylesheet" href="../asset/css/login/Agree.css">
    <link rel="stylesheet" href="../asset/css/login/join.css">
    <link rel="stylesheet" href="../asset/css/login/joinCompete.css"> -->
    <style>
               
        
    </style>
</head>

<body>
    <header id="headerType" class="header__wrap">
        <div class="header__inner container">
            <div class="header__logo">
                <a href="../php/main.php">winimal</a>
            </div>
            <nav class="header__menu">
                <ul>
                    <li><a href="#">A.hopsital</a></li>
                    <li><a href="#">disease</a></li>
                    <li><a href="../php/board.php">community</a></li>
                    <li><a href="#">pet shop</a></li>
                    <?php if( isset($_SESSION['myMemberID']) ){ ?>
                    <li><a href="#" class="black">mypage</a></li>
                    <li><a href="../php/logout.php">logout</a></li>
                <?php } else { ?>                    
                    <li><a href="../php/loginpopup.php" class="login">login</a></li>
                <?php } ?>
                </ul>
            </nav>
            <div class="ham_menu">
                <input type="checkbox">
                <div></div>
                <div></div>
                <div></div>
            </div>                
        </div>
    </header>

<?php 
?>
</body>
<script src="../asset/js/header_hamburger.js"></script>
<script src="../asset/js/login_link.js"></script>
<script src="../asset/js/close_modal.js"></script>
<script>

</script>
</html>
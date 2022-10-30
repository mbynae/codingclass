<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE petShop (";
    $sql .=     "petShopID int(10) unsigned auto_increment,";
    $sql .=     "shopCate varchar(30) NOT NULL,";
    $sql .=     "shopBrand varchar(30) NOT NULL,";
    $sql .=     "shopItemName varchar(50) NOT NULL,";
    $sql .=     "shopItemMainEx varchar(200) NOT NULL,";
    $sql .=     "shopItemSubEx varchar(200) NOT NULL,";
    $sql .=     "shopItemEx01 varchar(200) NOT NULL,";
    $sql .=     "shopItemEx02 varchar(200) NOT NULL,";
    $sql .=     "shopItemEx03 varchar(200) NOT NULL,";
    $sql .=     "shopItemEx04 varchar(20) NOT NULL,";
    $sql .=     "shopItemPrice varchar(20) NOT NULL,";
    $sql .=     "shopItemLink01 varchar(100) DEFAULT NULL,";
    $sql .=     "shopItemLink02 varchar(100) DEFAULT NULL,";
    $sql .=     "shopItemLink03 varchar(100) DEFAULT NULL,";
    $sql .=     "shopItemLink04 varchar(100) DEFAULT NULL,";
    $sql .=     "shopImgFile varchar(100) DEFAULT NULL,";
    $sql .=     "PRIMARY KEY (petShopID)";
    $sql .=     ") charset=utf8;";

    $connect -> query($sql);
?>  
<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE Disease (";
    $sql .=     "DisID int(10) unsigned auto_increment,";
    $sql .=     "DisName varchar(255) NOT NULL,";
    $sql .=     "DisAdress longtext NOT NULL,";
    $sql .=     "DisCon1 varchar(20) DEFAULT NULL,";
    $sql .=     "DisCon2 varchar(20) DEFAULT NULL,";
    $sql .=     "DisImgFile varchar(100) DEFAULT NULL,";
    $sql .=     "DisTime varchar(20) NOT NULL,";
    $sql .=     "DisSpecialty1 varchar(20) NOT NULL,";
    $sql .=     "DisSpecialty2 varchar(20) NOT NULL,";
    $sql .=     "DisParking varchar(20) NOT NULL,";
    $sql .=     "DisService1 varchar(20) DEFAULT NULL,";
    $sql .=     "DisService2 varchar(20) DEFAULT NULL,";
    $sql .=     "DisPhone varchar(20) NOT NULL,";
    $sql .=     "DisEmail varchar(20) NOT NULL,";
    $sql .=     "PRIMARY KEY (DisID)";
    $sql .=     ") charset=utf8;";

    $connect -> query($sql);
?>  
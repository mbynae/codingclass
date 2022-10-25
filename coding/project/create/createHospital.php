<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE Hospital (";
    $sql .=     "HosID int(10) unsigned auto_increment,";
    $sql .=     "HosName varchar(255) NOT NULL,";
    $sql .=     "HosAdress longtext NOT NULL,";
    $sql .=     "HosCon1 varchar(20) DEFAULT NULL,";
    $sql .=     "HosCon2 varchar(20) DEFAULT NULL,";
    $sql .=     "HosImgFile varchar(100) DEFAULT NULL,";
    $sql .=     "HosTime varchar(20) NOT NULL,";
    $sql .=     "HosSpecialty1 varchar(20) NOT NULL,";
    $sql .=     "HosSpecialty2 varchar(20) NOT NULL,";
    $sql .=     "HosParking varchar(20) NOT NULL,";
    $sql .=     "HosService1 varchar(20) DEFAULT NULL,";
    $sql .=     "HosService2 varchar(20) DEFAULT NULL,";
    $sql .=     "HosPhone varchar(20) NOT NULL,";
    $sql .=     "HosEmail varchar(20) NOT NULL,";
    $sql .=     "PRIMARY KEY (HosID)";
    $sql .=     ") charset=utf8;";

    $connect -> query($sql);
?>  
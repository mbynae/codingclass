<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE Disease (";
    $sql .=     "DisID int(10) unsigned auto_increment,";
    $sql .=     "DisCategory varchar(10) NOT NULL,";
    $sql .=     "DisName varchar(30) NOT NULL,";
    $sql .=     "DisSymptom longtext NOT NULL,";
    $sql .=     "DisImgFile varchar(100) NOT NULL,";
    $sql .=     "DisCurePrice int(10) NOT NULL,";
    $sql .=     "DisPrevent1 varchar(100) NOT NULL,";
    $sql .=     "DisPrevent2 varchar(100) DEFAULT NULL,";
    $sql .=     "DisCause1 varchar(100) NOT NULL,";
    $sql .=     "DisCause2 varchar(100) DEFAULT NULL,";
    $sql .=     "DisEarlySymptom1 varchar(100) NOT NULL,";
    $sql .=     "DisEarlySymptom2 varchar(100) DEFAULT NULL,";
    $sql .=     "DisSurgeryReason longtext DEFAULT NULL,";
    $sql .=     "DisAfterCare1 varchar(100) DEFAULT NULL,";
    $sql .=     "DisAfterCare2 varchar(100) DEFAULT NULL,";
    $sql .=     "PRIMARY KEY (DisID)";
    $sql .=     ") charset=utf8;";

    $connect -> query($sql);
?>  
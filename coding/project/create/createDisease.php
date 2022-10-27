<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE Disease (";
    $sql .=     "DisID int(10) unsigned auto_increment,";
    $sql .=     "DisCategory varchar(10) NOT NULL,";
    $sql .=     "DisName varchar(30) NOT NULL,";
    $sql .=     "DisSymptom longtext NOT NULL,";
    $sql .=     "DisImgFile varchar(100) NOT NULL,";
    $sql .=     "DisCurePrice int(10) NOT NULL,";
    $sql .=     "DisDetails varchar(100) NOT NULL,";
    $sql .=     "DisPreventName1 varchar(100) NOT NULL,";
    $sql .=     "DisPreventName2 varchar(100) DEFAULT NULL,";
    $sql .=     "DisPreventName3 varchar(100) DEFAULT NULL,";
    $sql .=     "DisPreventName4 varchar(100) DEFAULT NULL,";
    $sql .=     "DisPreventCont1 varchar(100) NOT NULL,";
    $sql .=     "DisPreventCont2 varchar(100) DEFAULT NULL,";
    $sql .=     "DisPreventCont3 varchar(100) DEFAULT NULL,";
    $sql .=     "DisPreventCont4 varchar(100) DEFAULT NULL,";
    $sql .=     "DisCauseName1 varchar(100) NOT NULL,";
    $sql .=     "DisCauseName2 varchar(100) DEFAULT NULL,";
    $sql .=     "DisCauseName3 varchar(100) DEFAULT NULL,";
    $sql .=     "DisCauseName4 varchar(100) DEFAULT NULL,";
    $sql .=     "DisCauseCont1 varchar(100) NOT NULL,";
    $sql .=     "DisCauseCont2 varchar(100) DEFAULT NULL,";
    $sql .=     "DisCauseCont3 varchar(100) DEFAULT NULL,";
    $sql .=     "DisCauseCont4 varchar(100) DEFAULT NULL,";
    $sql .=     "DisEarlySymptom1 varchar(100) NOT NULL,";
    $sql .=     "DisEarlySymptom2 varchar(100) DEFAULT NULL,";
    $sql .=     "DisEarlySymptom3 varchar(100) DEFAULT NULL,";
    $sql .=     "DisEarlySymptom4 varchar(100) DEFAULT NULL,";
    $sql .=     "DisSurgeryReason varchar(100) DEFAULT NULL,";
    $sql .=     "DisAfterCare1 varchar(100) DEFAULT NULL,";
    $sql .=     "DisAfterCare2 varchar(100) DEFAULT NULL,";
    $sql .=     "DisAfterCare3 varchar(100) DEFAULT NULL,";
    $sql .=     "DisAfterCare4 varchar(100) DEFAULT NULL,";
    $sql .=     "PRIMARY KEY (DisID)";
    $sql .=     ") charset=utf8;";

    $connect -> query($sql);
?>  
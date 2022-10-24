<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myBoard (";
    $sql .= "myBoardID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "boardTitle varchar(50) NOT NULL,";
    $sql .= "boardContents longtext NOT NULL,";
    $sql .= "boardView int(10) NOT NULL,";
    $sql .= "boardLike int(10) NOT NULL,";
    $sql .= "boardImgFile varchar(100) DEFAULT NULL,";
    $sql .= "boardImgSize varchar(100) DEFAULT NULL,";
    $sql .= "boardDelete int(10) NOT NULL,";
    $sql .= "boardRegTime int(10) NOT NULL,";
    $sql .= "boardModTime int(10) DEFAULT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myBoardID)";
    $sql .= ") charset=utf8;";

    $connect -> query($sql);   
        
    
?>
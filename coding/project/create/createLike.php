<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE Liketable (";
    $sql .= "myMemberID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "comment longtext NOT NULL,";
    $sql .= "boardDislike bit(1) NOT NULL DEFAULT '1'";
    $sql .= "LikeCount int(10) NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myMemberID)";
    $sql .= ") charset=utf8;";

    $connect -> query($sql);
    
    echo $sql;
        
    
?>
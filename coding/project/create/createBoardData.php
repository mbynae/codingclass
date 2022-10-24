<?php
    include "../connect/connect.php";

    for($i=1; $i<=50; $i++){
        $regTime = time();
        $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardContents, boardView, regTime) VALUES('1', '${i}번 글', '나는 ${i} 번입니다.','1' ,'$regTime')";
        $connect -> query($sql);
    };
?>
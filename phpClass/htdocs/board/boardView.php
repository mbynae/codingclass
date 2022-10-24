<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트 만들기</title>

    <?php include "../include/link.php" ?>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main">
        <section id="board" class="container">
            <h2>게시판 영역입니다.</h2>
            <div class="board__inner">
                <div class="board__title">
                    <h3>게시판</h3>
                    <p>웹디자이너, 웹퍼블리셔, 프론트엔드 개발자를 위한 게시판입니다.</p>
                </div>
                <div class="board__view">
                    <table>
                        <colgroup>
                            <col style="width: 20%">
                            <col style="width: 80%">
                        </colgroup>
                        <tbody>
<?php
    $myBoardID = $_GET['myBoardID'];

    // echo $myBoardID;

    // 보드뷰(조회수) + 1(UPDATE 사용)
    $boardView_sql = "UPDATE myboard SET boardView = boardView + 1 WHERE myBoardID = {$myBoardID}";
    $connect -> query($boardView_sql);

    $sql = "SELECT b.boardTitle, m.youName, b.regTime, b.boardView, b.boardContents FROM myBoard b JOIN myMember m ON(m.myMemberID = b.myMemberID) WHERE b.myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);


    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        // echo "<pre>";
        // var_dump($info);
        // echo "</pre>";

        echo "<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";
        echo "<tr><th>등록인</th><td>".$info['youName']."</td></tr>";
        echo "<tr><th>등록일</th><td>".date('y-m-d H:i', $info['regTime'])."</td></tr>";
        echo "<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";
        echo "<tr><th>내용</th><td class='height'>".$info['boardContents']."</td></tr>";
    }
?>
                            <!-- <tr>
                                <th>제목</th>
                                <td>게시판 제목입니다.</td>
                            </tr>
                            <tr>
                                <th>등록자</th>
                                <td>이름</td>
                            </tr>
                            <tr>
                                <th>등록일</th>
                                <td>22.09.22</td>
                            </tr>
                            <tr>
                                <th>조회수</th>
                                <td>999</td>
                            </tr>
                            <tr>
                                <th>내용</th>
                                <td class="height">
                                    지극히 개인적인 학습 및 기록을 위한 블로그입니다.<br>
                                    지극히 개인적인 잡담 및 기록을 위한 블로그입니다.<br>
                                    지극히 개인적인 잡동사니들을 보관하기 위한 블로그입니다.
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <div class="board__btn">
                    <a href="boardModify.php?myBoardID=<?=$myBoardID?>">수정하기</a>
                    <a href="boardRemove.php?myBoardID=<?=$myBoardID?>" onclick="alert('정말 삭제하시겠습니까?')">삭제하기</a>
                    <a href="board.php">목록보기</a>
                </div>
            </div>
        </section>
        <!-- //board -->
    </main>
    
    <?php include "../include/footer.php" ?>
    <!-- footer -->

</body>
</html>
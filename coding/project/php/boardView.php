<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $myBoardID = $_GET['myBoardID'];


    $commentSql = "SELECT * FROM myComment WHERE myBoardID = {$myBoardID} ORDER BY myCommentID";
    $commentResult = $connect -> query($commentSql);
    $commentInfo = $commentResult -> fetch_array(MYSQLI_ASSOC);

    $myMemberID = $_SESSION['myMemberID'];

    $mySql = "SELECT * FROM myMember WHERE myMemberID = {$myMemberID}";
    $myResult = $connect -> query($mySql);

    $myInfo = $myResult -> fetch_array(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 글 보기</title>

    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">

    <link rel="stylesheet" href="../asset/css/board/boardLoginBanner.css">
    <link rel="stylesheet" href="../asset/css/board/boardImageType.css">
    <link rel="stylesheet" href="../asset/css/board/boardView.css">
    <link rel="stylesheet" href="../asset/css/board/boardComment.css">
    <link rel="stylesheet" href="../asset/css/board/boardViewType.css">

    <style>
        .btn-like {
            width: 50px;
            background: #fff;
        }
        .com_table {
            width: 100%;
        }
        .comment {
            float: left;
            margin: 20px 0;
            height: 40px;
            width: 100%;
        }
        .btn {
            margin: 20px 0;
            height: 40px;
            width: 20%;
            border: 1px solid #000;
            text-align: center;
            line-height: 1.5;
        }
    </style>
</head>

<!-- header -->
<?php include "../include/header.php"?>
<!-- //header -->

<body>

    <!-- boardLoginBanner -->
    <section id="boardLoginBanner" class="loginBanner">
        <h2 class="blind">loginBanner</h2>
        <div class="lB__inner">
            <figure class="MyprofileL">
                <img src="../asset/img/profile/<?=$myInfo['youImgFile']?>" alt="프로필사진">
                    <figcaption><?=$_SESSION['youName']?>님 어서오세요!</figcaption>
                <a href="../php/logout.php">LOGOUT</a>
            </figure>
            <div class="Myprofile">
                <ul>
                    <li>가입일 : <?=date('Y-m-d', $myInfo['regTime'] )?></li>
                    <li><a href="#">나의 정보</a></li>
                    <li><a href="#">나의 반려견</a></li>
                    <li>나의 글 : 00개</li>
                    <li>댓글 수 : 00개</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //boardLoginBanner -->

    <!-- boardImageType -->
    <section id="boardImageType" class="imageType">
        <div class="imageType__inner">
            <h2>COMMUNITY</h2>
            <p>좋은 글에는 좋은 댓글을 달아주세요!</p>
        </div>
    </section>
    <!-- //boardImageType -->

    <!-- boardView -->
    <section id="boardView">
        <div class="view__inner container">
            <div class="view__innerCont">
                <?php
                    $myBoardID = $_GET['myBoardID'];
                    
                    // echo $myBoardID;

                    $sql = "SELECT * FROM myBoard b JOIN myMember m ON(m.MymemberID = b.myMemberID) WHERE b.myBoardID = {$myBoardID}";

                    
                    
                        
                    $boardView = "UPDATE myBoard SET boardView = boardView + 1 WHERE myBoardID = {$myBoardID}";
                    $connect -> query($boardView);
                    
                    
                    
                    $result = $connect -> query($sql);




                    if($result){
                        $info = $result -> fetch_array(MYSQLI_ASSOC);


                        echo "<div class='view__top'>";
                        echo "<h2>제목 : ".$info['boardTitle']."</h2>";
                        echo "<div class='view__top__right'><h3 class='like'><img src='../asset/img/like.svg' alt=''>";
                        echo "추천 수 : ".$info['boardLike']. "</h3>";
                        echo "<h3>조회 수 : ".$info['boardView']."개</h3>";
                        echo "<h3 class='date'>".date('Y-m-d', $info['regTime'])."</h3></div></div>";
                        echo "<div class='view__bot'>";
                        echo "<p>".$info['boardContents']."</p>";
                        echo "</div>";
                        
                    }

                ?>
                
            </div>
            



            <!-- <div class="view__top">
                <h2>
                    제목 : 가나다라마바사
                </h2>
                <div class="view__top__right">
                    <h3 class="like">
                        <img src="../../asset/img/like.svg" alt="">
                        추천 수 : 20개
                    </h3>
                    <h3>조회 수 : 20개</h3> 
                    <h3 class="date">2020 / 10 / 05</h3> 
                </div>
            </div>
            <div class="view__bot">
                <p>
                    가는 투명하되 현저하게 있는가? 우리의 있을 목숨이 수 그들에게 있는가?
                    싹이 원질이 너의 있음으로써 이것이다. 안고, 청춘 어디 싹이 너의 가치를 가진 피다.
                    눈이 인생의 인생을 이상은 있으며, 하는 것이다. 공자는 열락의 피가 쓸쓸하랴?
                    되는 원대하고, 청춘 같이, 그것을 쓸쓸하랴? 자신과 풀밭에 눈이 그들의 못할 있으며, 소리다.
                    이것은 같은 투명하되 이것이다. 있는 구하기 이 능히 것이다.
                </p>
                <p>
                    가는 투명하되 현저하게 있는가? 우리의 있을 목숨이 수 그들에게 있는가?
                    싹이 원질이 너의 있음으로써 이것이다. 안고, 청춘 어디 싹이 너의 가치를 가진 피다.
                    눈이 인생의 인생을 이상은 있으며, 하는 것이다. 공자는 열락의 피가 쓸쓸하랴?
                    되는 원대하고, 청춘 같이, 그것을 쓸쓸하랴? 자신과 풀밭에 눈이 그들의 못할 있으며, 소리다.
                    이것은 같은 투명하되 이것이다. 있는 구하기 이 능히 것이다.
                </p>
                <p>
                    가는 투명하되 현저하게 있는가? 우리의 있을 목숨이 수 그들에게 있는가?
                    싹이 원질이 너의 있음으로써 이것이다. 안고, 청춘 어디 싹이 너의 가치를 가진 피다.
                    눈이 인생의 인생을 이상은 있으며, 하는 것이다. 공자는 열락의 피가 쓸쓸하랴?
                    되는 원대하고, 청춘 같이, 그것을 쓸쓸하랴? 자신과 풀밭에 눈이 그들의 못할 있으며, 소리다.
                    이것은 같은 투명하되 이것이다. 있는 구하기 이 능히 것이다.
                </p>
            </div> -->
        </div>
        <div class="boardView__btn">
            <button type="submit" value="수정하기"><a href="boardModify.php?myBoardID=<?=$myBoardID?>">수정하기<span>|</span></a></button>
            <button type="submit" value="삭제하기"><a href="boardRemove.php?myBoardID=<?=$myBoardID?>" onClick = "alert('정말 삭제하시겠습니까?')">삭제하기<span>|</span></a></button> 
            <button type="submit" value="목록보기"><a href="board.php">목록보기</a></button>
        </div>       
    </section>
    
    <!-- //boardView -->

    <!-- boardComment -->
    <section id="boardComment" class="container">
        <h2 class="comment__h2">COMMENT</h2>
        <!-- 댓글 -->
        <div id="boardViewComment">
            <div class="comment__top">
                <div class="comment__write">
                    <div class="comment__write__msg">
                        <label for="commentWrite" style="display: none;">댓글 쓰기</label>
                        <input type="text" id="commentWrite" name="commentWrite" placeholder="좋은 댓글 부탁드려요!" required>
                    </div>
                    <div class="comment__write__info">
                        <label for="commentName" class="blind">이름</label>
                        <input type="text" id="commentName" name="commentName" placeholder="이름" required>
                        <label for="commentPass" style="display: none;">비밀번호</label>
                        <input type="text" id="commentPass" id="commentPass" placeholder="비밀번호" required>
                        <button type="submit" id="commentBtn">댓글 쓰기</button>
                    </div>
                </div>
            </div>
            <div class="comment__bottom">
                <div class="comment__delete" style="display: none;">
                    <label for="commentDeletePass" style="display: none;">비밀번호</label>
                    <input type="text" id="commentDeletePass" name="commentDeletePass" placeholder="비밀번호" required>
                    <button id="commentDeleteCancel">취소</button>
                    <button id="commentDeleteButton">삭제</button>
                </div>
                <div class="comment__modify" style="display: none;">
                    <label for="commentModifyMsg" style="display: none;">수정 내용</label>
                    <input type="text" id="commentModifyMsg" name="commentModifyMsg" placeholder="수정 내용" required>
                    <label for="commentModifyMsg" style="display: none;">비밀번호</label>
                    <input type="text" id="commentModifyPass" name="commentModifyPass" placeholder="비밀번호" required>
                    <button id="commentModifyCancel">취소</button>
                    <button id="commentModifyButton">수정</button>
                </div>
            </div>
        </div>
        <table>
            <tbody>
                <?php
                    foreach($commentResult as $comment){ ?>
                        <tr>
                            <td class="com__td">
                                <div id="Comment<?=$comment['myCommentID']?>">
                                    <div class="com__top">
                                        <?=$comment['commentName']?>
                                        <em><?=date('Y-m-d', $comment['regTime'])?></em>
                                        <div class="com__like">
                                            <img src="../asset/img/like.svg" alt="">
                                            <p>5</p>
                                            <img src="../asset/img/dislike.svg" alt="">
                                            <p>0</p>
                                        </div>
                                    </div>
                                    <div class="com__table__p">
                                        <p><?=$comment['commentMsg']?></p>
                                    </div>
                                    <div class="comment__del">
                                        <a href="#" class="comment__del__del">댓글 삭제</a>
                                        <a href="#" class="comment__del__mod">댓글 수정</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                <?php } ?>
                <tr>
                    <td>
                        
                    </td>
                </tr>

                <!-- <tr>
                    <td class="com__td">
                        <div class="com__top">
                            누군가님
                            <em>2020 / 10 / 05</em>
                            <div class="com__like">
                                <img src="../asset/img/like.svg" alt="">
                                <p>5</p>
                                <img src="../asset/img/dislike.svg" alt="">
                                <p>0</p>
                            </div>
                        </div>
                        <div class="com__table__p">
                            <p>정말 좋은 글이네여!</p>
                        </div>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </section>
    <!-- //boardComment -->

    <!-- boardTypeView -->
    <section id="boardTypeView" class="boardTypeView container">
        <div class="board__inner">
            <div class="borad__table">
                <table class="table">
                    <colgroup>
                        <col class="mainTableCol">
                        <col class="mainTableCol">
                        <col class="mainTableCol">
                        <col class="mainTableCol">
                        <col class="mainTableCol">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>글쓴이</th>
                            <th>글쓴날짜</th>
                            <th>조회수</th>
                        </tr>
                    </thead>
                    <tbody class="main_table_body">
                        <?php
                                if(isset($_GET['page'])){
                                    $page = (int) $_GET['page'];
                                } else {
                                    $page = 1;
                                }

                                $viewNum = 10;
                                $viewLimit = ($viewNum * $page) - $viewNum;

                                $sql = "SELECT b.myBoardID, b.boardTitle, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) ORDER BY myBoardID DESC LIMIT {$viewLimit}, {$viewNum}";
                                $result = $connect -> query($sql);

                                if($result){
                                    $count = $result -> num_rows;

                                    if($count > 0 ){
                                        for($i=1; $i <= $count; $i++){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<tr>";
                                            echo "<td>".$info['myBoardID']."</td>";
                                            echo "<td><a href='boardView.php?myBoardID={$info['myBoardID']}'>".$info['boardTitle']."</td>";
                                            echo "<td>".$info['youName']."</td>";
                                            echo "<td>".date('Y-m-d', $info['regTime'] )."</td>";
                                            echo "<td>".$info['boardView']."</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
                                    }
                                }
                            ?>
                    </tbody>
                </table>
            </div>
            <div class="borad__pages">
                <ul>
                    <?php
                        $sql = "SELECT count(myBoardID) FROM myBoard";
                        $result = $connect -> query($sql);

                        $boardCount = $result -> fetch_array(MYSQLI_ASSOC);
                        $boardCount = $boardCount['count(myBoardID)'];

                        

                        // 총 페이지 갯수
                        $boardCount = ceil($boardCount / $viewNum);

                        // echo $boardCount;

                        // 현재 페이지 기준으로 보여주고 싶은 갯수
                        $pageCurrent = 5;
                        $startPage = $page - $pageCurrent;
                        $endPage = $page + $pageCurrent;

                        // 처음 페이지 초기화

                        if($startPage < 1) $startPage = 1;

                        // 마지막 페이지 초기화
                        if($endPage >= $boardCount) $endPage = $boardCount;

                        // 이전 페이지 , 처음 페이지
                        if($page != 1){
                            $prevPage = $page - 1;
                            echo "<li><a href='boardView.php?page=1'>처음으로</li>";
                            echo "<li><a href='boardView.php?page={$prevPage}'>이전</li>";
                        }

                        // 페이지 넘버 표시
                        for($i = $startPage; $i<=$endPage; $i++){
                            $active = "";
                            if($i == $page) $active = "active";
                            echo"<li class='{$active}'><a href='boardView.php?page={$i}'>{$i}</a></li>";
                        }

                        // 다음 페이지 , 마지막 페이지
                        if($page != $endPage){
                            $nextPage = $page + 1;
                            echo "<li><a href='boardView.php?page={$nextPage}'>다음</li>";
                            echo "<li><a href='boardView.php?page={$boardCount}'>마지막으로</li>";
                        }
                    ?>
                </ul>
            </div>
            <div class="search__box">
                <form action="." method="post">
                    <fieldset>
                        <input class="search-txt" type="text" placeholder="검색어를 입력해주세요." required>
                        <button class="search-btn" type="submit">SEARCH</button>
                        <a href="boardWrite.php" class="board_write">글쓰기</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    <!-- //boardTypeView -->
    
</body>

<!-- header -->
<?php include "../include/footer.php"?>
<!-- //header -->

<script src="../../asset/js/header_hamburger.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

    const commentName = $("#commentName");    // 댓글 이름
    const commentPass = $("#commentPass");    // 댓글 비밀번호
    const commentWrite = $("#commentWrite");  // 댓글

    let commentID = "";


    // 댓글 삭제 버튼 클릭시
    $(".comment__del__del").click(function(e){
        e.preventDefault();
        // alert("댓글 삭제 버튼 클릭시");
        $(".comment__delete").show();
        
        // 클릭한 ID값 가져오기
        commentID = $(this).parent().parent().attr('id');

    })

    // 댓글 삭제 버튼 --> 취소 버튼 클릭
    $("#commentDeleteCancel").click(function(){
        $(".comment__delete").hide();
    })

    console.log(commentID)
    // 댓글 삭제 버튼 --> 삭제 버튼 클릭

    $("#commentDeleteButton").click(function(){

        let number = commentID.replace(/[^0-9]/g, "");

        if($("#commentDeletePass").val() == ''){
            alert("댓글 작성시 비밀번호를 적어주세요!");
            $("#commentDeletePass").focus();
        } else {
            $.ajax({
                url: "boardCommentDelete.php",
                method: "POST",
                dataType: "json",
                data: {
                    "pass": $("#commentDeletePass").val(),
                    "commentID": number
                },
                success: function(data){
                    console.log(data);
                    location.reload();              //데이터 받아오고 깜빡이면서 바로 받기
                },
                error: function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        }

    })

    // 댓글 수정 버튼 클릭시
    $(".comment__del__mod").click(function(e){
        e.preventDefault();
        // alert("댓글 수정 버튼 클릭시");
        $(".comment__modify").show();

        commentID = $(this).parent().parent().attr('id');
    })

    // 댓글 수정 버튼 --> 취소 버튼 클릭
    $("#commentModifyCancel").click(function(){
        $(".comment__modify").hide();
    })

    // 댓글 수정 버튼 --> 수정 버튼 클릭
    $("#commentModifyButton").click(function(){

        let number = commentID.replace(/[^0-9]/g, "");

        if($("#commentModify").val() == '' || $("#commentModifyPass").val() == ''){
            alert("수정 내용 및 비밀번호를 입력해주세요!");
            $("#commentModifyPass").focus();

        } else {
            $.ajax({
                url: "boardCommentModify.php",
                method: "POST",
                dataType: "json",
                data: {
                    "pass": $("#commentModifyPass").val(),
                    "commentID": number,
                    "commentmsg": $("#commentModifyMsg").val()
                },
                success: function(data){
                    console.log(data);
                    location.reload();              //데이터 받아오고 깜빡이면서 바로 받기
                    
                },
                error: function(request, status, error){
                    console.log("request" , request);
                    console.log("status" , status);
                    console.log("error" , error);
                }
            })
        }
    })

    // 댓글 쓰기 버튼
    $("#commentBtn").click(function(){
            if($("#commentWrite").val() == ""){
                alert("댓글을 써주세요!!");
                $("#commentWrite").focus();
            } else {
                $.ajax({
                    url: "boardCommentWrite.php",
                    method: "POST",
                    dataType : "json",
                    data: {
                        "boardID": <?=$myBoardID?>,
                        "name": commentName.val(),
                        "pass": commentPass.val(),
                        "msg": commentWrite.val()
                    },
                    success: function(data){
                        console.log(data);
                        location.reload();              //데이터 받아오고 깜빡이면서 바로 받기
                    },
                    error: function(request, status, error){                        
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        })


</script>

</html>
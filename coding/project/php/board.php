<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 메인</title>

    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/common.css">
    <link rel="stylesheet" href="../asset/css/font.css">
    
    <link rel="stylesheet" href="../asset/css/header.css">
    <link rel="stylesheet" href="../asset/css/board/boardLoginBanner.css">
    <link rel="stylesheet" href="../asset/css/board/boardImageType.css">
    <link rel="stylesheet" href="../asset/css/board/boardType.css">
    <link rel="stylesheet" href="../asset/css/footer.css">
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
                <img src="../asset/img/profile.png" alt="프로필">
                    <figcaption><?=$_SESSION['youName']?>님 어서오세요!</figcaption>
                <a href="../php/logout.php">LOGOUT</a>
            </figure>
            <div class="Myprofile">
                <ul>
                    <li>최근 접속 기록 : 00/ 00/ 00</li>
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
            <p>위니멀 커뮤니티에서 다양한 사람들과 좋은 정보를 나눠보세요!</p>
            <figure>
                <img src="../../asset/img/mainBanner.jpg" alt="">
            </figure>
        </div>

    </section>
    <!-- //boardImageType -->

    <!-- boardType -->
    <section id="boardType" class="boardType container">
        <div class="board__inner">
            <div class="Option">
                <div class="Option_category">
                    <p>CATEGORY</p>
                    <select name="searchOption" id="searchOption1" class="searchOption">
                        <option value="Category1">CATEGORY01</option>
                        <option value="Category2">CATEGORY02</option>
                        <option value="Category3">CATEGORY03</option>
                    </select>
                </div>
                <div class="Option_category">
                    <p>날짜 선택</p>
                    <input type="date" name="searchOption" id="searchOption2" class="searchOption" value="2022-01-01">
                </div>
            </div>
            <div class="board_ranking">
                <h3>BEST Ranking</h3>
                <div class="ranking__inner">
                    <span class="weekBest active">주간 인기글</span><span class="MonthBest">월간 인기글</span>
                    <table class="weekTable">
                        <colgroup>
                            <col class="bestTableCol">
                            <col class="bestTableCol">
                            <col class="bestTableCol">
                        </colgroup>
                        <tr class="board_ranking_tr">
                            <td>울 강아지 넘 이뻐여!</td>
                            <td>이영환</td>
                            <td>2022 / 10 / 08</td>
                        </tr>
                        <tr class="board_ranking_tr">
                            <td>저희 아지가 밥을 잘 안먹네요..</td>
                            <td>문병내</td>
                            <td>2022 / 10 / 08</td>
                        </tr>
                        <tr class="board_ranking_tr">
                            <td>이 제품은 어떤가요?</td>
                            <td>김다빈</td>
                            <td>2022 / 10 / 08</td>
                        </tr>
                    </table>
                    <table class="monthTable close">
                        <colgroup>
                            <col class="bestTableCol">
                            <col class="bestTableCol">
                            <col class="bestTableCol">
                        </colgroup>
                        <tr class="board_ranking_tr">
                            <td>울 고양이도 넘 이뻐여!</td>
                            <td>이영환</td>
                            <td>2022 / 09 / 08</td>
                        </tr>
                        <tr class="board_ranking_tr">
                            <td>저희 냥이가 밥을 잘 안먹네요..</td>
                            <td>문병내</td>
                            <td>2022 / 09 / 08</td>
                        </tr>
                        <tr class="board_ranking_tr">
                            <td>이 간식은 어떤가요?</td>
                            <td>김다빈</td>
                            <td>2022 / 09 / 08</td>
                        </tr>
                    </table>
                </div>
            </div>
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



        $sql = "SELECT * FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) ORDER BY myBoardID DESC LIMIT {$viewLimit}, {$viewNum}";
        $result = $connect -> query($sql);

        $count = $result -> num_rows;





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
        echo "<li><a href='board.php?page=1'>처음으로</li>";
        echo "<li><a href='board.php?page={$prevPage}'>이전</li>";
    }

    // 페이지 넘버 표시
    for($i = $startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo"<li class='{$active}'><a href='board.php?page={$i}'>{$i}</a></li>";
    }

    // 다음 페이지 , 마지막 페이지
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='board.php?page={$nextPage}'>다음</li>";
        echo "<li><a href='board.php?page={$boardCount}'>마지막으로</li>";
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
    <!-- //boardType -->

</body>

<!-- footer -->
<?php include "../include/footer.php"?>
<!-- //footer -->

<script src="../../asset/js/header_hamburger.js"></script>
<script>
    //date 오늘 날짜 출력
    const now = new Date();
    // yyyy-mm-dd 포맷 날짜 생성
    function getYmd10() {
        var d = new Date();
        return d.getFullYear() + "-" + ((d.getMonth() + 1) > 9 ? (d.getMonth() + 1).toString() : "0" + (d.getMonth() + 1)) + "-" + (d.getDate() > 9 ? d.getDate().toString() : "0" + d.getDate().toString());
    }
    var myElement = document.getElementById("searchOption2");
    myElement.value = getYmd10();
    console.log("오늘: " + getYmd10());  // 오늘 날짜 출력됨 


    // 인기글 탭메뉴
    const tabMenuWeek = document.querySelector(".weekBest");
    const tabMenuMonth = document.querySelector(".MonthBest");
    const weekTable = document.querySelector(".weekTable");
    const monthTable = document.querySelector(".monthTable");

    tabMenuMonth.addEventListener("click", () => {
        tabMenuMonth.classList.add("active");
        tabMenuWeek.classList.remove("active");
        monthTable.classList.remove("close");
        weekTable.classList.add("close");
    });

    tabMenuWeek.addEventListener("click", () => {
        tabMenuWeek.classList.add("active");
        tabMenuMonth.classList.remove("active");
        weekTable.classList.remove("close");
        monthTable.classList.add("close");
    });


    // 게시판 링크 부여
    const tableTitle = document.querySelectorAll("table tr td:first-child");

    tableTitle.forEach((e, i) => {
        let tableContents = e.innerText;
        tableContents = "<a href=#'>" + tableContents + "</a>";
        e.innerHTML = tableContents;
    });


    //게시판 글쓴이 p태그 부여
    // const tableUsername = document.querySelectorAll(".main_table_body tr td:nth-child(3)");

    // tableUsername.forEach((e, i) => {
    //     let tableborder = e.innerText;
    //     tableborder = "<p>" + tableborder + "</p>";
    //     e.innerHTML = tableborder;
    // });
</script>

</html>
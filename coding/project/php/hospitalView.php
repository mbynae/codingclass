<?php
    include "../connect/connect.php";


    $HosID = $_GET['page'];

    $HosSql = "SELECT * FROM Hospital WHERE HosID = '{$HosID}'";
    $HosResult = $connect -> query($HosSql);

    $HosInfo = $HosResult -> fetch_array(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>병원 메인 페이지</title>
        <link rel="stylesheet" href="../asset/css/hospital/hospital_detail.css"/>
        <link rel="stylesheet" href="../asset/css/board/boardComment.css" />
    </head>

<body>

    <!-- header -->
    <?php include "../include/header.php"?>
    <!-- //header -->

    <!-- 검색창 -->
    <section id="searchType" class="container">
        <div class="searchBox">
            <form action="" method="POST" class="searchBox__form">
            <div class="searchBox_inner">
                <button class="searchBtn">
                <img src="../asset/img/searchBtn.svg" alt="찾기 버튼" />
                </button>
                <input type="text" name="search" id="search" placeholder="궁금하신 내용을 검색해주세요." required/>
            </div>
            <ul class="searchTag__box">
                <li class="searchTag"><a href="#">#중성화</a></li>
                <li class="searchTag"><a href="#">#유행병</a></li>
                <li class="searchTag"><a href="#">#겨울</a></li>
                <li class="searchTag"><a href="#">#동물병원</a></li>
            </ul>
            </form>
        </div>
    </section>

    <!-- 슬라이드 -->
    <section id="mainSliderType" class="container"></section>

    <!-- 병원 정보 -->
    <section id="hospitalInfo" class="container">
      <article class="hospital__view">
        <div class="map__img">
          <img src="../asset/img/hospitalCard_cont1.jpg" alt="" />
        </div>
        <div class="hospital__text">
          <div class="hospital__textPad">
            <h3><?=$HosInfo['HosName']?></h3>
            <a href="" class="ir">버튼</a>
            <address><?=$HosInfo['HosAdress']?></address>
            <p><?=$HosInfo['HosCon1']?></p><br><br>
            <p><?=$HosInfo['HosCon2']?></p>
            <div class="hosital__tag">
              <span>#<?=$HosInfo['HosSpecialty1']?></span>
              <span>#<?=$HosInfo['HosService1']?></span>
            </div>
          </div>
        </div>
      </article>
      <article class="infomation">
        <div class="info__inner">
            <span class="ir">버튼</span>
            <h4>병원정보 보기</h4>
            <div class="info__contents">
                <div class="operation">
                    <h5>운영정보</h5>
                    <div class="info_list">
                        <ul>
                        <li>영업시간</li>
                        <li>전문분야</li>
                        <li>주차</li>
                        </ul>
                        <ul>
                        <li><?=$HosInfo['HosTime']?></li>
                        <li><?=$HosInfo['HosSpecialty1']?>, <?=$HosInfo['HosSpecialty2']?></li>
                        <li><?=$HosInfo['HosParking']?></li>
                        </ul>
                    </div>
                </div>
                <div class="operation">
                    <h5>케어서비스</h5>
                    <div class="info_list">
                        <ul>
                        <li>부가서비스</li>
                        <li>전화번호</li>
                        <li>이메일</li>
                        </ul>
                        <ul>
                        <li><?=$HosInfo['HosService1']?>, <?=$HosInfo['HosService2']?></li>
                        <li><?=$HosInfo['HosPhone']?></li>
                        <li><?=$HosInfo['HosEmail']?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>
    </section>

    <!-- 댓글 창 -->
    <section id="boardComment" class="container">
        <h2 class="comment__h2">COMMENT</h2>
        <!-- 댓글 -->
        <div id="boardViewComment">
            <div class="comment__top">
                <div class="comment__write">
                    <div class="comment__write__msg">
                        <label for="commentWrite" style="display: none">댓글 쓰기</label>
                        <input type="text" id="commentWrite" name="commentWrite" placeholder="좋은 후기를 남겨주세요." required/>
                    </div>
                    <div class="comment__write__info">
                        <label for="commentName" class="blind">이름</label>
                        <input type="text" id="commentName" name="commentName" placeholder="이름" required />
                        <label for="commentPass" style="display: none">비밀번호</label>
                        <input type="text" id="commentPass" name="commentPass" placeholder="비밀번호" required/>
                        <button type="submit" id="commentBtn">댓글 쓰기</button>
                    </div>
                </div>
            </div>
            <div class="comment__bottom">
                <div class="comment__delete" style="display: none">
                    <label for="commentDeletePass" style="display: none">비밀번호</label>
                    <input type="text" id="commentDeletePass" name="commentDeletePass" placeholder="비밀번호" required/>
                    <button id="commentDeleteCancel">취소</button>
                    <button id="commentDeleteButton">삭제</button>
                </div>
                <div class="comment__modify" style="display: none">
                    <label for="commentModifyMsg" style="display: none">수정 내용</label>
                    <input type="text" id="commentModifyMsg" name="commentModifyMsg" placeholder="수정 내용" required/>
                    <label for="commentModifyMsg" style="display: none">비밀번호</label>
                    <input type="text" id="commentModifyPass" name="commentModifyPass" placeholder="비밀번호" required/>
                    <button id="commentModifyCancel">취소</button>
                    <button id="commentModifyButton">수정</button>
                </div>
            </div>
        </div>
        <table>
            <tbody>
            <!-- <?php
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
                    <?php } ?> -->
                <tr>
                    <td class="com__td">
                    <div class="com__top">
                        누군가님
                        <em>2020 / 10 / 05</em>
                        <div class="com__like">
                        <img src="../asset/img/like.svg" alt="" />
                        <p>5</p>
                        <img src="../asset/img/dislike.svg" alt="" />
                        <p>0</p>
                        </div>
                    </div>
                    <div class="com__table__p">
                        <p>꽤나 괜찮은 병원이였습니다.</p>
                    </div>
                    <div class="comment__del">
                        <a href="#" class="comment__del__del">댓글 삭제</a>
                        <a href="#" class="comment__del__mod">댓글 수정</a>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td class="com__td">
                    <div class="com__top">
                        누군가님
                        <em>2020 / 10 / 05</em>
                        <div class="com__like">
                        <img src="../asset/img/like.svg" alt="" />
                        <p>5</p>
                        <img src="../asset/img/dislike.svg" alt="" />
                        <p>0</p>
                        </div>
                    </div>
                    <div class="com__table__p">
                        <p>중성화 수술을 했는데 좋았어요!</p>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td class="com__td">
                    <div class="com__top">
                        누군가님
                        <em>2020 / 10 / 05</em>
                        <div class="com__like">
                        <img src="../asset/img/like.svg" alt="" />
                        <p>5</p>
                        <img src="../asset/img/dislike.svg" alt="" />
                        <p>0</p>
                        </div>
                    </div>
                    <div class="com__table__p">
                        <p>믿을만한 의사 선생님이 있어서 좋았습니다</p>
                    </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <!-- //boardComment -->

    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../asset/js/header_hamburger.js"></script>
    <script>
        //카테고리 선택 선택자
        const category = document.querySelectorAll(".category__titleChoice li a");
        const categoryRegtion = document.querySelector(".cate1");
        const categoryDisease = document.querySelector(".cate2");
        const categorySurgery = document.querySelector(".cate3");
        const categoryContents = document.querySelectorAll(".category__contents");
        const regionChoice = document.querySelector(".regionCho");
        const diseaseChoice = document.querySelector(".diseaseCho");
        const surgeryChoice = document.querySelector(".surgeryCho");
        const categoryCircle = document.querySelectorAll(".category__contents > div");
        const categoryCircleLab = document.querySelectorAll(".category__contents > div > label");

        //카테고리 선택
        category.forEach((cate, index) => {
            cate.addEventListener("click", (link) => {
                link.preventDefault();
                category.forEach((all) => {
                all.classList.remove("tapActive");
                cate.classList.add("tapActive");
                });
                categoryContents.forEach((cont) => {
                cont.classList.remove("tapActive");
                if (category[index].classList.contains("tapActive")) {
                    categoryContents[index].classList.add("tapActive");
                }
                });
            });
        });

        //카테고리 내용 선택
        categoryCircleLab.forEach((e, i) => {
            e.addEventListener("click", () => {
                categoryCircle.forEach((rem) => {
                rem.classList.remove("tapActive");
                });
                categoryCircle[i].classList.add("tapActive");
            });
        });
    </script>
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
                    url: "hosCommentDelete.php",
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
                    url: "hosCommentModify.php",
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
                    url: "hosCommentWrite.php",
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

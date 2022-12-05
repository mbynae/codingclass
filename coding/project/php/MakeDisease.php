<main id="main">
        <section id="DisWrite">
            <h2>질병 쓰기</h2>
            <div class="container">
                <form action="MakeDiseaseSave.php" name="DisWrite" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>질병 게시글 작성 영역</legend>
                        <div>
                            <label for="DisCategory">부위</label>
                            <select name="DisCategory" id="DisCategory">
                                <option value="머리">머리</option>
                                <option value="얼굴">얼굴</option>
                                <option value="눈">눈</option>
                                <option value="코">코</option>
                                <option value="입">입</option>
                                <option value="몸">몸</option>
                                <option value="다리">다리</option>
                                <option value="기타">기타</option>
                            </select>
                        </div>
                        <div>
                            <label for="DisName">병명</label>
                            <input type="text" name="DisName" id="DisName" placeholder="병명을 적어주세요!" required >
                        </div>
                        <div>
                            <label for="DisSymptom">증상</label>
                            <textarea name="DisSymptom" id="DisSymptom" placeholder="증상을 적어주세요." required></textarea>
                        </div>
                        <div>
                            <label for="DisCurePrice">가격</label>
                            <input name="DisCurePrice" id="DisCurePrice" placeholder="가격을 적어주세요(숫자만)." required></textarea>
                        </div>
                        <div>
                            <label for="DisImgFile">질병 이미지</label>
                            <input type="file" name="DisImgFile" id="DisImgFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요!">
<<<<<<< Updated upstream
=======
                        </div>
                        <div>
                            <label for="DisDetails">질병 정보</label>
                            <textarea name="DisDetails" id="DisDetails" placeholder="질병의 정보를 적어주세요." required></textarea>
>>>>>>> Stashed changes
                        </div><br>
                        
                        <div>
                            <label for="DisPrevent1">예방법1</label>
                            <input type="DisPrevent1" name="DisPrevent1" id="DisPrevent1" placeholder="예방 방법 - 내용 형태로 적어주세요.">
                        </div>
                        <div>
<<<<<<< Updated upstream
                            <label for="DisPrevent2">예방법2</label>
                            <input type="DisPrevent2" name="DisPrevent2" id="DisPrevent2" placeholder="예방 방법 - 내용 형태로 적어주세요.(추가내용 있을 시 입력)">
=======
                            <label for="DisPreventCont3">예방 내용3</label>
                            <textarea type="DisPreventCont3" name="DisPreventCont3" id="DisPreventCont3" placeholder="세번째 예방 내용을 적어주세요"></textarea>
                        </div>
                        <div>
                            <label for="DisPreventName4">예방법4</label>
                            <input type="DisPreventName4" name="DisPreventName4" id="DisPreventName4" placeholder="네번째 예방법을 적어주세요">
                        </div>
                        <div>
                            <label for="DisPreventCont4">예방 내용4</label>
                            <textarea type="DisPreventCont4" name="DisPreventCont4" id="DisPreventCont4" placeholder="네번째 예방 내용을 적어주세요"></textarea>
>>>>>>> Stashed changes
                        </div><br>

                        <div>
                            <label for="DisCause1">발생원인1</label>
                            <input type="DisCause1" name="DisCause1" id="DisCause1" placeholder="발생 원인 - 내용 형태로 적어주세요.">
                        </div>
                        <div>
<<<<<<< Updated upstream
                            <label for="DisCause2">발생원인2</label>
                            <input type="DisCause2" name="DisCause2" id="DisCause2" placeholder="발생 원인 - 내용 형태로 적어주세요.(추가내용 있을 시 입력)">
=======
                            <label for="DisCauseCont1">발생원인 내용1</label>
                            <textarea type="DisCauseCont1" name="DisCauseCont1" id="DisCauseCont1" placeholder="첫번째 발생원인 내용을 적어주세요"></textarea>
                        </div>
                        <div>
                            <label for="DisCauseName2">발생원인2</label>
                            <input type="DisCauseName2" name="DisCauseName2" id="DisCauseName2" placeholder="두번째 발생원인을 적어주세요">
                        </div>
                        <div>
                            <label for="DisCauseCont2">발생원인 내용2</label>
                            <textarea type="DisCauseCont2" name="DisCauseCont2" id="DisCauseCont2" placeholder="두번째 발생원인 내용을 적어주세요"></textarea>
                        </div>
                        <div>
                            <label for="DisCauseName3">발생원인3</label>
                            <input type="DisCauseName3" name="DisCauseName3" id="DisCauseName3" placeholder="세번째 발생원인을 적어주세요">
                        </div>
                        <div>
                            <label for="DisCauseCont3">발생원인 내용3</label>
                            <textarea type="DisCauseCont3" name="DisCauseCont3" id="DisCauseCont3" placeholder="세번째 발생원인 내용을 적어주세요"></textarea>
                        </div>
                        <div>
                            <label for="DisCauseName4">발생원인4</label>
                            <input type="DisCauseName4" name="DisCauseName4" id="DisCauseName4" placeholder="네번째 발생원인을 적어주세요">
                        </div>
                        <div>
                            <label for="DisCauseCont4">발생원인 내용4</label>
                            <textarea type="DisCauseCont4" name="DisCauseCont4" id="DisCauseCont4" placeholder="네번째 발생원인 내용을 적어주세요"></textarea>
>>>>>>> Stashed changes
                        </div><br>

                        <div>
                            <label for="DisEarlySymptom1">초기증상1</label>
                            <textarea type="DisEarlySymptom1" name="DisEarlySymptom1" id="DisEarlySymptom1" placeholder="첫번째 초기증상을 적어주세요"></textarea>
                        </div>
                        <div>
                            <label for="DisEarlySymptom2">초기증상2</label>
<<<<<<< Updated upstream
                            <textarea type="DisEarlySymptom2" name="DisEarlySymptom2" id="DisEarlySymptom2" placeholder="두번째 초기증상을 적어주세요(추가내용 있을 시 입력)"></textarea>
=======
                            <textarea type="DisEarlySymptom2" name="DisEarlySymptom2" id="DisEarlySymptom2" placeholder="두번째 초기증상을 적어주세요"></textarea>
                        </div>
                        <div>
                            <label for="DisEarlySymptom3">초기증상3</label>
                            <textarea type="DisEarlySymptom3" name="DisEarlySymptom3" id="DisEarlySymptom3" placeholder="세번째 초기증상을 적어주세요"></textarea>
                        </div>
                        <div>
                            <label for="DisEarlySymptom4">초기증상4</label>
                            <textarea type="DisEarlySymptom4" name="DisEarlySymptom4" id="DisEarlySymptom4" placeholder="네번째 초기증상을 적어주세요"></textarea>
>>>>>>> Stashed changes
                        </div><br>

                        <div>
                            <label for="DisSurgeryReason">수술이 필요한 이유</label>
<<<<<<< Updated upstream
                            <textarea type="DisSurgeryReason" name="DisSurgeryReason" id="DisSurgeryReason" placeholder="이유를 적어주세요(필수아님)"></textarea>
=======
                            <textarea type="DisSurgeryReason" name="DisSurgeryReason" id="DisSurgeryReason" placeholder="이유를 적어주세요"></textarea>
>>>>>>> Stashed changes
                        </div><br>

                        <div>
                            <label for="DisAfterCare1">수술 후 관리법1</label>
                            <textarea type="DisAfterCare1" name="DisAfterCare1" id="DisAfterCare1" placeholder="수술 후 관리법을 적어주세요(필수아님)"></textarea>
                        </div>
                        <div>
<<<<<<< Updated upstream
                            <label for="DisAfterCare2">수술 후 관리법1</label>
                            <textarea type="DisAfterCare2" name="DisAfterCare2" id="DisAfterCare2" placeholder="수술 후 관리법을 적어주세요(필수아님)"></textarea>
                        </div><br>

=======
                            <label for="DisAfterCare4">초기증상4</label>
                            <textarea type="DisAfterCare4" name="DisAfterCare4" id="DisAfterCare4" placeholder="수술 후 관리법을 적어주세요"></textarea>
                        </div><br>
>>>>>>> Stashed changes
                        <button type="submit" value="저장하기">저장하기</button>
                    </fieldset>
                </form>

            </div>
        </section>
        <!-- // Hos -->
        


    </main>
    <!-- //main -->
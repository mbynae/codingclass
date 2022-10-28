<main id="main">
        <section id="HosWrite">
            <h2>병원 쓰기</h2>
            <div class="container">
                <form action="MakeHospitalSave.php" name="HosWrite" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>병원 게시글 작성 영역</legend>
                        <div>
                            <label for="HosCategory">카테고리</label>
                            <select name="HosCategory" id="HosCategory">
                                <option value="서울">서울</option>
                                <option value="경기도">경기도</option>
                                <option value="인천">인천</option>
                                <option value="충청도">충청도</option>
                                <option value="강원도">강원도</option>
                                <option value="경상도">경상도</option>
                                <option value="전라도">전라도</option>
                            </select>
                        </div>
                        <div>
                            <label for="HosName">병원이름</label>
                            <input type="text" name="HosName" id="HosName" placeholder="병원 이름을 넣어주세요!" required >
                        </div>
                        <div>
                            <label for="HosAdress">병원 주소</label>
                            <textarea name="HosAdress" id="HosAdress" placeholder="병원 주소를 넣어주세요!" required></textarea>
                        </div>
                        <div>
                            <label for="HosCon1">해쉬태그1</label>
                            <textarea name="HosCon1" id="HosCon1" placeholder="해쉬태그1" required></textarea>
                        </div>
                        <div>
                            <label for="HosCon2">해쉬태그2</label>
                            <textarea name="HosCon2" id="HosCon2" placeholder="해쉬태그2" required></textarea>
                        </div>
                        <div>
                            <label for="HosImgFile">병원 이미지</label>
                            <input type="file" name="HosImgFile" id="HosImgFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요!">
                        </div>
                        <div>
                            <label for="HosTime">진료시간</label>
                            <textarea name="HosTime" id="HosTime" placeholder="진료 시간 ex) 00:00 ~ 20:00" required></textarea>
                        </div>
                        <div>
                            <label for="HosSpecialty1">전문분야</label>
                            <textarea name="HosSpecialty1" id="HosSpecialty1" placeholder="전문분야1" required></textarea>
                        </div>
                        <div>
                            <label for="HosSpecialty2">전문분야2</label>
                            <textarea name="HosSpecialty2" id="HosSpecialty2" placeholder="전문분야2" required></textarea>
                        </div>
                        <div>
                            <label for="HosParking">주차</label>
                            <textarea name="HosParking" id="HosParking" placeholder="ex) 주차 가능, 주차 불가능" required></textarea>
                        </div>
                        <div>
                            <label for="HosService1">해쉬태그1</label>
                            <textarea name="HosService1" id="HosService1" placeholder="서비스1"></textarea>
                        </div>
                        <div>
                            <label for="HosService2">해쉬태그2</label>
                            <textarea name="HosService2" id="HosService2" placeholder="서비스2"></textarea>
                        </div>
                        <div>
                            <label for="HosPhone">번호</label>
                            <textarea name="HosPhone" id="HosPhone" placeholder="전화번호" required></textarea>
                        </div>
                        <div>
                            <label for="HosEmail">이메일</label>
                            <textarea name="HosEmail" id="HosEmail" placeholder="이메일" required></textarea>
                        </div>
                        <button type="submit" value="저장하기">저장하기</button>
                    </fieldset>
                </form>

            </div>
        </section>
        <!-- // Hos -->
        


    </main>
    <!-- //main -->
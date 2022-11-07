        <div class="searchBox">
            <form action="searchCheck.php" method="POST" class="searchBox__form">
                <div class="searchBox_inner">
                    <button class="searchBtn">
                        <img src="../asset/img/searchBtn.svg" alt="찾기 버튼" />
                    </button>
                    <input type="text" name="search" id="search" placeholder="부위을 입력해주세요 ex) 눈" required />
                </div>
                <ul class="searchTag__box">
                    <li class="searchTag"><a href="diseaseMain.php?discategory=GET_['머리']">#머리</a></li>
                    <li class="searchTag"><a href="diseaseMain.php?discategory=GET_['눈']">#눈</a></li>
                    <li class="searchTag"><a href="diseaseMain.php?discategory=GET_['다리']">#다리</a></li>
                    <li class="searchTag"><a href="diseaseMain.php?discategory=GET_['기타']">#기타</a></li>
                </ul>
            </form>
        </div>
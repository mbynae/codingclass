<div class="searchBox">
    <form action="searchCheck.php" method="POST" class="searchBox__form">
        <div class="searchBox_inner">
            <button class="searchBtn">
                <img src="../asset/img/searchBtn.svg" alt="찾기 버튼">
            </button>
            <input type="text" name="search" id="search" placeholder="지역을 입력해주세요. Ex.서울 " required>
        </div>
        <ul class="searchTag__box">
            <li class="searchTag"><a href="hospitalMain.php?category=서울">#서울</a></li>
            <li class="searchTag"><a href="hospitalMain.php?category=충청도">#충청도</a></li>
            <li class="searchTag"><a href="hospitalMain.php?category=전라도">#전라도</a></li>
            <li class="searchTag"><a href="hospitalMain.php?category=경상도">#경상도</a></li>
        </ul>
    </form>
</div>
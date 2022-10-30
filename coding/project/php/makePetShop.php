<main id="main">
    <section id="petShopWrite">
        <h2>펫샵</h2>
        <div class="container">
            <form action="makePetShopSave.php" name="petShopWrite" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>펫샵 데이터 입력</legend>
                    <div>
                        <label for="shopCate">상품 카테고리</label>
                        <input type="text" name="shopCate" id="shopCate" placeholder="상품 카테고리를 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopBrand">브랜드 이름</label>
                        <input type="text" name="shopBrand" id="shopBrand" placeholder="펫샵 브랜드를 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopItemName">상품 이름</label>
                        <input type="text" name="shopItemName" id="shopItemName" placeholder="상품 이름을 입력해주세요! " required >
                    </div>
                    <div>
                        <label for="shopItemMainEx">상품 메인 ex</label>
                        <input type="text" name="shopItemMainEx" id="shopItemMainEx" placeholder="상품 메인 ex을 입력해주세요! " required >
                    </div>
                    <div>
                        <label for="shopItemSubEx">상품 서브 ex</label>
                        <input type="text" name="shopItemSubEx" id="shopItemSubEx" placeholder="상품 서브 ex을 입력해주세요! " required >
                    </div>
                    <div>
                        <label for="shopItemEx01">상품 설명01</label>
                        <input type="text" name="shopItemEx01" id="shopItemEx01" placeholder="상품 설명01을 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopItemEx02">상품 설명02</label>
                        <input type="text" name="shopItemEx02" id="shopItemEx02" placeholder="상품 설명02을 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopItemEx03">상품 설명03</label>
                        <input type="text" name="shopItemEx03" id="shopItemEx03" placeholder="상품 설명03을 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopItemEx04">상품 설명04</label>
                        <input type="text" name="shopItemEx04" id="shopItemEx04" placeholder="상품 설명04을 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopItemPrice">상품 가격</label>
                        <input type="text" name="shopItemPrice" id="shopItemPrice" placeholder="상품 가격을 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopItemLink01">상품 링크01</label>
                        <input type="text" name="shopItemLink01" id="shopItemLink01" placeholder="상품 링크01을 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopItemLink02">상품 링크02</label>
                        <input type="text" name="shopItemLink02" id="shopItemLink02" placeholder="상품 링크02을 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopItemLink03">상품 링크03</label>
                        <input type="text" name="shopItemLink03" id="shopItemLink03" placeholder="상품 링크03을 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopItemLink04">상품 링크04</label>
                        <input type="text" name="shopItemLink04" id="shopItemLink04" placeholder="상품 링크04을 입력해주세요!" required >
                    </div>
                    <div>
                        <label for="shopImgFile">상품 이미지</label>
                        <input type="file" name="shopImgFile" id="shopImgFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요!">
                    </div>
                    <button type="submit" value="저장하기">저장하기</button>
                </fieldset>
            </form>
        </div>
    </section>
    <!-- //pet shop -->
    
</main>
<!-- //main -->
<?php
    include "../connect/connect.php";

    // 변수 설정
    $search = $_POST['search'];

    echo $search;




?>
<script>
    location.href="allSearch.php?search=<?=$search?>";
</script>
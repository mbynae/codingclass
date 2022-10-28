<?php
    include "../connect/connect.php";


    $Category = $_POST['region'];


    $Catesql = "SELECT * FROM Hospital WHERE HosCategory = '{$Category}'";
    $CateResult = $connect -> query($Catesql);

    $CateInfo = $CateResult -> fetch_array(MYSQLI_ASSOC);

    echo $Catesql;
?>
<script>
    location.href='hospitalMain.php?region=<?=$Category?>';
</script>
<?php
    include "../connect/session.php";
    unset($_SESSION['myMemberID']);
    unset($_SESSION['youEmail']);
    unset($_SESSION['youName']);
?>

<script>
    location.href="../php/main.php";
</script>
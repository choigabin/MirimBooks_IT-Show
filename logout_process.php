<?php
    session_start();
    session_destroy();
?>
<script>
    alert("회원가입 화면으로 이동합니다!");
    location.href="index.php";
</script>
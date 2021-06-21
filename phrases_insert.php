<!-- 인상깊은 구절 디비 연결 -->
<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');

$_user = $_SESSION['useremail'];
$_content = $_POST['input-text'];

$sql = "insert into phrases(user, content)
values('$_user', '$_content')";

mysqli_query($conn, $sql);
?>
<script>
    alert("인상깊은 구절 등록이 완료되었습니다!");
    location.href="main.php";
</script>

<!-- 인상깊은 구절 디비 연결 -->
<?php
session_start();
$conn = mysqli_connect('localhost', 'mibooks', 'P9bHVqNsezHNbSfE', 'mibooks');

$_user = $_SESSION['useremail'];
$_content = $_POST['input-text'];

mysqli_query($conn,"set names utf8;");

$sql = "insert into phrases(user, content)
values('$_user', '$_content')";

///mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    ?>
    <script>
       alert("인상깊은 구절 등록이 완료되었습니다!");
       location.href="main.php";
    </script>
    <?php
} else {
    echo "레코드 추가 실패! : ".mysqli_error($conn);
}
mysqli_close($conn);
?>
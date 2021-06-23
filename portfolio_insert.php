<!-- 포트폴리오 디비 연결 -->
<?php
session_start();
//데이터 베이스 연결 
$conn = mysqli_connect('localhost', 'mibooks', 'P9bHVqNsezHNbSfE', 'mibooks');

$_user = $_SESSION['useremail'];
$_title = $_POST['title'];
$_writer = $_POST['writer'];
$_publisher = $_POST['publisher'];
$_date = $_POST['date'];
$_content = $_POST['content'];

mysqli_query($conn,"set names utf8;");

$sql = "insert into portfolio(user, title, writer, publisher, date, content)
values('$_user', '$_title', '$_writer', '$_publisher', '$_date', '$_content')";

///mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    ?>
    <script>
       alert("포트폴리오 작성이 완료되었습니다.")
       location.href="main.php";
    </script>
    <?php
} else {
    echo "레코드 추가 실패! : ".mysqli_error($conn);
}
mysqli_close($conn);
?>
<?php
$conn = mysql('localhost', 'root', '100412', 'mibooks');

$_title = $_POST['title'];
$_writer = $_POST['writer'];
$_publisher = $_POST['publisher'];
$_date = $_POST['date'];
$_content = $_POST['content'];

$sql = "insert into portfolio(title, writer, publisher, date, content)
values( '$_title', '$_writer', '$_publisher', '$_date', '$_content')";

mysqli_query($conn, $sql);
?>

<script>
    alert("포트폴리오 작성이 완료되었습니다.")
    location.href="main.html";
</script>
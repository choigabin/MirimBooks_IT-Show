<?php
$conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');

$_content = $_POST['input_text'];

$sql = "insert into phrases(content)
values( '$_content')";

mysqli_query($conn, $sql);
?>
<script>
    alert("인상깊은 구절 등록이 완료되었습니다!");
    location.href="main.php";
</script>

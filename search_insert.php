<!-- 도서 정보 디비 연결 -->
<?php
$conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');

$_img = $_POST['img'];
$_teacher = $_POST['teacher'];
$_title = $_POST['title'];
$_content = $_POST['content'];
$_link = $_POST['link'];

$sql = "insert into search(img, teacher, title, content, link)
values('$_img', '$_teacher', '$_title', '$_content', '$_link')";

mysqli_query($conn, $sql);
?>
<script>
    alert("도서 정보 등록이 완료되었습니다!");
    location.href="search_form.php";
</script>
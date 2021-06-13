<?php
    $conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');

    $_num = $_POST['num'];
    $_name = $_POST['name'];
    $_email = $_POST['email'];

    $sql = "insert into user(num, name, email)
    values( '$_num', '$_name', '$_email')";

    mysqli_query($conn, $sql);
?>
<script>
    alert("미북스의 회원이 되신 것을 환영합니다!");
    location.href="main.php";
</script>

<?php
$conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');

$_title = $_POST['plus_title'];
$_writer = $_POST['plus_writer'];
$_publisher = $_POST['plus_publisher'];
$_whole = $_POST['plus_whole'];

$sql = "insert into add_book(plus_title, plus_writer, plus_publisher, plus_whole)
values( '$_title', '$_writer', '$_publisher', '$_whole')";

mysqli_query($conn, $sql);
?>
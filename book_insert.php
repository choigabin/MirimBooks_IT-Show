<!-- 독서 목록 디비 연결 -->
<?php
    session_start();
    $conn = mysqli_connect('localhost', 'mibooks', 'P9bHVqNsezHNbSfE', 'mibooks');

    $_user = $_SESSION['useremail'];
    $_title = $_POST['plus_title'];
    $_writer = $_POST['plus_writer'];
    $_publisher = $_POST['plus_publisher'];
    $_whole = $_POST['plus_whole'];

    mysqli_query($conn,"set names utf8;");

    $sql = "insert into add_book(user, plus_title, plus_writer, plus_publisher, plus_whole)
    values('$_user', '$_title', '$_writer', '$_publisher', '$_whole')";

    ///mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
        alert("책 등록이 완료되었습니다!");
        location.href="main.php";
        </script>
        <?php
    } else {
        echo "레코드 추가 실패! : ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>

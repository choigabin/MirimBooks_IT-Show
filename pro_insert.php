<!-- 회원가입 디비 연결 -->
<?php
    session_start();
    $conn = mysqli_connect('localhost', 'mibooks', 'P9bHVqNsezHNbSfE', 'mibooks');

    $_user = $_SESSION['useremail'];
    $_title = $_POST['title'];
    $_page = $_POST['user-page'];

    mysqli_query($conn,"set names utf8;");

    $sql = "insert into pro(user, b_title, proc)
    values('$_user', '$_title', '$_page')";

    ///mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
           location.href="main.php";
        </script>
        <?php
    } else {
        echo "레코드 추가 실패! : ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>

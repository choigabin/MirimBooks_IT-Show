<!-- 회원가입 디비 연결 -->
<?php
    $conn = mysqli_connect('localhost', 'mibooks', 'P9bHVqNsezHNbSfE', 'mibooks');

    $_num = $_POST['num'];
    $_name = $_POST['name'];
    $_email = $_POST['email'];
    $_passwd = $_POST['passwd'];

    mysqli_query($conn,"set names utf8;");

    $sql = "insert into user(num, name, email, passwd)
    values( '$_num', '$_name', '$_email', '$_passwd')";

    ///mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
           alert("미북스의 회원이 되신 것을 환영합니다! 로그인 후 서비스를 이용해주세요.");
           location.href="main_login.php";
        </script>
        <?php
    } else {
        echo "레코드 추가 실패! : ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>

<?php
    $conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');

    $_num = $_POST['num'];
    $_name = $_POST['name'];
    $_email = $_POST['email'];
    $_passwd = $_POST['passwd'];

    $sql = "insert into user(num, name, email, passwd)
    values( '$_num', '$_name', '$_email', '$_passwd')";

    mysqli_query($conn, $sql);
?>
<script>
    alert("미북스의 회원이 되신 것을 환영합니다!");
    location.href="main_login.php";
</script>

<?php
    $conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');

    $_name = $_POST['name'];
    $_image = $_POST['image'];
    $_email = $_POST['email'];

    $sql = "insert into user(name, image, email)
    values( '$_name', '$_image', '$_email')";

    mysqli_query($conn, $sql);
?>
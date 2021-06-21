<?php
    $conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');

    $sql = "select img, teacher, title, content from search";
    $result = mysqli_query($conn, $sql);
    $re = mysqli_fetch_array($result);
        header("Content-type:image/jpg");
        echo $re[0]."<br>";
     
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    for($i = 0 ; $i < $num ; $i++) {
        $re = mysqli_fetch_array($result);
        echo $re[1]."<br>";
        echo $re[2]."<br>";
        echo $re[3];
    }
?>

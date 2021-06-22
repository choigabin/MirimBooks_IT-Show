<!DOCTYPE html>
<html>
<head>
	<title>MIBOOKS</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');

    $sql = "select img, teacher, title, content from search";
    $result = mysqli_query($conn, $sql);
    $re = mysqli_fetch_array($result);

    $num = mysqli_num_rows($result);

    for($i = 0 ; $i < $num ; $i++) {
        $re = mysqli_fetch_array($result);
    ?>
    <table>
        <tr class="body_tr">
            <!-- 도서목록 <책 번호> -->
            <td width="97"><?php echo "<img src ='$re[0]'>" ?></td>
            <!-- 도서목록 <책 제목> -->
            <td width="350" style="text-align: left;"><?php echo $re[1] ?></td>
            <td width="350" style="text-align: left;"><?php echo $re[2] ?></td>
            <td width="350" style="text-align: left;"><?php echo $re[3] ?></td>
        </tr>
    </table>
    <?php
        }
    ?>
</body>
<?php
    

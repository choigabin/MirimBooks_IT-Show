<?php
    $search = $_POST['search-name'];

    switch($search) {
        case "WEB", "web":
            echo "<script>location.href='search.php'</script>";
            break;
        case "BACK TECH", "back tech":
            echo "<script>location.href='search2.php'</script>";
            break;
        case "자기계발":
            echo "<script>location.href='search3.php'</script>";
            break;
        case "소설", "에세이", "소설/에세이":
            echo "<script>location.href='search.php'</script>";
            break;
        case "고전", "역사", "소설/에세이":
    }
  
    if($search = "WEB" or $search = "web") {
    ?>ㄴ
        <script>
           location.href="search.php";
        </script>
    <?php
    } elseif($search = "BACK TECH" or $search = "back tech") {
    ?>
        <script>
            location.href="search2.php";
        </script>
    <?php
    } elseif($search = "자기계발") {
    ?>
            <script>
                location.href="search3.php";
            </script>
    <?php
    } elseif($search = "소설" or $search = "에세이" or $search = "소설/에세이") {
    ?>
            <script> 
                location.href="search4.php";
            </script>
    <?php
    } elseif($search = "고전" or $search = "역사" or $search = "고전 역사") {
    ?>
            <script>
                location.href="search5.php";
            </script>
    <?php
    } else {
    ?>
        <script>
            alert("알맞은 카테고리를 입력하세요");
            location.href="search.php";
        </script>
    <?php
    }
?>
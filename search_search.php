<?php
    $search = $_POST['search-name'];

    switch($search) {
        case "WEB":
        case "web":
            echo "<script>location.href='search.php'</script>";
            break;
        case "BACK TECH":
        case "back tech":
            echo "<script>location.href='search2.php'</script>";
            break;
        case "자기계발":
            echo "<script>location.href='search3.php'</script>";
            break;
        case "소설":
        case "에세이":
        case "소설/에세이":
            echo "<script>location.href='search4.php'</script>";
            break;
        case "고전":
        case "역사":
        case "고전 역사":
            echo "<script>location.href='search5.php'</script>";
            break;
        default:
        ?>
            <script>
                alert("올바른 카테고리를 입력해주세요");
                location.href='search.php';
            </script>;
        <?php  
    }
?>
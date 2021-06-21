<!-- 도서 정보 등록폼 -->
<html lang="en">
<head>
	<title>MIBOOKS</title>
</head>
<body>
    <form role="form" method="post" action="search_insert.php">
        <div class="plus-input-container">
            <p class="plus-ment"> 도서 정보 디비 등록폼 </p>
            <!-- 이미지 -->
            <input type="file" id="img" name="img">
            <!-- 선생님 -->
            <input type="text" id="teacher" name="teacher" placeholder="저자">
            <!-- 제목 -->
            <input type="text" id="title" name="title" placeholder="출판사">
            <!-- 내용 -->
            <input type="text" id="content" name="content" placeholder="전체 페이지 수">
            <!-- 등록 버튼 -->
            <input type="submit" id="add-submit" class="add-button" value="등록">
        </div>
    </form>
</body>
</html>
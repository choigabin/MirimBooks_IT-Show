<!-- 도서 정보 등록폼 -->
<html lang="en">
<head>
	<title>MIBOOKS</title>
</head>
<body>
    <form name="bf" method="post" action="search_insert.php">
        <div class="plus-input-container">
            <p class="plus-ment"> 도서 정보 디비 등록폼 </p>
            <!-- 이미지 -->
            <label for="file">Filename:</label>
            <input type="file" name="file" id="file"><br>
            <!-- 선생님 -->
            <input type="text" id="teacher" name="teacher" placeholder="선생님">
            <!-- 제목 -->
            <input type="text" id="title" name="title" placeholder="책제목">
            <!-- 내용 -->
            <input type="text" id="content" name="content" placeholder="소개글">
            <!-- 링크 -->
            <input type="text" id="link" name="link" placeholder="링크">
            <!-- 등록 버튼 -->
            <input type="submit" id="add-submit" class="add-button" value="등록" onclick="location.bf.submit();">
        </div>
    </form>
</body>
</html>
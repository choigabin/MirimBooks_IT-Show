<!-- 포트폴리오 조회 화면 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/potfolio.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="image/favicon.png" type="image/png">
	<title>MIBOOKS</title>
	<script type="text/javascript">
		function cmaTextareaSize(obj, bsize) {
			let sTextarea = document.getElementById(obj);
			let csize = (sTextarea.scrollHeight >= bsize) ? sTextarea.scrollHeight + "px" : bsize + "px";
			sTextarea.style.height = bsize + "px";
			sTextarea.style.height = csize;
		}
	</script>
</head>

<body>
	<header>
		<nav>
			<a href="main.php"><img src="image/mibooks_logo_wh.svg" class="logo_wh"></a>
			<ul>
				<li><a href="main.html#timer">타이머</a></li>
				<li><a href="main.html#index">인덱스</a></li>
				<li><a href="main.html#percent">독서진행률</a></li>
				<li><a href="main.html#book_list">목록</a></li>
				<li><a href="potfolio.html">독서포트폴리오</a></li>
			</ul>
			<div class="search_data">
				<!-- 메뉴바 도서 검색 INPUT -->
				<input type="search" placeholder="관심 도서를 검색해주세요.">
				<a href="search.html"><img src="image/search.svg"></a>
			</div>
			<a href="#plus"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46"
					class="plus">
					<g id="그룹_15" data-name="그룹 15" transform="translate(-1560 -15)">
						<circle id="타원_31" data-name="타원 31" cx="23" cy="23" r="23" transform="translate(1560 15)"
							fill="#dcdcdc" />
						<path id="plus_icon"
							d="M31.214,13.766H19.794V2.294A2.29,2.29,0,0,0,17.51,0H15.988A2.29,2.29,0,0,0,13.7,2.294V13.766H2.284A2.29,2.29,0,0,0,0,16.061V17.59a2.29,2.29,0,0,0,2.284,2.294H13.7V31.356a2.29,2.29,0,0,0,2.284,2.294H17.51a2.29,2.29,0,0,0,2.284-2.294V19.884h11.42A2.29,2.29,0,0,0,33.5,17.59V16.061A2.29,2.29,0,0,0,31.214,13.766Zm0,0"
							transform="translate(1566.251 21.175)" fill="#fff" />
					</g>
				</svg></a>
			<div id="plus" class="book-plus">
				<div class="cancel-container"><a href="#" class="cancel">
						<img src="image/cancel.svg">
					</a>
				</div>
				<div class="plus-input-container">
					<p class="plus-ment">도서 등록을 위해<br>아래 정보를 입력해주세요.</p>
					<!-- <책 제목> 도서 등록 INPUT -->
					<input type="text" id="plus-title" placeholder="책 제목">
					<!-- <저자> 도서 등록 INPUT -->
					<input type="text" id="plus-writer" placeholder="저자">
					<!-- <출판사> 도서 등록 INPUT -->
					<input type="text" id="plus-publiser" placeholder="출판사">
					<!-- <페이지 수> 도서 등록 INPUT -->
					<input type="text" id="plus-whole" placeholder="전체 페이지 수">
					<!-- <확인 버튼> 도서 등록 INPUT SUBMIT -->
					<input type="submit" id="plus-submit" class="plus-button" value="확인">
				</div>
			</div>
			<a href="#popup"><img src="image/user.svg" class="user" /></a>
			<!-- 로그인 팝업 -->
			<div class="login-popup" id="popup">
				<div class="cancel-container"><a href="#" class="cancel">
						<img src="image/cancel.svg">
					</a>
				</div>
				<img src="image/user.svg">
				<!-- LOGIN 학번 이름 INPUT -->
				<input type="text" class="login-number" placeholder="학번이름을 입력해주세요. ex) 1520 홍길동" />
				<!-- LOGIN BUTTON -->
				<button class="login-button">
					<img src="image/login_btn.svg">
				</button>
			</div>
		</nav>
	</header>

	<script>
		// 테이블의 Row 클릭시 값 가져오기
		$("#table-1 tr").click(function(){ 	

		var str = ""
		var tdArr = new Array();	// 배열 선언

		// 현재 클릭된 Row(<tr>)
		var tr = $(this);
		var td = tr.children();

		// tr.text()는 클릭된 Row 즉 tr에 있는 모든 값을 가져온다.
		console.log("클릭한 Row의 모든 데이터 : "+tr.text());

		// 반복문을 이용해서 배열에 값을 담아 사용할 수 도 있다.
		td.each(function(i){
			tdArr.push(td.eq(i).text());
		});

		console.log("배열에 담긴 값 : "+tdArr);

		// td.eq(index)를 통해 값을 가져올 수도 있다.
		var no = td.eq(0).text();
		var userid = td.eq(1).text();
		var name = td.eq(2).text();
		var email = td.eq(3).text();


		str +=	" * 클릭된 Row의 td값 = No. : <font color='red'>" + no + "</font>" +
				", 아이디 : <font color='red'>" + userid + "</font>" +
				", 이름 : <font color='red'>" + name + "</font>" +
				", 이메일 : <font color='red'>" + email + "</font>";		

		console.log(str);
		});

	</script>
	<form role="form" method="post" action="portfolio_insert.php">
		<div id="potfolio">
			<div class="head-title">
				<h1>독서 포트폴리오</h1>
				<div class="line"></div>
				<p class="description">책에서만 쓴 독서 포트폴리오를<br />
					미북스에서 더욱 쉽게 수정하고, 작성해보세요.</p>
			</div>

			<div class="info">
			<!-- 포트폴리오 디비에서 꺼내오기 -->
			<?php
				$conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');
				$sql = "select p.title, p.writer, p.publisher, p.date, p.content
						from add_book a, portfolio p
						where a.plus_title = p.title;";
				$result = mysqli_query($conn, $sql);
				$num = mysqli_num_rows($result);

				$re = mysqli_fetch_array($result);
			?>
				<div class="title container">
					<label for="title">책 제목 &nbsp;<?php echo $re[0] ?> </label>
					
				</div>
				<div class="writer container">
					<label for="writer">저자 &nbsp;<?php echo $re[1] ?> </label>
				</div>
				<div class="publisher container">
					<label for="publisher">출판사 &nbsp;<?php echo $re[2] ?> </label>
				</div>
				<div class="date container">
					<label for="date">읽은 날짜 &nbsp;<?php echo $re[3] ?> </label>
				</div>
			</div>
			<div class="main-container">
				<textarea name="content" placeholder="내용" id="content" class="textarea_size"
					onchange="cmaTextareaSize('content', 612);" onkeyup="cmaTextareaSize('main', 612);"><?php echo $re[4] ?></textarea>
				<script>
					cmaTextareaSize('content', 612);
				</script>
			</div>
			<div class="end">
				<!-- 수정 BUTTON -->
				<input type="button" value="수정" id="alter">
				<!-- 저장 BUTTON -->
				<input type="submit" value="저장" id="save">
			</div>
		</div>
	</form>
	<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="link-container">
				<ul>
					<li><a href="#">개인정보보호방침</a></li>
					<li><a href="#">학교정보공개</a></li>
					<li><a href="#">배너모임</a></li>
					<li><a href="#">기존홈페이지</a></li>
				</ul>
			</div>
			<div class="address-container">(08821) 서울특별시 관악구 호암로 546 (신림동)</div>
			<div class="tel-container">
				<ul>
					<li><strong>교무실&nbsp;</strong>02-872-4071(Fax 02-887-0856)</li>
					<li><strong>개발채용&nbsp;</strong>070-5099-8313</li>
					<li><strong>디자인채용&nbsp;</strong>070-5099-8315</li>
					<li><strong>취업지원부&nbsp;</strong>02-888-8350 (Fax 02-875-2092)</li>
					<li><strong>행정실&nbsp;</strong>02-886-1812</li>
				</ul>
			</div>
			<div class="line"></div>
			<div class="info-container">
				<ul>
					<li>546 Hoam-ro, Gwanak-gu, Seoul, 08821 Korea</li>
					<li>MIRIM MEISTER SCHOOL</li>
				</ul>
			</div>
		</div>
	</footer>
</body>

</html>
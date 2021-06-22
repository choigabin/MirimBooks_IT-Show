<html>

<head>
	<meta charset='utf-8'>
	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="365726543848-dv3of5359i4bukccdlbejqa5nbnbe1rt.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="image/favicon.png" type="image/png">
	<title>MIBOOKS</title>
</head>

<body>
	<header>
		<nav>
			<a href="main.html"><img src="image/mibooks_logo_wh.svg" class="logo_wh"></a>
			<ul>
				<li><a href="#timer">타이머</a></li>
				<li><a href="#index">인덱스</a></li>
				<li><a href="#percent">독서진행률</a></li>
				<li><a href="#book_list">목록</a></li>
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
				<form role="form" method="post" action="book_insert.php">
                    <div class="plus-input-container">
                        <p class="plus-ment">도서 등록을 위해<br>아래 정보를 입력해주세요.</p>
                        <!-- <책 제목> 도서 등록 INPUT -->
                        <input type="text" id="plus_title" name="plus_title" placeholder="책 제목">
                        <!-- <저자> 도서 등록 INPUT -->
                        <input type="text" id="plus_writer" name="plus_writer" placeholder="저자">
                        <!-- <출판사> 도서 등록 INPUT -->
                        <input type="text" id="plus_publiser" name="plus_publiser" placeholder="출판사">
                        <!-- <페이지 수> 도서 등록 INPUT -->
                        <input type="text" id="plus_whole" name="plus_whole" placeholder="전체 페이지 수">
                        <!-- <확인 버튼> 도서 등록 INPUT SUBMIT -->
                        <input type="submit" id="plus-submit" class="plus-button" value="확인">
                    </div>
				</form>
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
				<div class="g-signin2" data-onsuccess="onSignIn()" data-theme="dark">
					<button class="login-button">
						<img class="login_image" src="image/google.svg" onmouseover="this.src='image/google_hover.svg'"
						onmouseout="this.src='image/google.svg'">
						<script>
							function onSignIn(googleUser) {
								// Useful data for your client-side scripts:
								var profile = googleUser.getBasicProfile();
								console.log("ID: " + profile.getId()); // Don't send this directly to your server!
								console.log('Full Name: ' + profile.getName());
								console.log('Given Name: ' + profile.getGivenName());
								console.log('Family Name: ' + profile.getFamilyName());
								console.log("Image URL: " + profile.getImageUrl());
								console.log("Email: " + profile.getEmail());
								// The ID token you need to pass to your backend:
								var id_token = googleUser.getAuthResponse().id_token;
								console.log("ID Token: " + id_token);
							}
						</script>
					</button>
				</div>
			</div>
		</nav>
	</header>
	<!-- banner -->
	<div class="banner">
		<input type="radio" name="slide" id="slide01" checked>
		<input type="radio" name="slide" id="slide02">
		<input type="radio" name="slide" id="slide03">
		<div class="slidewrap">
			<ul class="slidelist">
				<!-- 슬라이드 영역 -->
				<li class="slideitem">
					<a>
						<div class="textbox">
						</div>
						<img src="image/banner_01.png">
					</a>
				</li>
				<li class="slideitem">
					<a>

						<div class="textbox">
						</div>
						<img src="image/banner_02.png">
					</a>
				</li>
				<li class="slideitem">
					<a>

						<div class="textbox">
						</div>
						<img src="image/banner_01.png">
					</a>
				</li class="slideitem">
				<!-- 좌,우 슬라이드 버튼 -->
				<div class="slide-control">
					<div>
						<label for="slide03" class="left"></label>
						<label for="slide02" class="right"></label>
					</div>
					<div>
						<label for="slide01" class="left"></label>
						<label for="slide03" class="right"></label>
					</div>
					<div>
						<label for="slide02" class="left"></label>
						<label for="slide01" class="right"></label>
					</div>
				</div>
			</ul>
			<!-- 페이징 -->
			<ul class="slide-pagelist">
				<li><label for="slide01"></label></li>
				<li><label for="slide02"></label></li>
				<li><label for="slide03"></label></li>
			</ul>
		</div>
	</div>

	<!-- timer -->
	<div id="timer" class="timer_area">
		<div class="scroll"></div>
		<div class="title">
			<h1>타이머</h1>
			<div class="line"></div>
		</div>
		<div id="clock" class="timer">
			<ul class="time">
				<li>
					<h1 class="timer_box" id="hr">00</h1>
					<div class="timer_text">HOURS</div>
				</li>
				<li>
					<h1 class="timer_box" id="min">00</h1>
					<div class="timer_text">MINUTES</div>
				</li>
				<li>
					<h1 class="timer_box" id="sec">00</h1>
					<div class="timer_text">SECONDS</div>
				</li>
			</ul>
		</div>
		<div class="container">
			<div>
				<button onclick="start()" id="start" class="btn start">
					<!-- <img src="image/stop_off.svg" class="start"> -->
					<svg id="start_off" data-name="구성 요소 2 – 1" xmlns="http://www.w3.org/2000/svg" width="98"
						height="97" viewBox="0 0 98 97">
						<g id="start_circle" data-name="타원 31" fill="none" stroke="#386138" stroke-width="4">
							<ellipse cx="49" cy="48.5" rx="49" ry="48.5" stroke="none" />
							<ellipse id="start_circle_in" cx="49" cy="48.5" rx="47" ry="46.5" fill="none" />
						</g>
						<line id="start_line_1" data-name="선 51" y2="37" transform="translate(39 30)" fill="none"
							stroke="#386138" stroke-linecap="round" stroke-width="6" />
						<line id="start_line_2" data-name="선 52" y2="37" transform="translate(59 30)" fill="none"
							stroke="#386138" stroke-linecap="round" stroke-width="6" />
					</svg>

				</button>
				<button onclick="stop()" id="stop" class="btn stop">
					<!-- <img src="image/start_off.svg" alt=""> -->
					<svg id="stop_off" data-name="구성 요소 3 – 1" xmlns="http://www.w3.org/2000/svg" width="98" height="97"
						viewBox="0 0 98 97">
						<g id="stop_circle" data-name="타원 21" fill="none" stroke="#386138" stroke-width="4">
							<ellipse cx="49" cy="48.5" rx="49" ry="48.5" stroke="none" />
							<ellipse id="stop_circle_in" cx="49" cy="48.5" rx="47" ry="46.5" fill="none" />
						</g>
						<rect id="stop_square" data-name="사각형 42" width="33" height="32" rx="5"
							transform="translate(33 33)" fill="#386138" />
					</svg>

				</button>
				<button onclick="reset()" id="reset" class="btn stop">
					<!-- <img src="image/reset_off.svg" alt=""> -->
					<svg id="reset_off" data-name="구성 요소 4 – 1" xmlns="http://www.w3.org/2000/svg" width="98"
						height="97" viewBox="0 0 98 97">
						<g id="reset_circle" data-name="타원 22" fill="none" stroke="#386138" stroke-width="4">
							<ellipse cx="49" cy="48.5" rx="49" ry="48.5" stroke="none" />
							<ellipse id="reset_circle_in" cx="49" cy="48.5" rx="47" ry="46.5" fill="none" />
						</g>
						<g id="그룹_7" data-name="그룹 7" transform="translate(35.514 16.889) rotate(14)">
							<path id="reset_in_1" data-name="패스 14"
								d="M39.05,0A19.525,19.525,0,0,1,19.525,19.525,19.525,19.525,0,0,1,0,0"
								transform="translate(0 27.672)" fill="none" stroke="#386138" stroke-linejoin="round"
								stroke-width="8" />
							<path id="reset_in_2" data-name="패스 15"
								d="M19.518,0A19.523,19.523,0,0,0,2.535,10.05,19.835,19.835,0,0,0,0,19.83"
								transform="translate(0.007 8.147)" fill="none" stroke="#386138" stroke-linejoin="round"
								stroke-width="8" />
							<g id="reset_in_3-1" data-name="다각형 1" transform="translate(32.749) rotate(87)"
								fill="#707070">
								<path
									d="M 8.750229835510254 9.857437133789063 L 6.839385986328125 9.857437133789063 L 7.794807434082031 8.158906936645508 L 8.750229835510254 9.857437133789063 Z"
									stroke="none" />
								<path id="reset_in_3"
									d="M 7.79480504989624 -5.7220458984375e-06 L 15.5896053314209 13.8574275970459 L 4.76837158203125e-06 13.8574275970459 L 7.79480504989624 -5.7220458984375e-06 Z"
									stroke="none" fill="#386138" />
							</g>
						</g>
					</svg>
				</button>
			</div>
		</div>
	</div>
	<!-- indext -->
	<div id="index" class="index-container">
		<div class="scroll"></div>
		<div class="title">
			<h1>인덱스</h1>
			<div class="line"></div>
			<p class="discription">인상 깊은 구절이나 페이지를 적어두세요.</p>
		</div>
		<div class="input-container">
			<div class="input-output-container">
				<!-- 인덱스 출력 란 -->
				<div class="output-box">
					<p id="confirm-text">여기에 사용자가 입력한 인덱스가 출력됩니다.</p>
				</div>
				<!-- 인덱스 입력 란 -->
				<div class="input-box">
					<textarea class="input-text" placeholder="여기에 내용을 입력하세요." name="input_text" id="input_text"></textarea>
				</div>
					<!-- 인덱스 <저장> 버튼 -->
				<input class="save-btn" type="submit" name="save" value="저장" id="save">
			</div>
			<div class="button-container">
				<button class="button-write" id="write">
					<svg xmlns="http://www.w3.org/2000/svg" width="35.998" height="35.999" viewBox="0 0 35.998 35.999">
						<path id="Icon_awesome-pencil-alt" data-name="Icon awesome-pencil-alt"
							d="M35.009,9.991l-3.241,3.241a.845.845,0,0,1-1.2,0l-7.8-7.8a.845.845,0,0,1,0-1.2L26.009.991a3.382,3.382,0,0,1,4.774,0l4.226,4.226A3.37,3.37,0,0,1,35.009,9.991ZM19.983,7.017,1.519,25.481.028,34.024a1.69,1.69,0,0,0,1.955,1.955l8.543-1.5L28.99,16.017a.845.845,0,0,0,0-1.2l-7.8-7.8a.853.853,0,0,0-1.2,0ZM8.726,23.9a.98.98,0,0,1,0-1.392L19.554,11.679a.984.984,0,0,1,1.392,1.392L10.118,23.9a.98.98,0,0,1-1.392,0ZM6.188,29.813H9.563v2.552l-4.535.795L2.841,30.973l.795-4.535H6.188Z"
							transform="translate(-0.002 -0.005)" fill="#386138" />
					</svg>
				</button>
				<button class="button-confirm" id="confirm">
					<svg xmlns="http://www.w3.org/2000/svg" width="33.625" height="33.041" viewBox="0 0 33.625 33.041">
						<g id="Icon_feather-check-circle" data-name="Icon feather-check-circle"
							transform="translate(-1.497 -1.473)" opacity="0.1">
							<path id="패스_20" data-name="패스 20" d="M33,16.62V18A15,15,0,1,1,24.105,4.29" fill="none"
								stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
							<path id="패스_21" data-name="패스 21" d="M33,6,18,21.015l-4.5-4.5" fill="none" stroke="#000"
								stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
						</g>
					</svg>
				</button>
			</div>
		</div>
	</div>
	<!-- percent -->
	<div id="percent" class="percent-container">
		<div class="scroll"></div>
		<div class="title">
			<h1>독서진행률</h1>
			<div class="line"></div>
			<p class="discription">읽고 있는 책의 독서진행률을 눈으로 확인해보세요.</p>
		</div>
		<div class="percent-all">
			<svg xmlns="http://www.w3.org/2000/svg" width="18.947" height="33.895" viewBox="0 0 18.947 33.895">
				<path id="패스_33" data-name="패스 33" d="M336.99,387.524l-14.119,14.119,14.119,14.119"
					transform="translate(-320.871 -384.695)" fill="none" stroke="#000" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="4" opacity="0.29" />
			</svg>
			<div class="percent-box">
				<div class="book">
					<!-- 아이콘 최대 크기임. -->
					<!-- 책 아이콘 -->
					<img src="image/book_icon.svg">
					<div class="bookinfo-container">
						<!-- 책 제목 -->
						<h3 class="bookname">시선으로부터</h3>
						<!-- 작가 -->
						<p class="bookwriter">정세랑</p>
						<div class="page-percent">
							<!-- 책 읽은 페이지 수 INPUT -->
							<p><input type="text" id="user-page" placeholder="000"></input>/
								<!-- 책 총 페이지 수 -->
								<span id="whole-page">350</span></p>
						</div>
					</div>
				</div>
				<div class="book">
					<img src="image/book_icon.svg">
					<div class="bookinfo-container">
						<h3 class="bookname">시선으로부터</h3>
						<p class="bookwriter">정세랑</p>
						<div class="page-percent">
							<p><input type="text" id="user-page" placeholder="000">/<span id="whole-page">350</span></p>
						</div>
					</div>
				</div>
				<div class="book">
					<img src="image/book_icon.svg">
					<div class="bookinfo-container">
						<h3 class="bookname">시선으로부터</h3>
						<p class="bookwriter">정세랑</p>
						<div class="page-percent">
							<p><input type="text" id="user-page" placeholder="000">/<span id="whole-page">350</span></p>
						</div>
					</div>
				</div>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" width="18.948" height="33.895" viewBox="0 0 18.948 33.895">
				<path id="패스_34" data-name="패스 34" d="M322.871,387.524l14.12,14.119-14.12,14.119"
					transform="translate(-320.043 -384.695)" fill="none" stroke="#000" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="4" />
			</svg>
		</div>
	</div>
	<!-- 도서목록 -->
	<div id="book_list">
		<div class="scroll"></div>
		<div class="title">
			<h1>도서 목록</h1>
			<div class="line"></div>
		</div>
		<table>
			<thead>
				<tr class="head_tr">
					<td width="97">NO</td>
					<td width="809" style="text-align: left;">책 제목</td>
					<td width="274">저자</td>
				</tr>
			</thead>
			<tbody>
                <?php
                $conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');

                $sql = "select id, plus_title, plus_writer from add_book order by id asc";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);

                for($i = 0 ; $i < $num ; $i++) {
                    $re = mysqli_fetch_array($result);
                ?>

				<tr class="body_tr">
					<!-- 도서목록 <책 번호> -->
					<td width="97"><?php echo $re[0] ?></td>
					<!-- 도서목록 <책 제목> -->
					<td width="809" style="text-align: left;"><?php echo $re[1] ?></td>
					<!-- 도서목록 <읽은 날짜> -->
					<td width="274"><?php echo $re[2] ?></td>
				</tr>
                <?php
                }
                ?>
			</tbody>
		</table>
		<a href="#no_ptplo">팝업</a>
		<div class="no_ptplo_popup" id="no_ptplo">
			<div class="cancel-container"><a href="#book_list" class="cancel">
					<img src="image/cancel.svg">
				</a>
				<div class="no_ptople_text">아직 작성된 독서포트폴리오가 없습니다. <br>새로운 독서포트폴리오를 작성히겠습니까?</div>
			</div>
			<!-- 독포 쓰러가는 BUTTON -->
			<button class="ptplo_btn ptplo_yes">네, 쓸래요!</button>
			<!-- 취소 BUTTON -->
			<button class="ptplo_btn ptplo_no">아니요, 안 쓸래요</button>
		</div>
	</div>
	<footer>
		<div class="container">
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
	<script type="text/javascript" src="js/timer.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>

</html>
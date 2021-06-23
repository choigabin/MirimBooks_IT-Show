<!-- 검색 화면 -->
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="image/favicon.png" type="image/png">
    <title>MIBOOKS</title>
</head>

<body>
    <header>
        <nav>
            <a href="main.php"><img src="image/mibooks_logo_wh.svg" class="logo_wh"></a>
            <ul>
                <li><a href="main.php#timer">타이머</a></li>
                <li><a href="main.php#index">인덱스</a></li>
                <li><a href="main.php#percent">독서진행률</a></li>
                <li><a href="main.php#book_list">목록</a></li>
                <li><a href="potfolio.php">독서포트폴리오</a></li>
            </ul>
            <div class="search_data">
                <!-- 메뉴바 도서 검색 INPUT -->
                <input type="search" placeholder="선생님 PICK 도서 보러가기">
                <a href="search.php"><img src="image/search.svg"></a>
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
			<form method="post" action="logout_process.php">
				<div class="login-popup" id="popup">
					<div class="cancel-container"><a href="#" class="cancel">
							<img src="image/cancel.svg">
						</a>
					</div>
					
					<img src="image/user2.png">
					<?php 
					$user = $_SESSION['useremail'];
					$conn = mysqli_connect('localhost', 'mibooks', 'P9bHVqNsezHNbSfE', 'mibooks');
					$sql = "select num, name from user where email = '{$user}'";

					mysqli_query($conn, "set names utf8;");
					$result = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($result);
                
					for($i = 0 ; $i < $num ; $i++) {
						$re = mysqli_fetch_array($result);
					?>

					<!-- LOGIN 이메일 INPUT -->
					<label type="text" name="useremail" class="login-number"> <?php echo $re[0]."&nbsp;".$re[1]."님" ?> </label>
					<!-- LOGIN BUTTON -->
					<input type="submit" value="로그아웃" class="login-button"/>
					<?php
					}
					?>
				</div>
			</form>
        </nav>
    </header>
    <div class="search">
        <div class="search-bar">
        <form method="POST" action="search_search.php" name="sf">
                <div class="search-input">
                    <!-- 도서 검색 INPUT -->
                    <input type="text" name="search-name" id="search-name" class="search-name" placeholder="검색을 원하는 카테고리를 입력하세요."/>
                    <!-- 도서 검색 BUTTON -->
                    <button class="search-button" onclick="document.sf.submit();">
                        <p>search</p>
                    </button>
                </div>
            </form>
            <div class="related-search-container">
            <span class="related-search">카테고리  | </span>
                <!-- 카테고리 -->
                <span class="related-search-word"><a href="search.php">WEB</a></span>
                <span class="related-search-word"><a href="search2.php">BACK TECH</a></span>
                <span class="related-search-word"><a href="search3.php">자기계발</a></span>
                <span class="related-search-word"><a href="search4.php">소설/에세이</a></span>
                <span class="related-search-word"><a href="search5.php">고전 역사</a></span>
            </div>
        </div>
        <div class="search-container">
            <div class="book">
                <!-- 책 이미지 -->
                <img src="image/book/혼자공부하는C언어.jpg" class="book-image" />
                <div class="info">
                    <p class="recommend">이호걸선생님의 강추 책!</p>
                    <!-- 책 제목 -->
                    <p class="title">혼자 공부하는 C언어</p>
                    <!-- 책 설명 -->
                    <p class="description">1:1로 과외하듯 쉽고 빠르게 배우는 C언어 
                        프로그래밍 자습서 </p>
                </div>
            </div>
            <div class="book">
                <img src="image/book/파이썬머신러닝완벽가이드.jpg" class="book-image" />
                <div class="info">
                    <p class="recommend">민주리선생님의 강추 책!</p>
                    <p class="title">파이썬 머신러닝 완벽 가이드</p>
                    <p class="description">다양한 캐글 예제와 함께 배우는 기초 알고리즘과
                         최신 기법</p>
                </div>
            </div>
            <div class="book">
                <img src="image/book/두잇!데이터분석을위한판다스입문.jpg" class="book-image" />
                <div class="info">
                    <p class="recommend">민주리선생님의 강추 책!</p>
                    <p class="title">DO IT! 데이터 분석을 위한 판다스 입문</p>
                    <p class="description">테슬라 주식, 우버 택시 등 86개의 예제로 익히는 
                        판다스의 기본 </p>
                    </p>
                </div>
            </div>
            <div class="book">
                <img src="image/book/밑바닥부터시작된딥러닝1.jpg" class="book-image" />
                <div class="info">
                    <p class="recommend">민주리선생님의 강추 책!</p>
                    <p class="title">밑바닥부터 시작하는 딥러닝</p>
                    <p class="description">파이썬으로 익히는 딥러닝 이론과 구현, 
                        가장 쉬운 딥러닝 입문서</p>
                </div>
            </div>
            <div class="book">
                <img src="image/book/만들면서배우는코틀린안드로이드프로그래밍.jpg" class="book-image" />
                <div class="info">
                    <p class="recommend">유병석선생님의 강추 책!</p>
                    <p class="title">코틀린 안드로이드 프로그래밍</p>
                    <p class="description">유병석선생님께서 직접 집필하신 안드로이드 프로그래밍
                        교과서!</p>
                </div>
            </div>
            <div class="book">
                <img src="image/book/컴퓨터프로그램의구조와해석.jpg" class="book-image" />
                <div class="info">
                    <p class="recommend">유병석선생님의 강추 책!</p>
                    <p class="title">컴퓨터 프로그램의 구조와 해석</p>
                    <p class="description">프로그래밍이 무엇인가 돌아보게 해주는 MIT의 
                        컴퓨터과학 입문 교과서</p>
                </div>
            </div>
            
            
        </div>
    </div>
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
<?php
		$conn = mysqli_connect('localhost', 'root', '100412', 'mibooks');
		$user = $_SESSION['useremail'];
		$sql = "select id, content from phrases where user = '{$user}' order by id asc";
		$result = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($result);

		for($i = 0 ; $i < $num ; $i++) {
			$re = mysqli_fetch_array($result);
		?>

		<!-- 인상 깊은 구절 데이터 불러오는 부분 -->
		<p id="confirm-text">
			<tr class="body_tr">
				<!-- 도서목록 <책 번호> -->
				<td width="97"><?php echo $re[0] ?></td>
				<!-- 도서목록 <책 제목> -->
				<td width="500" style="text-align: left;"><?php echo $re[1] ?></td>
			</tr>
		</p>

		<?php
		}
		?>
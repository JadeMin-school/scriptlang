<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<style>
			table {
				border-collapse: collapse;

				td, th {
					border: solid 1px #000000; 
				}
			}
			th {
				padding: 6px;
			}
			td {
				padding: 6px;
				text-align: center;
			}
			#col1 {
				width: 20px;
			}
			#col2 {
				width: 250px;
			}
			#col3 {
				width: 90px;
			}
			#col4 {
				width: 100px;
			}
			#col5 {
				width: 60px;
			}
		</style>
		<?php
			$host = 'localhost'; // MySQL 호스트
			$username = 'dietmall'; // MySQL 사용자명
			$password = '1111'; // MySQL 비밀번호
			$database = 'dietmall'; // 사용할 데이터베이스명

			$conn = mysqli_connect($host, $username, $password, $database);
			mysqli_set_charset($conn, "utf8");
			if (!$conn) {
				die("MySQL 연결 실패 : " . mysqli_connect_error());
			}

			$query = "SELECT * FROM board2";
			$result = mysqli_query($conn, $query);
		?>
	</head>
	<body>
		<h2>게시판</h2>
		<table>
			<tr>
				<th id="col1">NO</th>
				<th id="col2">제목</th>
				<th id="col3">글쓴이</th>
				<th id="col4">등록일</th>
				<th id="col5">조회수</th>
			</tr>
			<?php while ($row = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td id='col1'>
						<?php echo $row["board_idx"] ?>
					</td>
					<td id='col2'>
						<?php echo $row["title"] ?>
					</td>
					<td id="col3">
						<?php echo $row["write_name"] ?>
					</td>
					<td>
						<?php echo $row["reg_date"] ?>
					</td>
					<td id='col5'>
						<?php echo $row["read_num"] ?>
					</td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>
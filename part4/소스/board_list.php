<?php
	require_once "{$_SERVER["DOCUMENT_ROOT"]}/dbconn.php";
?>
<?php
	$result = mysqli_query(
		$conn,
		"SELECT * FROM board ORDER BY board_idx DESC"
	);
?>


<!DOCTYPE html>
<html>
	<head>
		<?php require_once("{$_SERVER["DOCUMENT_ROOT"]}/header.php"); ?>

		<link type="text/css" rel="stylesheet" href="/common.css"/>
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
				<th id="col5">등록IP</th>
			</tr>
			<?php while ($result = mysqli_fetch_array($result)) { ?>
				<tr>
					<td id="col1">
						<?=$result["board_idx"]?>
					</td>
					<td id="col2">
						<a href="board_view.php?board_idx=<?=$result["board_idx"]?>">
							<?=$result["title"]?>
						</a>
					</td>
					<!-- <a href='board_view.php?board_idx=4'>제목입니다. </a> -->
					<td id="col3">
						<?=$result["write_name"]?>
					</td>
					<td id="col4">
						<?=$result["reg_date"]?>
					</td>
					<td id="col">
						<?=$result["read_num"]?>
					</td>
					<td id="col">
						<?=$result["writer_ip"]?>
					</td>
				</tr>
			<?php } ?>
			<tr>
				<td colspan="6" align="center">
					<a href="./board_write.php"> 글쓰기</a>
				</td>
			</tr>
		</table>
	</body>
</html>
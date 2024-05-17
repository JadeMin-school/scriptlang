<?php
	require_once "{$_SERVER["DOCUMENT_ROOT"]}/dbconn.php";
?>
<?php
	$result = mysqli_query(
		$conn,
		"SELECT * FROM board WHERE board_idx = {$_GET["board_idx"]}"
	);
	$result = mysqli_fetch_assoc($result);

	mysqli_query(
		$conn,
		"UPDATE board SET read_num = read_num + 1 WHERE board_idx = {$_GET["board_idx"]}"
	);
?>


<!DOCTYPE html>
<html>
	<head>
		<?php require_once("{$_SERVER["DOCUMENT_ROOT"]}/header.php"); ?>
	</head>
	<body>
		<h3>문의 게시판 읽기</h3>
		<table border="1">
			<tr>
				<td>이름</td>
				<td><?=$result["write_name"]?> </td>
			</tr>
			<tr>
				<td>제목</td>
				<td><?=$result["title"]?></td>
			</tr>
			<tr>
				<td>내용</td>
				<td><?=nl2br($result["contents"])?></td>
			</tr>
			<tr>
				<td>IP</td>
				<td><?=$result["writer_ip"]?></td>
			</tr>
			<tr>
				<td colspan="2">
					<a href="./board_list.php">목록</a>
					<a href="./board_delete.php?board_idx=<?php echo $result['board_idx']?>">삭제</a>
				</td>
			</tr>
		</table>
	</body>
</html>
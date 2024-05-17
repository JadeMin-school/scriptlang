<?php
	require_once "{$_SERVER["DOCUMENT_ROOT"]}/dbconn.php";
?>
<?php
	$result = mysqli_query(
		$conn,
		"INSERT INTO board(title, contents, write_name, writer_ip, reg_date, read_num) VALUE('{$_POST["title"]}', '{$_POST["contents"]}', '{$_POST["writer"]}', '{$_SERVER["REMOTE_ADDR"]}', SYSDATE(), 0)"
	);
	
	if($result > 0) {
		echo "
			<script>
				alert('글이 성공적으로 등록되었습니다.');
				location.href='./board_list.php';
			</script>
		";
		exit();
	}
<?php
	require_once "{$_SERVER["DOCUMENT_ROOT"]}/dbconn.php";
?>
<?php
	$result = mysqli_query(
		$conn,
		"DELETE FROM board WHERE board_idx = {$_GET["board_idx"]}"
	);
	
	if($result) {
		echo "
			<script>
				alert('글이 성공적으로 삭제되었습니다.');
				location.href = './board_list.php';
			</script>
		";
		exit();
	}
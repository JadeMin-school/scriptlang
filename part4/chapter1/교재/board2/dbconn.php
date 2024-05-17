<?php
$host = 'localhost'; // MySQL 호스트
$username = 'dietmall'; // MySQL 사용자명
$password = '1111'; // MySQL 비밀번호
$database = 'dietmall'; // 사용할 데이터베이스명
$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
if (!$conn) {
    die('MySQL 연결 실패: ' . mysqli_connect_error());
}
?>
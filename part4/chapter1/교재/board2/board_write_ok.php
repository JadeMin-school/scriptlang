<?php
include $_SERVER['DOCUMENT_ROOT'].'/board/dbconn.php';
$write_name = $_POST['writer'];
$title = $_POST['title'];
$contents = addslashes($_POST['contents']);
$writer_ip=$_SERVER["REMOTE_ADDR"];
$sql="insert into board(title, contents,write_name,writer_ip,reg_date, read_num) values('".$title."','.".$contents."','".$write_name."','".$writer_ip."',sysdate(),0)";
 $result= mysqli_query($conn, $sql);
    if($result > 0) {
        echo"<script>
            alert('글이 성공적으로 등록되었습니다.');
            location.href='./board_list.php';
        </script>";
        exit();
    } 
?>

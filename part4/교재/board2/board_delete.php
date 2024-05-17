<?php
include $_SERVER['DOCUMENT_ROOT'].'/board/dbconn.php';
$board_idx=$_GET['board_idx'];
$sql="delete from board where board_idx=".$board_idx;
$result=mysqli_query($conn,$sql);
 $result= mysqli_query($conn, $sql);
 if($result) {
        echo"<script>
            alert('글이 성공적으로 삭제되었습니다.');
            location.href='./board_list.php';
        </script>";
        exit();
    } 
?>

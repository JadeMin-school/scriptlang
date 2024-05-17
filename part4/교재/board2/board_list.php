<?php
include $_SERVER['DOCUMENT_ROOT'].'/board/dbconn.php';
$query = "SELECT * FROM board order by board_idx desc";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<style>
table {
  border-collapse: collapse;

  table, td, th {
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
#col1{
    width: 20px;
}
#col2{
    width: 250px;
}
#col3{
    width: 90px;
}
#col4{
    width: 100px;
}
#col5{
    width: 60px;
}
</style>
</head>
<body>
<h2>게시판</h2>
<table>
  <tr>
    <th id='col1'>NO</th>
    <th id='col2'>제목</th>  
    <th id='col3'>글쓴이</th>    
    <th id='col4'>등록일</th>
    <th id='col5'>조회수</th>
    <th id='col5'>등록IP</th>
  </tr>
 <?php  while ($row = mysqli_fetch_array($result)) { ?>
<tr>    
<td id='col1'><?php echo $row["board_idx"] ?></td>
    <td id='col2'><A href='board_view.php?board_idx=<?php echo $row["board_idx"] ?>'> <?php echo $row["title"] ?></A></td>
<!-- <A href='board_view.php?board_idx=4'>제목입니다. </A> -->
    <td id='col3'><?php echo $row["write_name"] ?></td>
    <td id='col4'><?php echo $row["reg_date"] ?></td>
    <td id='col'><?php echo $row["read_num"] ?></td>
	    <td id='col'><?php echo $row["writer_ip"] ?></td>
<?php } ?>
 </tr>
 <tr> <td colspan=6 align=center> <A href="./write.html"> 글쓰기 </A></TD></TR>
</table>
</body>
</html>
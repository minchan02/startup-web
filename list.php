<h1><center>게시판</center></h1>
<?php
include_once('./search_result.php');

  foreach ($rows as $row) {
?>

<!DOCTYPE html>
<html lang="en">	
<head>
	<link rel=stylesheet href='list_style.css'>
</head>
<center>
<body>
  <table class="content-table">	
	<thread>
  	  <tr>
    	<th>번호</th>
    	<th>제목</th>
    	<th>작성자</th>
    	<th>날짜</th>
  	  </tr>
	</thread>
	<tbody>
  	  <tr>
    	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->idx ?> </td>
    	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="./view.php?idx=<?php echo $row->idx?>"><?php echo $row->subject ?></a></td>
    	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->writer?></td>
    	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->reg_date?></td>
  	  </tr>
    </tbody>
  </table>
<?php
  }
?>


<p>
 <button type = "button" onclick="location.href = './write.php'">글쓰기</button>
 <button type = "button" onclick="location.href = './index.php'">홈으로</button>
</p>
	
</center>
</body>
</html>

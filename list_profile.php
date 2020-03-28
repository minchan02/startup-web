<center><h1>게시판</h1></center>
<?php
	extract($_POST);
  // 기존의 입력 정보 가져오기
  $sql = "
  	SELECT b.*
	FROM board b
	JOIN usertable u ON u.name = b.writer
	WHERE u.idx = {$idx}
  ";
  $rows = fetchAll($sql);
  foreach ($rows as $row) {
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="list_style.css">
</head>
<body><div class = "main" >
<center>
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
	
<button type = "button" onclick="location.href = './index.php'">홈으로</button>
<button type = "button" onclick="location.href = './profilecard.php'">프로필카드로 돌아가기</button>
	
</p>

	</div>
</body>
</html>
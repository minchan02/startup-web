<?php
	//이것은 로그인 되었을 때의 화면입니다.
	include_once('./lib.php');
	access(isMember(), "로그인 후 이용해주세요");
?>
<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel=stylesheet href='text-board_style.css'>
  <link rel=stylesheet href='write_style.css'>
  
</head>
<center>	
<body><div class = "content">
  <form action="./write_ok.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="writer" value="<?php echo $member->name ?>">
	<br><br>

	제목: <input type="text" placeholder="제목을 입력하세요. " name="subject"><br/>
	
	  

	<br>
					

	<textarea placeholder="내용을 입력하세요." name="content"></textarea><br/>
	
	  

	이미지를 선택해주세요: <input type="file" name="image" class ="file"><br/>
				
	<br><br>
	<button type="submit">완료</button>
	<button type="button" onclick="location.href='./board.php'">취소</button>
		
	
  </form>
	<div>
		
	</div>
	</body></center>
</html>
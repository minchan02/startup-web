<?php
//이것은 로그인 되었을 때의 화면입니다.
include_once('./lib.php');
access(isMember(), "로그인 후 이용해주세요");
  // 기존의 입력 정보 가져오기

  $db = new PDO("mysql:host=127.0.0.1;dbname=userregisteration;charset=utf8","root","ruby0421");
  $idx = $_GET['idx'];
  $sql = "SELECT * FROM board WHERE idx = '{$idx}'";
  $row = $db->query($sql)->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>	
<head>
  <link rel=stylesheet href='text-board_style.css'>	
	
  <link rel=stylesheet href='write_style.css'>	
</head>

<body>
<form action="./update_ok.php?idx=<?php echo $idx?>" method="post">
    <center> 글수정 </center>

    제목: <input type="text" placeholder="제목을 입력하세요. " name="subject"  value="<?php echo $row->subject?>">
		
	


	작성자: <?php echo $member->name ?></li>
	

>내용: <input type="text" size="80" placeholder="내용을 입력하세요. " name="content" value="<?php echo $row->content?>"></textarea>
	    
	
    
	<button type="submit">완료</button>
	<button type="button" onclick="location.href = './view.php?idx=<?php echo $row->idx?>'">취소</button>
	
        
</body>
</html>
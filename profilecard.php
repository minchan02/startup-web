<?php
include_once('./lib.php');
include_once('./profile_search.php');

  foreach ($rows as $row) {
?>
<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="UTF-8">
  <title>프로필 카드 조회</title>
  <link rel="stylesheet"type="text/css" href="card_style.css">
</head>
<body>
	<?/*php
	  $rows = fetchAll("SELECT * FROM usertable");
	  foreach ($rows as $row) {
	  버튼을 누르면 쪽지 쓸 수 있는 화면이 나타나고....작성자, 연락처, 내용, 해당 사람의 프로필 카드를 볼 수 있다.그리고 보낸 것은 자신의 프로필 카드에서 확인 가능함.. 버튼 누르면 쪽지함임. 해당 사람의 프로필 카드만 가능......
	  아니면 버튼 누르면 그 사람의 프로필카드에서 빛이 생기고 누른 사람의 이름을 확인할 수 있다.*/
	?>
	<div class="card-container">
	  <div class="upper-container">
		  <form action="./contact.php" method="post">
		  <input type="submit" name="go" value="contact" class = "contact-btn">
		  </form>
		<div class="image-container">
		  <img src="./uploads/<?php echo $row->image?>" />

		</div>

	  </div>
	  <div class="lower-container">
		<div>
		  <h3> <?php echo $row->companyname ?></h3>
		  <h4> <?php echo $row->companykind ?> / <?php echo $row->region ?> </h4>
		</div>
		<div>
		  <p>
			<?php echo $row->email ?> <br/>
			<?php echo $row->contact?>
		  </p>
		</div>
		<div>
		  <a href="./profile_board.php?idx=<?php echo $row->idx?>" class="btn">게시글 보기</a>
		</div>
	  </div>
	</div>
	<?php
	  }
	?>
	<form action="profilecard.php" method="post">
		<input class = "search-txt" type="text" name="valueToSearch" placeholder="이름 또는 회사명 검색." >
		<input type="submit" name="search" value="search">
	</form>
	<center>
	<button type="button" class="button" onclick="location.href = './my_profilecard.php'">MY 프로필카드 보기</button>
		<button type="button" class="button" onclick="location.href = './index.php'">홈으로</button></center>
</body>
</html>
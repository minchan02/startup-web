<?php
  // 기존의 입력 정보 가져오기
  include_once("./lib.php");
  $idx = $_GET['idx'] ?? NULL;
  $sql = "SELECT * FROM board WHERE idx = '{$idx}'";
  $row = fetch($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>게시물 조회 - <?php echo $row->subject?></title>
  <link rel="stylesheet" href="view_style.css">
</head>
<body>
<div class="every">
  
  <div class="table-body">
   
      <ul>
          <li class="label">작성자: </li>
          <li class="description">
              <?php echo $row->writer ?>
          </li>
      </ul>
      <ul>
          <li class="label">제목: </li>
          <li class="description">
              <?php echo $row->subject ?>
          </li>
      </ul>

      <ul>
          <li class="label">내용: </li>
          <li class="description">
              <?php echo $row->content ?>
          </li>
      </ul>
	  <?php if($row->image != 0): ?> 
      <ul>
          <li class="label">파일: </li>
          <li class="description"><a href="./uploads/<?php echo $row->image ?>" download="<?php echo $row->image?>">사진 받기</a></li>
      </ul>
	  <?php endif ?>
  </div>
	<p></p></div>
	  <?php  // 작성자가 아닐경우 게시물 수정 불가 
		if($member): 
	    $writer = $row->writer; 
	  	$my_name = $member->name; ?>
	  <?php if($writer == $my_name): ?>
	  <button type="button"  onclick="location.href = './update.php?idx=<?php echo $row->idx?>'" class = "ohyeah">수정하기</button>
	  <button type="button" class="button" onclick="location.href = './delete.php?idx=<?php echo $row->idx?>'">삭제하기</button>
	  <?php endif?>
	  <?php endif?>
      <button type="button"  onclick="location.href =  './index.php'" class="hellyeah">홈으로</button>
  

</body>
</html>

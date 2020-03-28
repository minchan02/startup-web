<?php  
include_once('./lib.php');
access(isMember(), "로그인 후 이용해주세요");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet"type="text/css" href="my-card_style.css">	
</head>	
<body>
<div class="card-container">
  <div class="upper-container">
	 <?php if(isset($_POST["go"]))
{
	?>
	  <div id="circle1" class="circle1">
</div>
	  <?php echo $member->name ?> 
	  <?php
}
	  
	  else{
		  ?>
	  <div id="circle2" class="circle2">
</div>
	  <?php
	  }
	  ?>
 	<div class="image-container">
	  <img src = "./uploads/<?php echo $member->image?>">
    </div>
  </div>
	
  <div class="lower-container">
    <div>
      <h3> <?php echo $member->companyname ?></h3>
	  <h4> <?php echo $member->companykind ?> / <?php echo $member->region ?> </h4>
    </div>
    <div>
      <p>
		<?php echo $member->email ?> <br/>
        <?php echo $member->contact?>
      </p>

    </div>
	  <?php /*
	<div>
	파일 : <a href="../../upload/<?php echo $member['file'];?>" download><?php echo $member['file']; ?></a>
	</div>
	*/?>

	<div>
	  <a href="./profile_board.php?idx=<?php echo $member->idx?>" class="btn">게시글 보기</a>
    </div>
  </div>
</div>
	    
<button type="button" class="button" onclick="location.href = './new_profilecard.php'">프로필카드 수정</button>
<button type="button" class="button" onclick="location.href = './profilecard.php'">프로필카드 게시판</button>
</body>
</html>
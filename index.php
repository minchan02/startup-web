<?php
include_once('./lib.php');
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main_style.css">

    <script src="https://kit.fontawesome.com/e4966bbdb0.js"></script>
    <title>SPUR|스타트업을 위한 공유경제 플랫폼</title>
  </head>

	<style>
    .button{
      border-color: :green;
    }
     ol {float : left  ; margin-left: 10px}
	</style>
  </head>
  <body>
   <div class="logo-bg"></div>

   <div id="search-box">
    <form action="list.php" method="post">
       <br>

		<div class = "search-box">
      <input class = "search-txt" type="text" name="valueToSearch" placeholder="Type to search">
      <!--<a class = "search-btn" href="search_result.php">-->
	 <button type="submit" name="search" class="button-search"><i class="fa fa-search"></i></button>
		<!--<input type="submit" name="search" class = "fas fa-search">
    	<i class = "fas fa-search"></i>-->
		 </div>
    </form>
    </div>


  <?php if($member): ?>
<h3> <?php echo $member->name ?> 님 반갑습니다!</h3>
		<a href="logout.php"><input type="button"  class = "button" value="logout" style="float:right;"/></a>
		<button type =  "button" class = "button" onclick="location.href = './login-fix.php'" style="float:right;">회원정보 수정</button>
        <button type =  "button" class = "button" onclick="location.href = './profilecard.php'" style="float:right;">프로필카드 게시판</button>
		<button type = "button" class = "button" onclick="location.href = './board.php'" style="float:right;">전체 게시판</button>
	   <button type =  "button" class = "button" onclick="location.href = './view_contact.php'" style="float:right;">연락목록</button>

 <?php else: ?>
	    <button type = "button" class = "button" onclick="location.href = './board.php'" style="float:right;">전체 게시판</button>
        <button type = "button" class = "button" onclick="location.href = 'profilecard.php'" style="float:right;">프로필카드 게시판</button>
        <button type = "button" class = "button" onclick="location.href = 'register.php'"style="float:right;" >회원가입</button>
        <button type = "button" class = "button" onclick="location.href = 'login.php'" style="float:right;">로그인</button>

<?php endif?>
      </div>

<br><br> <br><br><center><h1 style=font-size:90px>Search what You want!</h1></center><br><br><br><br><br><br><br><br> <hr>

<div class="time_line">
  <ul>
    <h2 style=font-size:35px><u>What is SPUR?</u></h2> <br>
    <h3>스퍼는 스타트업 기업들의 성장과 공유로 인한 불필요한 물품의 재사용, <br> 그리고 스타트업 생태계의 자생능력을 키우기 위해 만들어진 플랫폼입니다. <br>
    타 스타트업들과 물품, 자본을 공유, 투자하세요! <br></h3>
  </ul>
</div>
<div class="time_line-right">
  <ul>
    <h2 style=font-size:35px><u>What can we trade?</u></h2> <br>
    <h3>
    여러분의 스타트업은 어떤 회사인가요? <br>
    IT, 외식, 의류, SW, 교욱 등 상관없이 필요한 물품을 검색해보세요!  <br>
    꼭 물품이 아니여도 좋습니다! 빅데이터와 같은 자료들이나 자금도 거래할 수 있습니다!
    </h3>
  </ul>
</div>
<div class="time_line">
  <ul>
    <h2 style=font-size:35px> <u>How can we trade?</u></h2> <br>
    <h3>어떤 물품을 거래할지 정하셨나요? <br> 검색창에 물품이름을 검색하세요! <br> 혹은 카테고리로 검색하세요!
    찾는 물품이 나온다면 <br>그 물품을 보유한 회사의 프로필 카드를 눌러 삐삐를 쳐보세요! <br> 사용자가 거래를 수락하면 연락처가 전송됩니다! </h3>
  </ul>
</div>
<div class="time_line-right">
  <ul>
    <h2 style=font-size:35px><u>How can I list my item?</u></h2>
    <br><h3>프로필카드 버튼을 눌러 게시글을 작성해보세요!<br> 자신의 물품과 원하는 댓가, 거래방식을 선택해 주세요! </h3>
  </ul>
</div>

<div class="contact-us">
  <div class="contact-box-text">
    <center> <h3 style=font-size:45px>SPUR</h3> </center>
      <br><br><h3>
	  <center>Share What You Have</center>
	  </h3>
  </div>
</div>

</body>
</html>

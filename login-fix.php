<?php  
include_once('./lib.php');
access(isMember(), "로그인 후 이용해주세요");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>내 정보</title>
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:500px; margin-top:30px; }
</style>
</head>
<link rel = "stylesheet" href = "login-fix_style.css">
	
<body>
	<div class="find">
		<form method="post" action="./login-fix_ok.php">
			<h1>내 정보</h1>
			<p><a href="./index.php">홈으로</a></p>
			<p><a href="./my_profilecard.php">MY프로필카드 보기</a></p>
				<center>마이페이지</center>
			
				    <br>
						이름 : <input type="text" size="35" name="name" placeholder="이름" value="<?php echo $member->name?>" readonly>  
					    <br><br/>
				
				
					<br>
						    비밀번호 : <input type="password" size="35" name="password" placeholder="비밀번호">
						<br><br/>
				
				
					<br>
						    주소 : <input type="text" size="35" name="region" placeholder="주소" value="<?php echo $member->region; ?>">
						<br><br/>
				
				
					<br>
						    이메일 : <input type="text" size="35" name="email" placeholder="이메일" value="<?php echo $member->email; ?>">
						<br>
				    <br>
			<input type="submit" value="정보변경" >
		</form>
	</div>
</body>
</html>

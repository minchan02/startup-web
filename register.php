<!DOCTYPE html>
<html>
  <head>
    <title>회원가입</title>
  </head>
  <style>
    body{

      background: url(region_wallpaper.png)no-repeat;
      background-size: 100%;

    }
    .wrap{
      width: 350px;
      margin: auto;
      background: black;
      background-color: white;
      margin-top: 50px;
      padding: 5px;
      border-radius: 30px;
      border-color: #000000;
    }
    form{
      padding: 10px;
      font-family: sans-serif;
      border: 1px black;
      border-color: black;
      margin: 10px;
    }
    h2{
      text-align: center;
      background: white;
      color: black;
      padding: 10px;
      border-radius: 10px;
      border-color: black;

    }
    input{
      padding: 7px 17px;
      margin:5px;
      border: black;
      border-color: #000000;
      color: #000000;
      border-radius: 30px;
      font-style: 15px;
      text-decoration: none;
      font-weight: lighter;
      transition: all .3s ease-in;

    }

    input[type = text],input[type = email],input[type = number],input[type = password]{
      width: 90%;
      border-radius: 30px;
      border: black;
      border-color: #000000;
    }
    input[type= submit]{
      width: 95%;
      background: coral;
      cursor: pointer;
      font-size: 18px;
      font-weight: bold;
      color:white;
    }
    button[type= button]{
      width: 85%;
      background: coral;
      border-radius: 30px;
      cursor: pointer;
      font-size: 18px;
      font-weight: bold;
      color:white;
      transition: all .3s ease-in;

    }
    input[type=submit]:hover, button[type = button]:hover{
      background: grey;

    }
    select{
      padding: 10px;
      width:32%;
      border-radius: 5px;
    }
  </style>

  <body>
    <div class="wrap">
      <form action="registeration.php" method="post">
        <h2>SignUp</h2>
		<u>
			<input type="text" name="name" placeholder="회원명" required>
			<input type="email" name="email" placeholder="이메일" required>
			<input type="tel" name="contact" placeholder="연락처 번호" required>
			<input type="password" name="password" placeholder="비밀번호" required>
			<input type="password" name="confirm_password" placeholder="비밀번호 확인" required>
		</u>
        <span style ="font-size:18px;"><h5>카테고리 설정</h5></span>
        <br>
        <select name="region">
          <option>지역</option>
          <option value="서울">서울</option>
          <option value="경기">경기</option>
          <option value="강원">강원</option>
          <option value="판교">판교</option>
          <option value="부산">부산</option>
          <option value="기타">기타</option>
        </select>
        <select name="companykind">
          <option>업종</option>
          <option value="IT">IT</option>
          <option value="의류">의류</option>
          <option value="식품">식품</option>
          <option value="교육">교육</option>
          <option value="기타">기타</option>

        </select>
        <br>
        <input type="checkbox" required>이용약관을 읽었으며 이에 동의합니다.
        <br>
        <input type="submit" value="회원가입" class="btn btn-primary">
        <center>
			<button type = "button" onclick="location.href = 'index.php'" class="input">뒤로가기</button>		 </center>



      </form>

    </div>
  </body>
</html>

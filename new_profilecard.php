<?php
include_once('./lib.php'); 
/*입력되야하는 정보가....
- 닉네임
- 회사명
- 업종
- 지역
- 이메일
- 전화번호*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>프로필카드 수정</title>
  <link rel="stylesheet" href="new-profilecard_style.css">
</head>
<body>
<div class="editprofilecard">
    
    <center>
        
    </center>
    <form action="./newprofile_ok.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>회사명: </th>
                    <td><input type="text" placeholder="회사명을 입력하세요. " name="companyname" value="<?php echo $member->companyname?>" class="inp"></td>
                </tr>
				<br>
                <tr>
                    <th>업종: </th>
                    <td>
                        <select name="companykind" value="<?php echo $member->companykind?>" class="inp">
                            <option>업종</option>
                            <option value="IT">IT</option>
                            <option value="의류">의류</option>
                            <option value="식품">식품</option>
                            <option value="교육">교육</option>
                            <option value="기타">기타</option>
                        </select></td>
                </tr>
				<br>
                <tr>
                    <th>지역: </th>
                    <td>
                        <select name="region" value="<?php echo $member->region?>" class="inp">
                            <option>지역</option>
                            <option value="서울">서울</option>
                            <option value="경기">경기</option>
                            <option value="강원">강원</option>
                            <option value="판교">판교</option>
                            <option value="부산">부산</option>
                            <option value="기타">기타</option>
                        </select>
                    </td>
                </tr><br>
                <tr>
                    <th>이메일: </th>
                    <td><input type="text" name="email" value="<?php echo $member->email?>" class="inp"></td>
                </tr>
                <tr>
                    <th>전화번호: </th>
                    <td><input type="text" name="contact" value="<?php echo $member->contact?>" class="inp"></td>
                </tr>
				<tr>
                    <th>그림파일 (size : 80*80px) </th>
                    <td><input type='file' name='image'></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"><br>
                        <button type="submit" class="btn">완료</button>
                        <button type="button" onclick="history.back(); return false" class="btn">취소</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
</body>
</html>
<?php  
session_start();
include_once('./lib.php'); 

extract($_POST);
// extract는 아래 처럼 변수선언을 자동으로 해줍니다.
// $name = $_POST['name'];
// $confirmpassword = $_POST['password'];
// $email = $_POST['email'];
// $contact = $_POST['contact'];
// $confirmpassword = $_POST['confirmpassword'];

$num = rowCount("select * from usertable where name = '{$name}'");
if ($password !== $confirm_password) {
	echo "
		<script>
			alert('비밀번호 확인이 잘못되었습니다.')
			history.back();
		</script>
	";
	exit;
}
if ($num !== 0) {
	echo "
		<script>
			alert('이미 등록된 아이디입니다.')
			history.back();
		</script>
	";
	exit;
}
echo $sql = "
	INSERT INTO usertable SET
	name = '{$name}',
	email = '{$email}',
	contact = '{$contact}',
	password = '{$password}';
";
if (query($sql)) {
	echo "
		<script>
			alert('회원가입이 완료되었습니다.')
			location.replace('./login.php')
		</script>
	";
	exit;
}
<?php  
// lib에서 access, alert, move, query, rowCount 등을 가져옴
include_once('./lib.php');

extract($_POST);
$num = rowCount("select * from usertable where email = '{$email}'");
access($password === $confirm_password, "비밀번호 확인이 잘못되었습니다.");
access($num === 0, '이미 등록된 아이디입니다.');
$sql = "
	INSERT INTO usertable SET
	name = '{$name}',
	email = '{$email}',
	contact = '{$contact}',
	password = md5('{$password}{$name}'),
	region = '{$region}',
	companykind = '{$companykind}',
	companyname = '',
	image = '',
	image_origin = '';
";
query($sql); // query 함수에서 에러처리를 함
alert('회원가입이 완료되었습니다.');
move('./login.php');

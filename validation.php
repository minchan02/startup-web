<?php
// DB 관련 코드 가져오기
include_once('./lib.php'); 
// $name = $_POST['user'];
// $pass = $_POST['password'];
// $email = $_POST['email'];
// $contact = $_POST['contact'];
// $confpass = $_POST['confirmpassword'];
extract($_POST); // $_POST[$key] => $key 로 변수 생성


// $s = "select * from usertable where name = '$name' && password = '$pass'";
// SQL에서 && 대신 and, || 대신 or 등으로 사용해야합니다.
// 문자열 내부에 변수를 사용할 땐 "{$variable}" 이렇게 중괄호로 감싸줘야 안전합니다.
$sql = "select * from usertable where name = '{$name}' and password = md5('{$password}{$name}')";
access($member = fetch($sql), "아이디 또는 비밀번호가 일치하지 않습니다.");
$_SESSION['member'] = $member;
alert('로그인 되었습니다.');
move('/index.php');
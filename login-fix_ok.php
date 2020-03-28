<?php
include_once('./lib.php');
extract($_POST);
$pwUpdate = strlen($password) > 0 ? " password = md5('{$password}{$name}'), " : '';
$sql = "
	UPDATE usertable SET
	{$pwUpdate}
	region='{$region}',
	email='{$email}'
	where idx='{$member->idx}'
";
query($sql);
$_SESSION['member'] = fetch("SELECT * FROM usertable WHERE idx = '{$member->idx}'");
alert('회원정보가 변경되었습니다.');
move('./login-fix.php');
?>
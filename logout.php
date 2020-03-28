<?php
include_once('./lib.php');
session_destroy();
alert('로그아웃 되었습니다.');
move('/');
?>
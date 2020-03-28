<?php
  // DB 연결
include_once('./lib.php');
extract($_POST);
  $db = new PDO("mysql:host=127.0.0.1;dbname=userregisteration;charset=utf8","root","ruby0421");

  // 주소로부터 변수를 받아옵니다.
  $page = $_GET['page'] ?? 'list';
  $idx = $_GET['idx'] ?? NULL;

  // 각 페이지에 대한 타이틀을 미리 설정해놓습니다.
  $titles = [
    'list'=>'게시물 목록',
    'write'=>'게시물 작성',
    'view'=>'게시물 조회',
    'update'=>'게시물 수정'
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $titles[$page]?></title>
</head>
<body>
  <?php include_once("./{$page}.php"); ?>
</body>
</html>
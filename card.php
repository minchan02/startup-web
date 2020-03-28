<?php
  // DB 연결
  $db = new PDO("mysql:host=127.0.0.1;dbname=userregisteration;charset=utf8","root","ruby0421");

  // 주소로부터 변수를 받아옵니다.
  $page = $_GET['page'] ?? 'profilecard';
  $idx = $_GET['idx'] ?? NULL;

  // 각 페이지에 대한 타이틀을 미리 설정해놓습니다.
  $titles = [
    'profilecard' => '프로필카드 보기'
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
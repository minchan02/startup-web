<?php
  // DB 연결
  $db = new PDO("mysql:host=127.0.0.1;dbname=userregisteration;charset=utf8","root","ruby0421");

  // 쿼리문 작성
  $sql = "
    UPDATE board SET
    subject = '{$_POST['subject']}',  # 제목
    writer = '{$_POST['writer']}',    # 작성자
    content = '{$_POST['content']}'  # 내용
    WHERE idx = '{$_GET['idx']}'

  ";
  if ($db->query($sql)) { 
    header('Location:./view.php?idx='.$_GET['idx']); // 쿼리문이 정상적으로 실행되면 list.php로 이동
  } else {
    print_r($db->errorInfo());    // 쿼리문에 문제가 있으면 에러 출력
  }

<?php
  $db = new PDO("mysql:host=127.0.0.1;dbname=userregisteration;charset=utf8","root","ruby0421");

$result = mysql_query("SELECT id, name FROM usertable");

// 각줄에서 id를 통해서 값을 가져올 수도 있다. 
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    printf("ID: %s  Name: %s", $row["id"], $row["name"]);
}

mysql_free_result($result);
?>

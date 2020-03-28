<?php
	include_once('./lib.php');
     $idx = $_GET['idx'] ?? NULL;
  	 $sql = "SELECT * FROM contact WHERE idx = '{$idx}'";
  	 $row = fetchAll($sql);
?>
<html>
<head>
	
</head>
<body>
<div id="receive">	
	<ul>
		<li>연락이 없습니다.</li>
	</ul>      	
</div>
</body>
</html>
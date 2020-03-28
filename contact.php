<?php
include_once('./lib.php');

access(isMember(), "로그인 후 이용해주세요");
extract($_POST);
	if(isset($_POST["go"]))
{
 alert('연락이 전송되었습니다!');
 $idx = fetch("SELECT idx FROM contact order by idx desc limit 1")->idx;
 $c_name = $member->name;
 $sql = "
 	INSERT INTO contact SET
	name = '{$c_name}'
	where idx='{$idx}';
  ";}
  
?>

<html>
	<script>
			history.back();
	</script>
</html>
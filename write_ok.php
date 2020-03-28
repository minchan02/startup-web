<?php
include_once('./lib.php');

$file = $_FILES['image'];
$origin_name = $file['name'];
$tmp_name = $file['tmp_name'];


extract($_POST);

if (is_uploaded_file($tmp_name)) { // 파일을 업로드했을 경우에만 처리함
	$ext = strtolower(preg_replace("/.*\.(.*)/", "$1", $origin_name));
	access(in_array($ext, ['jpg', 'png', 'gif', 'jpeg']), "이미지(JPG, JPEG, PNG, GIF)만 업로드할 수 있습니다.");
	$saved_name = time().'_'.rand(0, 99999).'.'.$ext;
	move_uploaded_file($_FILES['image']['tmp_name'], './uploads/'.$saved_name);
	$add_sql .= "
		image = '{$saved_name}',
		image_origin = '{$origin_name}',
	";
}

else{
	$add_sql .= "
		image =' ',
		image_origin = ' ',
   ";
}

// 쿼리문 작성
$sql = "
	INSERT INTO board SET
	subject = '{$subject}',  # 제목
	writer = '{$writer}',    # 작성자
	content = '{$content}',  # 내용
	{$add_sql}
	reg_date = now();
";
query($sql);
$idx = fetch("SELECT idx FROM board order by idx desc limit 1")->idx;
alert('게시물 작성이 완료되었습니다.');
move('./board.php');
?>
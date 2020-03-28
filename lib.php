<?php
// 세션시작
session_start();

// 경고창 띄우기
function alert ($msg) {
  echo "<script>alert('{$msg}')</script>";
}

// 페이지 이동
function move ($url = false) {
  // url이 false일 경우 뒤로가기, url이 있으면 해당 url로 이동
  echo "<script>";
    echo $url ? "location.replace('{$url}')" : "history.back()";
  echo "</script>";
  exit;
}

// 조건 여부에 따라 경고창 + 페이지이동
function access ($bool, $msg, $url  = false) {
  if (!$bool) { // 조건에 맞지 않으면
    alert($msg); // 경고창 띄운 후
    move($url); // 페이지 이동
  }
}

// 디버그용 함수. print_r을 보이는 그대로 출력
function print_pre ($el) {
  echo "<pre>";
  print_r($el);
  echo "</pre>";
}

// 줄바꿈 하여 출력
function println ($el) {
  echo "<p>{$el}</p>";
}

// mysql query문 실행
function query ($sql) {
	// DB 연결
	$db = new PDO("mysql:host=127.0.0.1;dbname=userregisteration;charset=utf8", "root", "ruby0421");
	
	// DB 명령어 실행
	$res = $db->query($sql);
	
	if (!$res) {
		// 에러 정보 출력
		print_pre($db->errorInfo());
		println($sql);
		
		// PHP 실행 종료
		exit;
	}
	
	// 접속 종료
	$db = null;
	
	// 결과 반환
	return $res;
}

// 단일 데이터 가져오기
function fetch ($sql) {
	return query($sql)->fetch(PDO::FETCH_OBJ); 
}

// 다중 데이터 가져오기
function fetchAll ($sql) {
	return query($sql)->fetchAll(PDO::FETCH_OBJ); 
}

// 결과 갯수 가져오기
function rowCount ($sql) {
	return query($sql)->rowCount(); 
}

// 회원인지 검사
function isMember () {
	return isset($_SESSION['member']);
}

// 기본 변수
$member = $_SESSION['member'] ?? NULL;
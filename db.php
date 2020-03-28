<?php

function query ($sql) {
	// DB 연결
	$db = new PDO("mysql:host=127.0.0.1;dbname=userregisteration;charset=utf8", "root", "ruby0421");
	
	// DB 명령어 실행
	$res = $db->query($sql);
	
	// 접속 종료
	$db = null;
	
	// 결과 반환
	return $res;
}

function fetch ($sql) {
	return query($sql)->fetch(PDO::FETCH_OBJ); // 단일 데이터 가져오기
}

function fetchAll ($sql) {
	return query($sql)->fetchAll(PDO::FETCH_OBJ); // 다중 데이터 가져오기
}

function rowCount ($sql) {
	return query($sql)->rowCount(); // 결과 갯수 가져오기
}
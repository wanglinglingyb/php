<?php
$dbms = "mysql";
$host='127.0.0.1';
$user='root';
$pass='root';
$dbname='account_pdo_db';
$dsn="$dbms:host=$host;dbname=$dbname;charset=utf8";
try{
	$pdo=new PDO($dsn,$user,$pass);
	// echo 'PDO连接MySQL数据库成功';
	// $pdo = null;
	}catch(PDOException $e) {
	    die('PDO连接MySQL数据库服务器失败');
	}
<?php
session_start();
// if(!isset($_SESSION['login'])) {}
	if ($_COOKIE['login']=='ok') {
		$_SESSION['login']='ok';
	}
if ($_SESSION['login']!='ok') {
	header('location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>欢迎！</h1>
	<p>登录之后才能访问的页面。</p>
	<p><a href="logout.php">退出登录。</a></p>
</body>
</html>
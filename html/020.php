<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		用户名：<input type="text" name="name" value="">
		密码：<input type="password" name="pass" value="">
		<input type="submit">
	</form>
	<?php
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$sql="select * from user where name='$name' and pass='$pass'";
	echo $sql;
	?>
</body>
</html>
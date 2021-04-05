<?php session_start(); ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	session_unset();
	session_destroy();
	?>
	<p>销毁成功<a href="014.php">返回014</a>  <a href="014a.php">返回014a</a></p>
</body>
</html>
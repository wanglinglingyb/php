<?php session_start(); ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$a=123;
	$_SESSION['a']=456;
	echo $a.' '.$_SESSION['a'];
	?>
	<a href="014a.php">跳转到新页面查看结果</a>
</body>
</html>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$a=123;
	setcookie('a',456,time()+60*60);
	echo $a.' '.$_COOLIE['a'];
	?>
	<a href="015a.php">跳转到新页面查看结果</a>
</body>
</html>
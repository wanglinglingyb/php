<?php session_start(); ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	echo $a.' '.$_SESSION['a'];
	?>
	<a href="014b.php">清除信息</a>
</body>
</html>
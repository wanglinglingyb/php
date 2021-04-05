<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>留言列表</title>
</head>
<body>
	<h1>留言列表</h1>
	<p><a href="1.html">填写留言</a></p>
	<?php
	function douhao1($str){
		return str_replace('&#44',',',$str);
	}
	$fp=fopen('lyb.txt','r');
	echo '<ol>';
	$i=1;
	while($msg=fgetcsv($fp)){
		echo '<li><a href="show.php?id=' . $i++ .'">' . htmlspecialchars($msg[0]).'</a>--------'. date('Y-m-d H:i',$msg[2]) .'</li>';
	};
	echo '</ol>';
	fclose($fp);
	 ?>
</body>
</html>
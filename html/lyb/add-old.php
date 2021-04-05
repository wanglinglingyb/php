<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>保存留言</title>
</head>
<body>
<h1>保存留言</h1>
<?php
	// print_r($_POST);
	// echo '<br>标题：'.$_POST['title'];
	// echo '<br>作者：'.$_POST['author'];
	// echo '<br>内容：'.$_POST['content'];
	if (isset($_POST['title'])&& $_POST['title'] !='' && isset($_POST['author']) && $_POST['author'] !='' && isset($_POST['content']) && $_POST['content'] !='') {//信息提供完整
		$title=$_POST['title'];
		$author=$_POST['author'];
		$time=time();// $time=date('Y-m-d H:i:s');
		$content=$_POST['content'];
		$ip=$_SERVER['REMOTE_ADDR'];//访客的IP
		$str="$title,$author,$time,$content,$ip\n";
		$fp=fopen('lyb.txt','a');
		// echo $str;
		fwrite($fp,$str);
		fclose($fp);
		echo '<p>保存成功<a href="1.html">填写留言  </a><a href="index.php">查看列表</a></p>';
	}else{
		echo '<p>信息填写不完整！<a href="1.html">重新填写</a></p>';
	}
 ?>
</body>
</html>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>留言详情</title>
</head>
<body>
	<h1>留言详情</h1>
	<p><a href="index.php">返回留言列表</a></p>
	<?php
	function douhao1($str){
		return str_replace('&#44',',',$str);
	}
	function ipx($ip){
		return substr($ip,0,strripos($ip,'.')+1).'*';
	}
	$id=$_GET['id'];
	$fp=fopen('lyb.txt','r');
	$i=1;
	while($msg=fgetcsv($fp)){
		if ($id==$i) {//查看的信息和要显示的信息的序号相同
			echo '标题:'.htmlspecialchars($msg[0]).'<br>';
			echo '作者:'.htmlspecialchars($msg[1]).'<br>';
			echo '时间:'.htmlspecialchars(date('Y-m-d H:i',$msg[2])).'<br>';
			echo '内容:'.$msg[3].'<br>';
			// echo 'IP:'.substr($msg[4],0,strripos($msg[4],'.')+1).'*'.'<br>';
			echo 'IP:'.ipx($msg[4]).'<br>';
			break;
		}
		$i++;
	};
	fclose($fp);
	 ?>
</body>
</html>
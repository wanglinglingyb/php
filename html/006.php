<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	// $ip='192.168.10.2';
	function ipx($ip){
		return substr($ip,0,strripos($ip,'.')+1).'*';
	}
	if (isset($_GET['ip'])&&$_GET['ip'] !='') {
		$ip-$_GET['ip'];
		echo ipx($ip);
	}else{
		echo '没有提供IP信息';
	}
	// $n=strripos($ip, '.');//查找变量$ip中最后一个点的位置
	// $i=substr($ip,0,$n+1);//截取变量$ip中前$n+1位字符
	// echo $i.'*';
	?>
</body>
</html>
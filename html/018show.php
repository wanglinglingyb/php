<?php
	$id=isset($_GET['id'])?$_GET['id']:'';
	if (!$id){
		header('location: 018.php');
		exit;
	}
	require_once '018conn.php';
	$sql='select * from kc where 课程号=?';
	$stmt=$mysqli->prepare($sql);
	$stmt->bind_param('s',$id);
	$stmt->execute();
	$stmt->store_result();//存储查询结果
	$num=$stmt->num_rows;//获取查询结果的行数
	if(!$num){
		header('location: 018.php');
		exit;
	}
	$stmt->bind_result($kch,$kcm,$xq,$xs,$xf);//将查询结果绑定到变量
	$stmt->fetch();//获取查询结果
	$stmt->free_result();//查询结果使用完毕后释放结果集
	$stmt->close();
	$mysqli->close();
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>课程号:<?php echo $kch ?></p>
	<p>课程名:<?php echo $kcm ?></p>
	<p>开课学期:<?php echo $xq ?></p>
	<p>学时:<?php echo $xs ?></p>
	<p>学分:<?php echo $xf ?></p>
	<p><a href="018.php">返回列表</a></p>
</body>
</html>
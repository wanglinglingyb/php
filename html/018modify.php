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
	<form action="018update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $kch ?>">
		<p>课程号:<input type="text" name="kch" value="<?php echo $kch ?>" required></p>
		<p>课程名:<input type="text" name="kcm" value="<?php echo $kcm ?>"></p>
		<p>开课学期:<input type="text" name="xq" value="<?php echo $xq ?>"></p>
		<p>学时:<input type="text" name="xs" value="<?php echo $xs ?>"></p>
		<p>学分:<input type="text" name="xf" value="<?php echo $xf ?>"></p>
		<p><input type="submit" value="更新信息"></p>
	</form>
	<p><a href="018.php">返回列表</a></p>
</body>
</html>
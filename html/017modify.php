<?php
	$id=isset($_GET['id'])?intval($_GET['id']):0;
	if (!$id){
		header('location: 017.php');
		exit;
	}
	require_once '017conn.php';
	$sql="select * from xs where 学号='$id'";
    $result=$mysqli->query($sql);
    $num=$result->num_rows;
	if (!$num){
		header('location: 017.php');
		exit;
	}
	$row=$result->fetch_assoc();
	$result->close();
	$mysqli->close();
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="017update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['学号']; ?>">
		<p>学号:<input type="text" name="xh" value="<?php echo $row['学号']; ?>" required></p>
		<p>姓名:<input type="text" name="name" value="<?php echo $row['姓名']; ?>"></p>
		<p>专业名:<input type="text" name="zy" value="<?php echo $row['专业名']; ?>"></p>
		<p>性别:<input type="radio" name="sex" value="0"<?php echo $row['性别']?' checked':'';?>>女<input type="radio" name="sex" value="1"<?php echo $row['性别']?'':' checked';?>>男</p>
		<p>出生时间:<input type="text" name="date" value="<?php echo $row['出生时间']; ?>"></p>
		<p>总学分:<input type="text" name="zxf" value="<?php echo $row['总学分']; ?>"></p>
		<p>备注:<textarea name="bz" cols="30" rows="10"><?php echo $row['备注']; ?></textarea></p>
		<p><input type="submit" value="更新信息"></p>
	</form>
	<p><a href="017.php">返回列表</a></p>
</body>
</html>
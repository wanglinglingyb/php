<?php
	$id=isset($_GET['id'])?$_GET['id']:'';
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
	<input type="hidden" name="id" value="<?php echo $row['学号']; ?>">
	<p>学号:<?php echo $row['学号']; ?></p>
	<p>姓名:<?php echo $row['姓名']; ?></p>
	<p>专业名:<?php echo $row['专业名']; ?></p>
	<p>性别:<?php echo $row['性别']?'男':'女' ?></p>
	<p>出生时间:<?php echo $row['出生时间']; ?></p>
	<p>总学分:<?php echo $row['总学分']; ?></p>
	<p>备注:<?php echo $row['备注']; ?></p>
<p><a href="017.php">返回列表</a></p>
</body>
</html>
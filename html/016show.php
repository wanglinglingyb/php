<?php
	$id=isset($_GET['id'])?intval($_GET['id']):0;
	if (!$id){
		header('location: 016.php');
		exit;
	}
	require_once '016conn.php';
	$sql="select * from kc where 课程号='$id'";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);
	if (!$num) {
		header('location: 016.php');
		exit;
	}
	$row=mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($conn);
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>课程号:<?php echo $row['课程号']; ?></p>
	<p>课程名:<?php echo $row['课程名']; ?></p>
	<p>开课学期:<?php echo $row['开课学期']; ?></p>
	<p>学时:<?php echo $row['学时']; ?></p>
	<p>学分:<?php echo $row['学分']; ?></p>
	<p><a href="016.php">返回列表</a></p>
</body>
</html>
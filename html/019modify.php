<?php
$id=$_GET['id'];
require_once '019conn.php';
$sql="select id,username,email from account where id=$id";
$result=$pdo->query($sql);
$row=$result->fetch(PDO::FETCH_ASSOC);
$pdo=NULL;
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="019update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['$id']; ?>">
		<p>用户名：<input type="text" name="username" value="<?php echo $row['$username']; ?>" required><span></span></p>
		<p>邮箱：<input type="email" name="email" value="<?php echo $row['$email']; ?>" required><span></span></p>
		<p><input type="submit" value="确认提交"></p>
		<p><a href="019.php">返回列表页</a></p>
	</form>
	<script src="019.js"></script>
	<script src="libs/jquery.min.js"></script>
</body>
</html>
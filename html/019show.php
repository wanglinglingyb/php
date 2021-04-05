<?php
$id=$_GET['id'];
require_once '019conn.php';
$sql="select id,username,email from account where id=?";
// $sql="select id,username,email from account where id=$id";
$result=$pdo->prepare($sql);
$result->execute([$id]);
$row=$result->fetch(PDO::FETCH_ASSOC);
$pdo=NULL;
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>用户名：<?php echo $row['username']; ?></p>
	<p>邮箱  ：<?php echo $row['email']; ?></p>
	<p><a href="019.php">返回列表页</a></p>
</body>
</html>
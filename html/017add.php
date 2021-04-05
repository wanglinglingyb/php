<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="017save.php" method="post">
		<p>学号:<input type="text" name="xh" value="" required></p>
		<p>姓名:<input type="text" name="name" value=""></p>
		<p>专业名:<input type="text" name="zy" value=""></p>
		<p>性别:<input type="radio" name="sex" value="0" checked>女<input type="radio" name="sex" value="1">男</p>
		<p>出生时间:<input type="text" name="date" value="">格式：YYYY-MM-DD</p>
		<p>总学分:<input type="text" name="zxf" value=""></p>
		<p>备注:<textarea name="bz" cols="30" rows="10"></textarea></p>
		<p><input type="submit" value="添加信息"></p>
	</form>
	<p><a href="017.php">返回列表</a></p>
</body>
</html>
<?php
if(isset($_POST['kch']) && $_POST['kch']!=''){
	$kch=$_POST['kch'];
	$kcm=$_POST['kcm'];
	$xq=$_POST['xq'];
	$xs=$_POST['xs'];
	$xf=$_POST['xf'];
	require_once '018conn.php';
	$sql='insert into kc values(?,?,?,?,?)';
	$stmt=$mysqli->prepare($sql);//创建一个预编译SQL语句
	$stmt->bind_param('ssiii',$kch,$kcm,$xq,$xs,$xf);//对参数占位符进行参数值绑定
	$stmt->execute();//执行查询
	$stmt->close();//关闭语句对象
	$mysqli->close();
	header('location: 018.php');
	exit;
}else{
	header('location: 018add.php');
	exit;
}
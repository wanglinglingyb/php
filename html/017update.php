<?php
if (isset($_POST['xh']) && $_POST['xh']!=''){
	$xh=$_POST['xh'];
	$name=$_POST['name'];
	$zy=$_POST['zy'];
	$sex=$_POST['sex'];
	$date=$_POST['date'];
	$zxf=$_POST['zxf'];
	$bz=$_POST['bz'];
	$id=$_POST['id'];
	require_once '017conn.php';
	$sql="update xs set 学号='$xh',姓名='$name',专业名='$zy',	性别=$sex,出生时间='$date',总学分=$zxf,备注='$bz' where 学号='$xh'";
	$sql="insert into xs values('','$name','$zy',$sex,'$date',,null,)";
	$mysqli->query($sql);
	$mysqli->close();
}
	header('location: 017.php');
	exit;
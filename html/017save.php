<?php
if (isset($_POST['xh']) && $_POST['xh']!=''){
	$xh=$_POST['xh'];
	$name=$_POST['name'];
	$zy=$_POST['zy'];
	$sex=$_POST['sex'];
	$date=$_POST['date'];
	$zxf=$_POST['zxf'];
	$bz=$_POST['bz'];
	require_once '017conn.php';
	$sql="insert into xs values('$xh','$name','$zy',$sex,'$date',$zxf,null,'$bz')";
	$mysqli->query($sql);
	$mysqli->close();
	header('location: 017.php');
	exit;
}else{
	header('location: 017add.php');
	exit;
}
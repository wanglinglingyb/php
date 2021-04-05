<?php
if (isset($_POST['kch']) && $_POST['kch']!=''){
	$kch=$_POST['kch'];
	$kcm=$_POST['kcm'];
	$xq=$_POST['xq'];
	$xs=$_POST['xs'];
	$xf=$_POST['xf'];
	require_once '016conn.php';
	$sql="update kc set 课程号='$kch',课程名='$kcm',开课学期=$xq,学时=$xs,学分=$xf	 where 课程号='$id'";
	mysqli_query($conn,$sql);
	mysqli_close($conn);
}
	header('location: 016.php');
	exit;
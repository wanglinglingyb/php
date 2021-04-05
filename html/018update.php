<?php
if (isset($_POST['kch']) && $_POST['kch']!=''){
	$kch=$_POST['kch'];
	$kcm=$_POST['kcm'];
	$xq=$_POST['xq'];
	$xs=$_POST['xs'];
	$xf=$_POST['xf'];
	$id=$_POST['id'];
	require_once '018conn.php';
	$sql='update kc set 课程号=?,课程名=?,开课学期=?,学时=?,学分=?	 where 课程号=?';
	$stmt=$mysqli->prepare($sql);
	$stmt->bind_param('ssiiis',$kch,$kcm,$xq,$xs,$xf,$id);
	$stmt->execute();
	$stmt->close();
	$mysqli->close();
}
	header('location: 018.php');
	exit;
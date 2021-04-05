<?php
if (isset($_POST['kch']) && $_POST['kch']!=''){
	$kch=$_POST['kch'];
	$kcm=$_POST['kcm'];
	$xq=$_POST['xq'];
	$xs=$_POST['xs'];
	$xf=$_POST['xf'];
	require_once '016conn.php';
	$sql="insert into kc values('$kch','$kcm',$xq,$xs,$xf)";
	mysqli_query($conn,$sql);
	mysqli_close($conn);
	header('location: 016.php');
	exit;
}else{
	header('location: 016add.php');
	exit;
}
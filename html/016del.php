<?php
$id=isset($_GET['id'])?$_GET['id']:'';
if ($id){
	require_once '016conn.php';
	$sql="delete from kc where 课程号=$id";
	mysqli_query($conn,$sql);
	mysqli_close($conn);
}
	header('location: 016.php');
	exit;
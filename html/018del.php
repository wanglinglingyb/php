<?php
$id=isset($_GET['id'])?$_GET['id']:'';
if ($id){
	require_once '018conn.php';
	$sql="delete from kc where 课程号=?";
	$stmt=$mysqli->prepare($sql);
	$stmt->bind_param('s',$id);
	$stmt->execute();
	$stmt->close();
	$mysqli->close();
}
header('location: 018.php');
exit;
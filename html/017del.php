<?php
$id=isset($_GET['id'])?intval($_GET['id']):0;
if ($id){
	require_once '017conn.php';
	$sql="delete from xs where 学号='$id'";
	$mysqli->query($sql);
	$mysqli->close();
}
	header('location: 017.php');
	exit;
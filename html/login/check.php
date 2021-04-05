<?php
session_start();
$a=isset($_POST['accout'])?$_POST['accout']:'';
$p=isset($_POST['pass'])?$_POST['pass']:'';
if ($a=='admin' && $p=='123456') {
	$_SESSION['login']='ok';
	if (isset($_POST['nologin']) && $_POST['nologin']=='ok') {
		setcookie('login','ok',time()+60*60);
	}
	header('location: index.php');
	exit;
}else{
	header('location: login.html');
	exit;
}
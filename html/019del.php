<?php
$id=$_GET['id'];
require_once '019conn.php';
$sql="delete from account where id=$id";
$pdo->exec($sql);
$pdo=NULL;
header('location: 019.php');
exit;
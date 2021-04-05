<?php
$username=$_GET['u'];
require_once '019conn.php';
$sql='select * from account where username=?';
$result=$pdo->prepare($sql);
$result->execute([':username'=>$username]);
$num=$result->fetchColumn();
echo $num;
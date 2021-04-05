<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
require_once '019conn.php';
$sql="insert into account values(null,?,?,?)";
$pre=$pdo->prepare($sql);
// $pre->bindParam(1,$username);
// $pre->bindParam(2,$password);
// $pre->bindParam(3,$email);
// $pre->execute();
$pre->execute([$username,$password,$email]);
$pdo=NULL;
header('location: 019.php');
exit;
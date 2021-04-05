<?php
$id=$_POST['id'];
$username=$_POST['username'];
$email=$_POST['email'];
require_once '019conn.php';
// $sql="update account set username='$username',email='$email' where id=$id";
$sql="update account set username=:username,email=:email where id=:id";
$pre=$pdo->prepare($sql);
// $pre->bindParam(':username',$username);
// $pre->bindParam(':enamil',$enamil);
// $pre->bindParam(':id',$id);
// $pre->execute();
$pre->execute{[
':username'=>$username,
':enail'=>$enail,
':id'=>$id,
]};
$pdo=NULL;
header('location: 019.php');
exit;
?>
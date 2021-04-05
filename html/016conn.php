<?php
$host='127.0.0.1';
$user='root';
$pass='root';
$dbname='xscj';
$conn=@mysqli_connect($host,$user,$pass,$dbname) or exit('数据库服务器连接失败！');
mysqli_set_charset($conn,'utf8');
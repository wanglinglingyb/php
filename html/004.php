<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1-100</title>
</head>
<body>
	<?php
	for ($i=0; $i<=100 ; $i++) {
		echo $i.' ';
	}
	echo '<hr>';
	//打印1-100内的偶数（三种方法）
	for ($i=0; $i<=100; $i+=2) {
		echo $i.' ';
	}
	echo '<hr>';
	for ($i=0; $i<=100; $i++) {
		if ($i%2==0) {
			echo $i.' ';
		}
	}
	echo '<hr>';
	for ($i=0; $i<=100; $i++) {
		if ($i%2) {
			continue;
		}
		echo $i.' ';
	}
	//打印1-100的数字，遇到数字为3的倍数的时候，打印foo替代此数字，5的倍数的时候，打印bar替代此数字，既是3的倍数又是5的倍数的时候,打印foobar替代此数字
	echo '<hr>';
	for ($i=1; $i<=100; $i++) {
		if($i%3==0&&$i%5==0){
			echo 'foobar'.' ';
		}elseif ($i%3==0) {
			echo 'foo'.' ';
		}elseif ($i%5==0) {
			echo 'bar'.' ';
		}else{
			echo $i.' ';
		}
	}
	 ?>
</body>
</html>
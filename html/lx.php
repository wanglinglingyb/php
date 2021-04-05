<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>练习</title>
</head>
<body>
	<?php
	//变量a和b，给变量a和b赋数字类型值，当变量a的值大于变量b的值时，页面上显示“a大于b”，当变量a的值小于变量b的值时，页面上显示“a小于b”，当变量a的值等于变量b的值时，页面上显示“a等于b”。
	// $a=121;
	// $b=12;
	$a=floatval($_GET['a']);//使用floatval()转为整数
	$b=intval($_GET['b']);//使用inval()转为整数
	var_dump($a);
	echo "a的值是{$a}，b的值是{$b},";
	if ($a>$b) {
		echo 'a大于b';
	}elseif ($a<$b) {
		echo 'a小于b';
	}else {
		echo 'a等于b';
	}
	echo '<hr>';
	$a=1;
	$b=2;
	$c=$a+$b;
	echo $c;
	echo '<br>';
	$c=$a.$b;
	echo $c;
	echo '<hr>';
	//给变量a赋予数字类型值，当变量a的值可以被5整除时，在页面上显示“可以被5整除”和整除的结果，否则显示“不可以被5整除”。
	$a=intval($_GET['a']);
	if ($a%5) {
		echo '不可以被5整除';
	}else{
		echo '可以被5整除,结果是：'.$a/5;
	}
	echo '<hr>';
	//使用while语句，在页面上显示100以内7的倍数。
	$a=7;
	while ($a<=100) {
			echo $a.' ';
			$a+=7;
	}
	//使用一个while语句和一个if...else语句，在页面上显示100以内的偶数和100以内的奇数。
	echo '<hr>';
	$n=1;
	$odd='';//奇数
	$even='';//偶数
	while ($n<=100) {
		if ($n%2) {
			$odd.="$n ";
		}else{
			$even.="$n ";
		}
		$n++;
	}
	echo "100以内的偶数：$even<br>100以内的奇数：$odd";
	// $a=' ';
	// $b=' ';
	// for ($i=0; $i<=100 ; $i++) {
	// 	if ($i%2==0) {
	// 		$a=$a.$i.' ';
	// 	}else{
	// 		$b=$b.$i.' ';
	// 	}
	// }
	// echo $a.' ';
	// echo '<br>';
	// echo $b.' ';
	// echo '<hr>';
	//三个值完全不同的数a、b、c比较大小，a最大时，页面显示a的值，b最大时，页面显示b的值，c最大时，页面显示c的值。
	$b1=11;
	$b2=12;
	$b3=13;
	if ($b1>$b2) {
		echo $b1;
	}elseif ($b2>$b3) {
		echo $b2;
	}else {
		echo $b3;
	}
	echo '<hr>';
	$a=intval($_GET['a']);
	$b=intval($_GET['b']);
	$c=intval($_GET['c']);
	$max=$a;
	if ($max<$b) {
		$max=$b;
	}
	if ($max<$c) {
		$max=$c;
	}
	echo "{$a}、{$b}、{$c}的最大值是$max";
	echo '<hr>';
	//打印1-100的数字，遇到数字为3的倍数的时候，打印foo替代此数字，5的倍数的时候，打印bar替代此数字，既是3的倍数又是5的倍数的时候,打印foobar替代此数字
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
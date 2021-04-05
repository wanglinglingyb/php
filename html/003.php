<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	// $age=20;
	// // $age+=3;
	// $age++;
	// echo $age;
	// $x=1;
	// $_1a=3;
	// $a=10;
	// $a1='10';
	// var_dump($a);
	// var_dump($a1);
	// // echo $a==$a1;
	// // echo $a===$a1;
	// // echo $a===$a1;
	// var_dump($a===$a1);
	// if($a===$a1){
	// 	echo 'true';
	// }else{
	// 	echo 'false';
	// }
	// $a=123;
	// $a1='hcy';
	// echo $a.$a1.'xz';
	// echo 10.05;
	// echo 8 . 05;
	// var_dump(10.05);
	// var_dump(1<>2);//1!=2
	// $math=75;
	// if($math>=90){
	// 	echo '优秀';
	// }elseif($math>=70){
	// 	echo '良好';
	// }else{
	// 	echo '不及格';
	// }
	// $sex='女';
	// if($sex=='女'){
	// 	echo '你好。女士';
	// }else{
	// 	echo '你好。男生';
	// }
	// 循环
	for($i=1;$i<=10;$i++){
		echo $i.' ';
	}
	echo '<br>';
	$j=1;
	while ( $j<= 15) {
		echo $j.' ';
		$j++;
	}
	echo '<br>';
	$x=1;
	do {
		echo $x.' ';
		$x++;
	}while ( $x<=20);
	echo '<hr>';
	$y=[1,2,3,4,5,'a','b','c'];
	// var_dump($y);显示数组详细信息
	print_r($y);//显示数组信息
	echo '<hr>';
	foreach ($y as $key => $value) {//key和$vaLue都不是固定单词，可以用其他变量名
		// echo $value.' ';//数组元素的值
		echo $key.' ';//数组元素的序号或名称
	}
	echo '<hr>';
	foreach ($y as $zhi) {
		echo $zhi;
	}
	echo '<hr>';
	for ($i=0; $i <= 15 ; $i++) {
		if ($i>=9) {
			break;
		}
		echo $i.' ';
	}
	echo '<hr>';
	for ($i=0; $i <= 15 ; $i++) {
		if ($i==10) {
			continue;
		}
		echo $i.' ';
	}
	?>
</body>
</html>
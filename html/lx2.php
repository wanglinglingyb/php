<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
    <style>
        table,td{
            border: 1px solid #cccccc;
        }
        table {
        	border-collapse: collapse;
        }
        td{
            padding: 10px;
        }
    </style>
</head>
<body>
	<?php
	// 1.利用循环语句写九九乘法表。
	echo "<table>";
	for ($i=1;$i<=9; $i++) {
		echo "<tr>";
		for ($j=1; $j<=9;$j++) {
			echo "<td>";
			if ($j<=$i) {
				echo "$j&times;$i=".$j*$i;
				// echo $j.'&times;'.$i.'='.$j*$i;
			}
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	// 2.利用循环语句输出五行四列表格。
		echo '<hr>';
		echo "<table>";
		for ($i=1;$i<=5; $i++) {
			echo "<tr>";
			for ($j=1;$j<=4;$j++) {
				echo "<td></td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		// 3.输出100以内(不含100)能被3整除且个位数为6的所有整数。
		echo '<hr>';
		for ($i=1; $i< 100 ; $i++) {
			if ($i%3==0&&$i%10==6) {
				echo $i.' ';
			}
		}
		echo '<br>';
		for ($i=3; $i<100;$i+=3) {
			if ($i%10==6){
				echo "$i";
			}
		}
		// 4.输出100以内(不含100)的奇数，一行显示5个数字。
		echo '<hr>';
		$j=0;
		for ($i=1; $i< 100 ; $i+=2) {
			echo $i.' ';
			$j++;
			if ($j%5==0) {
				echo '<br>';
			}
		}
		echo '<hr>';
		for ($i=1; $i<100;$i+=2) {
			echo "$i ";
			if ($i%10==9) {
				echo '<br>';
			}
		}
		// 5.将形式为a1.a2.a3.…….an-1.an的字符串转换成形式为an.an-1.…….a3.a2.a1的字符串 字符串长度不定，至少一个点连接两组字符,例如，字符串1.2.3.4，转换结果为4.3.2.1，字符串b.p.m.f.d.t.n.l，转换结果为l.n.t.d.f.m.p.b。
		// echo '<hr>';
		// echo strrev('1.2.3.4');
		// echo '<br>';
		// echo strrev('b.p.m.f.d.t.n.l');
		echo '<hr>';
		$str='a1.a2.a3.…….an-1.an';
		$arr=explode('.', $str);
		$arr1=array_reverse($arr);
		$str1=implode('.', $arr1);
		echo $str1;
		echo "<br>";
		echo strrev('b.p.m.f.d.t.n.l');
		// 6.将任意IP地址的最后一段变为星号，例如，1.2.3.4转换为1.2.3.*，192.168.1.10转换为192.168.1.*。
		echo '<hr>';
		$ip='192.168.1.10';
		$ipa=explode('.', $ip);
		$ipa[3]='*';
		$ip1=implode('.', $ipa);
		echo $ip1;
		//
		echo '<hr>';
		$ip='1.2.3.4';
		$n=strripos($ip, '.');//查找变量$ip中最后一个点的位置
		$i=substr($ip,0,$n+1);//截取变量$ip中前$n+1位字符
		echo $i.'*';
		//
		echo (str_replace("4","*","1.2.3.4"));
		echo '<br>';
		echo (str_replace('10','*','192.168.1.10'));
		//7.变量赋值为任意内容的字符串，如果字符串的长度在2~10之间，页面显示“字符串长度符合要求”，否则显示“字符串长度不符合要求”。
		echo '<hr>';
		$str='123456789';
		$n=strlen($str);
		$s='';
		if ($n<2||$n>10) {
			$s='不';
		}
		echo $str;
		echo '字符串长度'.$s.'符合要求';
		//
		echo '<hr>';
		$str=$_GET['s'];
		$len=strlen($str);
		if ($len<2&&$len>10) {
			echo '字符串长度符合要求';
		}else{
			echo '字符串长度不符合要求';
		}
	 ?>
</body>
</html>
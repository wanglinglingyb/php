<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	function te(&$a){
		$a++;
		echo $a.'<hr>';
	}
	$abc=123;
	te($abc);
	echo $abc;
	// print_r($_SERVER);
	// print_r($_GET);
	// $abc=123;
	// $aaa=456;
	// $text=789;
	// $a='abc';
	// echo $$a;
	// //
	//  $a='aaa';
	//  $$a='text';
	//  echo $$a.' '.$aaa;
	 ?>
</body>
</html>
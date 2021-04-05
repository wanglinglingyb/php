<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$array = array(0 => 100, "color" => "red");
	print_r(array_keys($array));
	$array = array("blue", "red", "green", "blue", "blue");
	print_r(array_keys($array, "blue"));
	$array = array("color" => array("blue", "red", "green"),
	               "size"  => array("small", "medium", "large"));
	print_r(array_keys($array));
	?>
</body>
</html>
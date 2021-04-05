<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$a = 5;
	echo $a++ . "<br />\n";
	echo $a . "<br />\n";

	// echo "<h3>Preincrement</h3>";
	$a = 5;
	echo "Should be 6: " . ++$a . "<br />\n";
	echo "Should be 6: " . $a . "<br />\n";

	// echo "<h3>Postdecrement</h3>";
	$a = 5;
	echo "Should be 5: " . $a-- . "<br />\n";
	echo "Should be 4: " . $a . "<br />\n";

	echo "<h3>Predecrement</h3>";
	$a = 5;
	echo "Should be 4: " . --$a . "<br />\n";
	echo "Should be 4: " . $a . "<br />\n";
	$A=array("Monday","Tuesday",3=>"Wednesday"); echo $A[2];

	$first = "This course is very easy !";
	        $second = explode(" ",$first);
	        $first = implode(",", $second);
	        echo $first;
	define(myvalue, "10");
	$myarray[10] = "Dog";
	$myarray[] = "Human";
	$myarray['myvalue'] = "Cat";
	$myarray["Dog"] = "Cat";
	print "The value is: ";
	print $myarray[myvalue]."\n";
	?>
</body>
</html>
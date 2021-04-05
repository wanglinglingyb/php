<?php
	echo rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	echo '<hr>';
	echo mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9);
	echo '<hr>';
	$x = 5.7;
	$y = 1.3;
	$r = fmod($x, $y);
	echo $r;
	echo '<hr>';
	echo pow(5,5);
	echo '<hr>';
	echo bindec('110011') . "\n";
	echo bindec('000110011') . "\n";
	echo bindec('111');
	echo '<hr>';
	echo decbin(12) . "\n";
	echo decbin(26);
?>
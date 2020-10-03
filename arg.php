<?php
	function f1()
	{
		echo "no argument</br>";
	}
	function f2($a)
	{
		echo $a*$a."</br>";
	}
	function f3($a,$b)
	{
		echo $a*$b."</br>";
	}
	$var='f1';
	$var();
	$var='f2';
	$var(5);
	$var='f3';
	$var(7,2);
?>
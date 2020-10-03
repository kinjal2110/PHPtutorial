<?php
	$a=5;
	$b=3;
	echo "a=$a b=$b<br/>";
	swap($a,$b);
	echo "After swapping:";
	echo "a=$a b=$b";
	function swap(&$a,&$b)
	{
		$temp=$a;
		$a=$b;
		$b=$temp;
	}
?>
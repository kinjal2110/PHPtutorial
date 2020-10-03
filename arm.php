<?php
	//armstrom number
	$n=153;
	echo "number is=$n</br>";
	$temp=$n;
	$sum=0;
	while($n>0)
	{
		$r=$n%10;
		$sum=$sum+$r*$r*$r;
		$n=$n/10;
	}
	if($sum==$temp)
	{
		echo "given number is armstrom";
	}
	else
	{
		echo "given number is not armstrom";
	}
?>
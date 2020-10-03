<?php
	//find reverse number
	$n=12345;$r=0;
	echo "number is=$n</br>";
	echo "reverse number is=";
	while($n>0)
	{
		$a=$n%10;
		echo $a;
		$n=$n/10;
	}
?>
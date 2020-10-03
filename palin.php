<?php
	//palindrom number
	$n=121;$a=0;
	$m=$n;
	echo "number is=$n</br>";
	while($n!=0)
	{
		$a=$a*10+$n%10;
		$n=$n/10;
	}
	if($a==$m)
	{
		echo "give nnumber is palindrom";
	}
	else
	{
		echo "given number is not palindrom";
	}
?>
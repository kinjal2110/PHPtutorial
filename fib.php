<?php
	echo"<h1>fibonacci serias</h1><br>";
	$a=1;
	$b=1;
	echo $a." ";	
	echo $b." ";
	for($i=1;$i<=5;$i++)
	{
		$c=$a+$b;
		echo $c." ";
		$a=$b;
		$b=$c;
	}
?>
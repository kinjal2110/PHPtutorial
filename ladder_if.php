<?php
	
	$a=4;$b=7;$c=2;
	echo "<h1>Maximum number out of three number</h1><br>";
	echo "A=".$a;
	echo "</br>B=",$b;
	echo "</br>C=".$c;
	echo "</br>Maximum value is=";
	if($a>$b && $a>$c)
	{
		echo $a;
	}
	else if($b>$a && $b>$c)
	{
		echo $b;
	}
	else
	{
		echo $c;
	}
?>
<?php
	//switch_case statement
	$a=4;$b=2;
	$c=3;
	echo "A=".$a;
	echo "</br>B=".$b;
	echo "</br>Choice is=".$c;
	echo "</br>";
	switch($c)
	{
		case 1:
		{
			$d=$a+$b;
			echo "Addition is=".$d;
			break;
		}
		case 2:
		{
			$d=$a-$b;
			echo "Substraction is=".$d;
			break;
		}
		case 3:
		{
			$d=$a*$b;
			echo "Multiplication is=".$d;
			break;
		}
		case 4:
		{
			$d=$a/$b;
			echo "Division is=".$d;
			break;
		}
		default:
		{
			echo "invalid choice!";
		}
	}
?>
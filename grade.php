<?php
	$m=91;
	echo "marks is=".$m;
	echo "</br>grade is=";
	if($m<=100 && $m>90)
	{
		echo "AA";
	}
	elseif($m<=90 && $m>80)
	{
		echo "AB";
	}
	elseif($m<=80 && $m>70)
	{
		echo "BC";
	}
	elseif($m<=70 && $m>60)
	{
		echo "CC";
	}
	elseif($m<=60 && $m>50)
	{
		echo "CD";
	}
	elseif($m<=50 && $m>40)
	{
		echo "DD";
	}
	elseif($m<=40 && $m>0)
	{
		echo "FF";
	}
?>
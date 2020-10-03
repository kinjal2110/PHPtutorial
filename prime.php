<?php
	$no=3;
	$temp=0;
	for($i=2;$i<$no/2;$i++)
	{
		if($no%$i==0)
		{
			$temp++;
			break;
		}
	}
	if($temp==0)
	{
		echo "prime number";
	}
	else
	{
		echo "Not prime number";
	}
?>
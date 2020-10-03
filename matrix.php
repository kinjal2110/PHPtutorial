<html>
<body>
<?php
	echo "<h1>Addition of two matrices</h1>";
	$a1=array(array(5,2),array(3,4));
	$a2=array(array(1,3),array(7,9));
	echo "<br>";
	echo "Matrix A :<br>";
	for($i=0;$i<2;$i++)
	{
		for($j=0;$j<2;$j++)
		{
			echo $a1[$i][$j]."   ";
		}
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";
	echo "Matrix B :"."<br>";
	for($i=0;$i<2;$i++)
	{
		for($j=0;$j<2;$j++)
		{
			echo $a2[$i][$j]."  ";
		}
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";
	echo "Addition is :"."<br>";
	for($i=0;$i<2;$i++)
	{
		for($j=0;$j<2;$j++)
		{
			$add[$i][$j]=$a1[$i][$j]+$a2[$i][$j];
			echo $add[$i][$j]."  ";	
		}
		echo "<br>";
	}
?>
</body>
</html>
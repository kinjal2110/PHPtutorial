<?php
	echo "Global variable Demo</br>";
	$var=5;
	$i=10;
	echo $GLOBALS['var']."<br>";
	echo $GLOBALS['i']."<br>";
	
	function fun()
	{
		echo "Inside function<br>";
		$j=20;
		global $var;
		echo $var."<br>";
		echo $GLOBALS['var']."<br>";
		//echo $i."<br>";
		echo $GLOBALS['i']."<br>";
		echo $j."<br>";
		//echo $GLOBALS['j']."<br>";
		global $k;
		$k=30;

	}
	fun();
	echo "After function<br>";
	echo $var."<br>";
	//echo $j."<br>";
	//echo $GLOBALS['j']."<br>";
	//echo $k."<br>";
	echo $GLOBALS['k']."<br>";
?>
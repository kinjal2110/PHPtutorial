<?php
	//global variables
	$var=5;
	function fun()
	{
		global $var;
		echo "inside function variable=".$var;
	}
	fun();
	echo "</br>";
	echo "outside function variable=".$var;
?>
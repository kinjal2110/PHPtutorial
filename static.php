<?php
	//static variable
	function fun()
	{
		//$var=0; //non static
		static $var=0; //static
		return ++$var;
	}
	echo "Outside function variable=".fun();
	echo "</br>";
	echo "Outside function variable=".fun();
?>
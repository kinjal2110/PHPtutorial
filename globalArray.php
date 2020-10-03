<?php
	//global array
	$var="ks";
	function fun()
	{
		global $var;
		echo $GLOBALS['var']; //also allow:- GLOBALS["var"];
	}
	fun();
	echo "</br>";
	echo "outside function variable=".$var;
?>

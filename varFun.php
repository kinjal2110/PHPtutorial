<?php
	$data=array(5,9.6,NULL,"hello ks");
	foreach($data as $value)
	{
		echo gettype($value)."</br>";
	}
	$str="143";
	settype($str,"integer");
	echo $str."<br>";
	unset($str);
	echo $str."<br>";
	
	$n;
	if(isset($n))
	{
		echo "set<br>";
	}
	else
	{
		echo "Not set<br>";
	}
	$var="kinjal";
	echo strval($var)."<br>";
	$var1="9.99";
	echo floatval($var1)."<br>";
	
	$var2="32";
	echo intval($var2)."<br>";
	
	$p=print_r($var,true);
	echo $p."<br>";
	$ar=array(array(7),array(8,6));
	print_r($var,false);
?>
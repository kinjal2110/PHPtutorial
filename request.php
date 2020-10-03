<!DOCTYPEhtml>
<html>
<body>
<form method="post" action="requestDemo.php">
name:<input type="text" name="fname">
<input type="submit">
</form>
<?php
	if(!empty($_REQUEST['fname']))// if these portion is an comment then error is occured
	{
		echo $_REQUEST['fname'];
	}
?>
</body>
</html>
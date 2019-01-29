<?php
	$hostname="localhost:3306"; //local server name default localhost
	$username="IGnoXX";  //mysql username default is root.
	$password="test123";       //blank if no password is set for mysql.
	$database="stellar";  //database name which you created
	
	$con=mysql_connect($hostname,$username,$password);
	if(!$con)
	{
		echo die('Connection Failed'.mysql_error());
	}

	mysql_select_db($database, $con);
?>

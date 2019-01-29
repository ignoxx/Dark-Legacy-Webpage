<?php
    //ini_set( 'error_reporting', E_ALL );
    //ini_set( 'display_errors', true );
	include '../httpdocs/PHP/connect.php';
	$sql = mysql_query ("SELECT Online FROM sl_user WHERE Online='1'");
	$nbr = mysql_num_rows($sql) ;
	
	echo "<a><b>Users Online:</b> <b style='color:black !important;'>".$nbr."</b> </a>";
?>

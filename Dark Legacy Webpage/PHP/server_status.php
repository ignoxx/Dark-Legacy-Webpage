<?php

$site = "127.0.0.1";
$port = 44321;
$fp = @fsockopen($site, $port, $errno, $errstr, 2);

if (!$fp) 
{
    echo "<a><b>Server:</b> <b style='color:#DD0000 !important;'>OFFLINE</b> </a>";
} 
else 
{ 
	echo "<a><b>Server:</b> <b style='color:#00DD00 !important;'>ONLINE</b> </a>";
}
?>

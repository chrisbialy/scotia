<?php
$mysql_hostname = "comp-hons.uhi.ac.uk";
$mysql_user = "pe14002792";
$mysql_password = "16051994";
$mysql_database = "pe14002792";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>


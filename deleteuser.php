<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('db.php');
if($_GET['userid'])
{
$userid=$_GET['userid'];
 $sql = "delete from customer where userid='$userid'";
 mysql_query( $sql);
}

?>
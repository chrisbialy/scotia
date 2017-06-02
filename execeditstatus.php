<?php
	include('db.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysql_query("UPDATE booking_customer SET status='$status' WHERE id='$roomid'");
	header("location: dashboard.php");
?>
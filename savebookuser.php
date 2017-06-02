<?php
	include('db.php');
	$id = $_POST['id'];
	$status=$_POST['status'];
	$payable=$_POST['payable'];
	mysql_query("UPDATE booking_customer SET payable='$payable',status='$status' WHERE id='$id'");
	

	header("location: loged.php");
?>
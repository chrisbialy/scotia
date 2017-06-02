<?php
	include('db.php');
	$id = $_POST['id'];
	$rrad=$_POST['boat'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$status=$_POST['status'];
	$cruise=$_POST['cruise'];
	$price=$_POST['price'];
	mysql_query("UPDATE booking_customer SET fname='$fname', lname='$lname', contact='$contact', address='$address',status='$status' WHERE id='$id'");
	mysql_query("UPDATE cruise SET cruise='$cruise', price='$price' WHERE id='$rrad'");

	header("location: allbookings.php");
?>
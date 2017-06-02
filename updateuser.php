<?php
	include('db.php');
	$userid = $_POST['userid'];
	$username=$_POST['username'];
	$firstname=$_POST['firstname'];
	$surname=$_POST['surname'];
	$dob=$_POST['dob'];
	$emailadd=$_POST['emailadd'];
	$usertype=$_POST['usertype'];
	mysql_query("UPDATE customer SET username='$username', firstname='$firstname', 
	surname='$surname', dob='$dob', emailadd='$emailadd', 
	usertype='$usertype' WHERE userid='$userid'");
	header("location: volunteer.php");
?>
<?php
	include('db.php');
	$roomid = $_POST['roomid'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	mysql_query("UPDATE newsletter SET name='$name', email='$email' WHERE id='$roomid'");
	header("location: viewnewsletter.php");
?>
<?php
	include('db.php');
	$roomid = $_POST['roomid'];
	$type=$_POST['type'];
	$cruise=$_POST['cruise'];
	$price=$_POST['price'];
	$seat=$_POST['seat'];
	$time=$_POST['time'];
	mysql_query("UPDATE cruise SET type='$type', price='$price', cruise='$cruise', numseats='$seat', time='$time' WHERE id='$roomid'");
	header("location: route.php");
?>
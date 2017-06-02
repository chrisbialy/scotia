<?php
	include('db.php');
	$email = $_POST['email'];
	$name=$_POST['name'];
	mysql_query("insert into newsletter (email, name) values ('$email','$name')");
	

	header("location: index.php");
?>


<?php

function createConnection() {
	$host="";
	$user="";
	$userpass='';
	$schema="";
	$conn = new mysqli($host,$user,$userpass,$schema);
	if(mysqli_connect_errno()) {
		echo "Could not connect to database: ".mysqli_connect_errno();
		exit;
	}
	return $conn;

?>

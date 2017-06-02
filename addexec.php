<?php
include('db.php');
$type=$_POST['type'];
$route=$_POST['cruise'];
$price=$_POST['price'];
$seat=$_POST['seat'];
$time=$_POST['time'];
$update=mysql_query("INSERT INTO cruise (type, price, numseats, cruise, time)
VALUES
('$type','$price','$seat','$route','$time')");
header("location: route.php");
?>

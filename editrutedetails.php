<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('db.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM cruise where id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$type=$row['type'];
				$cruise=$row['cruise'];
				$price=$row['price'];
				$seat=$row['numseats'];
				$time=$row['time'];
			}
?>
<form action="execeditroute.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	Boat Type:<br><input type="text" required name="type" value="<?php echo $type ?>" class="ed"><br>
	Cruise:<br><input   type="text" required name="cruise" value="<?php echo $cruise ?>" class="ed"><br>
	Price:<br><input name="price" type="number" min="0" max="10000" size="5" required class="ed"><?php echo $price ?></input><br>
	Seat:<br><input type="number" required name="seat" min="0" max="50" value="<?php echo $seat ?>" class="ed"><br>
	Time:<br><input type="time"  required name="time" value="<?php echo $time ?>" class="ed"><br>
	<input type="submit" value="Save" id="button1">
	
	
	
</form>
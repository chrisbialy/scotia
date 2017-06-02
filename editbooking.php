<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;

padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
color:#fff;
border-color:#fff;
padding:5px;
background-color:#33A1DE;
height: 34px;
}
-->
</style>
<?php
	include('db.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM booking_customer where id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$fname=$row['fname'];
				$lname=$row['lname'];
				$contact=$row['contact'];
				$address=$row['address'];
				$rrad=$row['boat'];
		$results = mysql_query("SELECT * FROM cruise where id='$rrad'");
		while($rowa = mysql_fetch_array($results))
			{
				$cruise=$rowa['cruise'];
				$price=$rowa['price'];
				
			}
			}
			
?>
<form action="savebook.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id=$_GET['id'] ?>">
	First Name:<br><input required type="text" name="fname" value="<?php echo $fname ?>" class="ed"><br>
	Last Name:<br><input required type="text" name="lname" value="<?php echo $lname ?>" class="ed"><br>
	Contact:<br><input required type="number" name="contact" min="0"  size="15" value="<?php echo $contact ?>"class="ed"><br>
	Address:<br><input required type="text" name="address" value="<?php echo $address ?>"class="ed"><br>
	Cruise:<br><input required type="text" name="cruise" value="<?php echo $cruise?>" class="ed"><br>
	Price:<br><input required type="number" min="0" max="10000" size="5" name="price" value="<?php echo $price?>" class="ed"><br>
	Status:<br>
	<select name="status" class="ed">
	<option>Onboard</option>
	<option>Not Void</option>
	<option>Confirmed</option>
	<option>Not Confirmed</option>
	<option>Processing</option>
	</select>
	<br>
		<input type="submit" value="Save" id="button1">
</form>

	
	
	
</form>
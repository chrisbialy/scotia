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
				$payable=$row['payable'];
				$status=$row['status'];
	
			}
			
?>
<form action="savebookuser.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id=$_GET['id'] ?>">
	Payable:<br><input required type="number" min="0" max="10000" size="5" name="payable" value="<?php echo $payable?>" class="ed"><br>
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
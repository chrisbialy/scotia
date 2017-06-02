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
	$result = mysql_query("SELECT * FROM newsletter where id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$name=$row['name'];
				$email=$row['email'];
			}
?>
<form action="savenewsletter.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	Name:<br><input type="text" required name="name" value="<?php echo $name ?>" class="ed"><br>
	E-mail:<br><input   type="text" required name="email" value="<?php echo $email ?>" class="ed"><br>
	
	<input type="submit" value="Save" id="button1">
	
	
	
</form>
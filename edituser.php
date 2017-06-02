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
	$userid=$_GET['userid'];
	$result = mysql_query("SELECT * FROM customer where userid='$userid'");
		while($row = mysql_fetch_array($result))
			{
				$username=$row['username'];
				$firstname=$row['firstname'];
				$surname=$row['surname'];
				$dob=$row['dob'];
				$emailadd=$row['emailadd'];
				$usertype=$row['usertype'];
			}
?>
<form action="updateuser.php" method="post">
	<input type="hidden" name="userid" value="<?php echo $userid=$_GET['userid'] ?>">
	Username:<br><input type="text" required name="username" value="<?php echo $username ?>" class="ed"><br>
	Firstname:<br><input   type="text" required name="firstname" value="<?php echo $firstname ?>" class="ed"><br>
	Surname:<br><input   type="text" required name="surname" value="<?php echo $surname ?>" class="ed"><br>
	Date of Birth:<br><input type="date" required name="dob" value="<?php echo $dob ?>" class="ed"><br>
	Email:<br><input   type="email" required name="emailadd" value="<?php echo $emailadd ?>" class="ed"><br>
	Usertype:<br><input   type="number" min="1" max="3" required name="usertype" value="<?php echo $usertype ?>" class="ed"><br>
	<input type="submit" value="Save" id="button1">
	
	
	
</form>
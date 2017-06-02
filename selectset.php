<!DOCTYPE HTML>
<html>
<head>
<title>Booking Detail</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Outing Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/select_login.css" rel="stylesheet" type="text/css" media="all" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

<?php
include('db.php');
$busnum=$_POST['cruise'];
$date=$_POST['date'];
$qty=$_POST['qty'];
$result = mysql_query("SELECT * FROM cruise WHERE id='$busnum'");
while($row = mysql_fetch_array($result))
	{
		$numofseats=$row['numseats'];
		$query = mysql_query("SELECT sum(seat_reserve) FROM reserve where date = '$date'");
							while($rows = mysql_fetch_array($query))
							  {
							  $inogbuwin=$rows['sum(seat_reserve)'];
							  }
		$avail=$numofseats-$inogbuwin;
		$setnum=$inogbuwin+1;
	}
?>

<?php

$seats='Number of available seats:';
if ($avail < $qty){
echo  "<h5><font color=#18175D>$seats $avail</h5>";	
echo '<h5> <font color=#3299CC>Quantity reserved exceed the available seat of the boat. </font></h5>';
echo '<h5> <font color=#3299CC>Go back to booking page and try different number of passengers</font></h5>';
echo '<a href="https://comp-hons.uhi.ac.uk/~14002792/web/#book" class="button">Booking</a>';
}
else if($avail > 0)
{
?>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form"]["fname"].value;
if (x==null || x=="")
  {
  alert("First Name must be filled out");
  return false;
  }
var y=document.forms["form"]["lname"].value;
if (y==null || y=="")
  {
  alert("Last Name must be filled out");
  return false;
  }
var a=document.forms["form"]["address"].value;
if (a==null || a=="")
  {
  alert("Address must be filled out");
  return false;
  }
var b=document.forms["form"]["contact"].value;
if (b==null || b=="")
  {
  alert("Contact Number must be filled out");
  return false;
  }

}
</script>
<div id="stylized" class="myform">

<form id="form" name="form" action="save.php" method="post"  onsubmit="return validateForm()">
<input type="hidden" value="<?php echo $busnum ?>" name="busnum" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $qty ?>" name="qty" />
<h4 style="">Seat Number
<label class="small"><a rel="facebox" href="seatlocation.php?id=<?php echo $busnum; ?>">view seat</a></label>
</h4>
<input type="text" name="setnum" value="
<?php
$N = $qty;
for($i=0; $i < $N; $i++)
{
echo $i+$setnum.', ';
} 
 ?>
" id="name" readonly/><br>
<label for="firstname">
</label>
<input type="text" name="fname" placeholder="First name" required size="15" id="fname"/><br>
<label for="lastname">
</label>
<input type="text" name="lname" placeholder="Last name" required size="15"  id="lname"/><br>
<label for="address">
</label>
<input type="text" name="address" placeholder="Address" required size="15" id="address"/><br>
<label for="contact">
</label>
<input type="number" name="contact" placeholder="Mobile" required size="15"  id="contact"/><br>
<button type="submit">Confirm</button>
</form>
</div>
<?php
}
else if($avail <= 0)
{
echo 'no available sets';
}
?>
</body>
</html>
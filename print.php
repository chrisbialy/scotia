<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<!DOCTYPE html>
<html>
 <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  
      <title>View Booking</title>
	  
	  <!--[if (lte IE 8)&!(IEMobile)]>
		<script>
		<script src="js/iefix.js"></script>
		</script>
		<link rel="stylesheet" type="text/css" href="css/ieold.css" />

		<![endif]-->
		
<link href="css/booking.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/print.css" rel="stylesheet" type="text/css" />

 <script language="javascript">

function myFunction() {
    window.print();
}

</script>
</head>
 
  <body>
<a href="index.php" class="button hide-from-printer">Home</a>
<button class="hide-from-printer" onclick="myFunction()">Print</button>
<div>
	<h1 class="">Booking Confirmation</h1>
	

<?php
include('db.php');
$id=$_GET['id'];
$setnum=$_GET['setnum'];
$result = mysql_query("SELECT * FROM booking_customer WHERE transactionum='$id'");
while($row = mysql_fetch_array($result))
	{
		echo '<div class="verticalLine">';
		echo '<h2>We look forward to welcoming</h2>';
		echo '<h2>'.$row['fname'].' '.$row['lname'].' to Morven Orca Boat !</h2>';
		echo '<p>Booking Reference: '.$row['id'].'</p>';
		echo '<p>Transaction Number: '.$row['transactionum'].'</p>';
		echo '<p>Firstame: '.$row['fname'].'</p>';
		echo '<p>Lastname: '.$row['lname'].'</p>';
		echo '<p>Address: '.$row['address'].'</p>';
		echo '<p>Contact: '.$row['contact'].'</p>';
		echo '<p>Seats Reserved: '.$setnum.'</p>';
		echo '<p>Payable: '.$row['payable'].'</p>';
		
	
	}
$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$id'");
while($rows = mysql_fetch_array($results))
	{
		$ggagaga=$rows['boat'];
		echo '<p>Date Of Cruise: '.$rows['date'].'</p>';
		
		$resulta = mysql_query("SELECT * FROM cruise WHERE id='$ggagaga'");
		while($rowa = mysql_fetch_array($resulta))
			{
			echo '<p>Time Of Cruise: '.$rowa['time'].'</p>';	
			echo '<p>Cruise: '.$rowa['cruise'].'</p>';
			echo '<p>Type of Boat: '.$rowa['type'].'</p>';
			
			}
		
		
		
	}
	echo '</div>';
?>
<h2 class='right_h2'>Thank You For Your Booking</h2>
<p class='right_h4'>Our Address<p>
<p class='right_p'>Scotia Sea</p>
<p class='right_p'>Life Trust</p> 
<p class='right_p'>10 Port Street</p>
<p class='right_p'>Invernessshire</p>
<p class='right_p'>IN55 V4</p>
<p class='right_p'>Portree</p>
<p class='right_h4'>Need Anything ? Just Call</p>
<p class='right_p'>0147 88547566</p>
</div>




  </body>
</html>

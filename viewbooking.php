<?php
	session_start();
	include("php/functions.php");
	$username=checkUser($_SESSION['userid'],session_id(),2);
	$currentuser=getUserLevel();
	if(isset($_COOKIE['userintent'])) {
		if($currentuser['userlevel']==0 && $_COOKIE['userintent']=="editarticle") {
			header("location:	login.php");
	exit;
		}
	}

	$userid=$currentuser['userid'];
	$id = $_GET['id'];

?>
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
	  
	 
	 <script src="js/script.js"></script>
	 
	  	
		
<link href="css/booking.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/print.css" rel="stylesheet" type="text/css" />

 <script language="javascript">

function myFunction() {
    window.print();
}

</script>
 </head>
 
  <body>
  	
 


   <div class="container-spacy   ">
    <div class="row ">
		<?php if($currentuser['userlevel']>1) { ?>
		<a href="loged.php" class="button hide-from-printer">My Account</a>
		<button class="hide-from-printer" onclick="myFunction()">Print</button>
			<?php if($currentuser['userlevel']>2) { ?>
			<?php } ?>
		<?php } ?>
	<h1>Booking Confirmation</h1>
	
<section >

<?php
include('db.php');

$setnum=$_GET['setnum'];
$result = mysql_query("select * from booking_customer where id='$id' and userid='$userid'");
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
		echo '<p>Seats Reserved: '.$row['setnumber'].'</p>';
		echo '<p>Payable: '.$row['payable'].'</p>';
		$transactionum=$row['transactionum'];
	}
	
$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$transactionum'");
while($rows = mysql_fetch_array($results))
	{
		$boat=$rows['boat'];
		echo '<p>Date Of Cruise: '.$rows['date'].'</p>';
		
		
		$resulta = mysql_query("SELECT * FROM cruise WHERE id='$boat'");
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

</section>
</div>
</div>

  </body>
</html>
















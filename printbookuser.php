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

?>


<!DOCTYPE html>
<html>

	<head>
 <script language="javascript">

function myFunction() {
    window.print();
}

</script>


<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<link href="css/print.css" rel="stylesheet" type="text/css" />
<div id="content" class="clearfix">
 
 
 
	</head>
		<body>
<?php
	

	// if user is logged in and not suspended add comment button
		if($currentuser['userlevel']>2 || ($currentuser['userid']==$userid && $currentuser['userlevel']>1)) {
			?> 
		<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
		<h2 class=""><?php echo $currentuser['username']; ?>'s All Bookings</h2>
		
		
								<?php
		}
	
?>

					
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7">Book Ref.  </th>
								<th> Payable </th>
								<th> Status </th>
								<th> Cruise </th>
								<th> Boat Type </th>
								<th> Price </th>
								<th> Time </th>
								<th> Date </th>
								<th> Trans. </th>
								<th> Seats Res. </th>
							
							</tr>
						</thead>
						<tbody>
						<?php
									include('db.php');
									$results = mysql_query("SELECT * FROM booking_customer WHERE userid='$userid'");
									while($rows = mysql_fetch_array($results))
										{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$rows['id'].'</td>';
									echo '<td><div align="right">'.$rows['payable'].'</div></td>';
									echo '<td><div align="right">'.$rows['status'].'</div></td>';									
									$trans=$rows['transactionum'];
									$boat=$rows['boat'];
									$result = mysql_query("SELECT * FROM cruise WHERE id='$boat'");
									while($rowa = mysql_fetch_array($result))
										{
									echo '<td><div align="right">'.$rowa['cruise'].'</div></td>';
									echo '<td><div align="right">'.$rowa['type'].'</div></td>';
									echo '<td><div align="right">'.$rowa['price'].'</div></td>';
									echo '<td><div align="right">'.$rowa['time'].'</div></td>';
										}
									$resulta = mysql_query("SELECT * FROM reserve WHERE transactionnum='$trans'");
									while($row = mysql_fetch_array($resulta))
										{
									echo '<td><div align="right">'.$row['date'].'</div></td>';
									echo '<td><div align="right">'.$row['transactionnum'].'</div></td>';
									echo '<td><div align="right">'.$row['seat_reserve'].'</div></td>';
									
									}
									
									
									
								}
							?> 
					</tbody>
					</table>
					<button class="hide-from-printer" onclick="myFunction()">Print</button>
				</div>

</body>
</html>
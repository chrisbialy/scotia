<!DOCTYPE html>

<html>
<head>

<link href="css/admin_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
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
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>

</head>
<body>

<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					Hi
					<strong>Admin</strong>
					!
					<br>
					<a class="alightred" href="index.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a  href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Dashboard</span>
						</a>
					</li>
					
					<li>
						<a href="route.php">
							<img alt="Boat" src="img/m-custom.png">
							<span>Boat</span>
						</a>
					</li>
					<li>
						<a href="setinventory.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Seat Inventory</span>
						</a>
					</li>
					<li>
						<a class="" href="allbookings.php">
							<img alt="Bookings" src="img/b.png">
							<span>All Bookings</span>
						</a>
					</li>
					<li>
						<a class="active" href="cruise.html">
							<img alt="Cruise" src="img/steer.png">
							<span>Cruise</span>
						</a>
					</li>
					<li>
						<a class="" href="volunteer.php">
							<img alt="Volunteer" src="img/volunteer.png">
							<span>Volunteer</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
			<div id="content" class="clearfix">
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7">
								Cruise ID</th>
								<th>Cruise</th>
								<th>Boat Type</th>
								<th>Price</th>
								<th>Time</th>
								<th>Date</th>
								<th>No. of Seats</th>
								<th>Firstname</th>
								<th>Lastname</th>
								<th>Contact</th>
							</tr>
						</thead>
						<tbody>
<?php
include('db.php');
$q = intval($_GET['q']);

$result = mysql_query("SELECT * FROM cruise WHERE id = '$q'");
while($row = mysql_fetch_array($result)) {
$rrad=$row['id'];
$resulta = mysql_query("SELECT * FROM reserve WHERE boat='$rrad'");
					
					
					
while($rowa = mysql_fetch_array($resulta)){
$dddd=$rowa['transactionnum'];

$results = mysql_query("SELECT * FROM booking_customer where transactionum='$dddd'");
			while($rows = mysql_fetch_array($results))
				{

					echo '<tr class="record">';
					echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['id'].'</td>';
					echo '<td><div align="right">'.$row['cruise'].'</div></td>';
					echo '<td><div align="right">'.$row['type'].'</div></td>';
					echo '<td><div align="right">'.$row['price'].'</div></td>';
					echo '<td><div align="right">'.$row['time'].'</div></td>';
					echo '<td><div align="right">'.$rowa['date'].'</div></td>';
					echo '<td><div align="right">'.$rowa['seat_reserve'].'</div></td>';
					echo '<td><div align="right">'.$rows['fname'].'</div></td>';
					echo '<td><div align="right">'.$rows['lname'].'</div></td>';
					echo '<td><div align="right">'.$rows['contact'].'</div></td>';
					echo '</tr>';
					}
				}
					echo "</table>";
}

?>
</tbody>
</table>	
</div>
<div id="footer" class="radius-bottom">
					
				</div>
</body>
</html>




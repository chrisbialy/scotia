<?php
	require_once('auth.php');
?>
<html>
<head>
<title>Volunteer</title>
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
						<a href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Dashboard</span>
						</a>
					</li>
					
					<li>
						<a class="" href="route.php">
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
						<a href="allbookings.php">
							<img alt="Bookings" src="img/b.png">
							<span>All Bookings</span>
						</a>
					</li>
					<li>
						<a class="" href="cruise.html">
							<img alt="Cruise" src="img/steer.png">
							<span>Cruise</span>
						</a>
					</li>
					<li>
						<a class="active" href="volunteer.php">
							<img alt="Volunteer" src="img/volunteer.png">
							<span>Volunteer</span>
						</a>
					</li>
					<li>
						<a class="" href="viewnewsletter.php">
							<img alt="volunteer" src="img/newsletter.png">
							<span>Newsletter</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7">User ID</th>
								<th> Username </th>
								<th> Firstname </th>
								<th> Surname </th>
								<th> Date of Birth </th>
								<th> Email </th>
								<th> Usertype </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM customer");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['userid'].'</td>';
									echo '<td><div align="right">'.$row['username'].'</div></td>';
									echo '<td><div align="right">'.$row['firstname'].'</div></td>';
									echo '<td><div align="right">'.$row['surname'].'</div></td>';
									echo '<td><div align="right">'.$row['dob'].'</div></td>';
									echo '<td><div align="right">'.$row['emailadd'].'</div></td>';
									echo '<td><div align="right">'.$row['usertype'].'</div></td>';
									echo '<td><div align="center"><a rel="facebox" href="edituser.php?userid='.$row['userid'].'">edit</a> | <a href="#" userid="'.$row['userid'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					<a class="afooter-link " href="printvolunteer.php">Print</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("userid");

//Built a url to send
var info = 'userid=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteuser.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>
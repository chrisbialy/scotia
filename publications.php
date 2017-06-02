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
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  
      <title>Publications</title>
	  
		<!--[if (lte IE 8)&!(IEMobile)]>
		<script>
		<script src="js/iefix.js"></script>
		</script>
		<link rel="stylesheet" type="text/css" href="css/ieold.css" />

		<![endif]-->
	  
	  <!-- Stylesheets Original -->
	  
		<link href="css/admin_user_style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
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
  	

 


<?php
	

		// if user is logged in and not suspended add comment button
		if($currentuser['userlevel']>2 || ($currentuser['userid']==$userid && $currentuser['userlevel']>1)) {
			?> 
		<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
		<h3 class="text-center ">My Account</h3>
		<h5 class="">Hi <?php echo $currentuser['username']; ?> !</h5>
			<div id="adminbar" class="radius-bottom">
				
				
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					
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
						<a class="" href="loged.php">
							<img alt="Bookings" src="img/b.png">
							<span>All Bookings</span>
						</a>
					</li>
					<li>
						<a class="active" href="publications.php">
							<img alt="Cruise" src="img/publ.png">
							<span>Publications</span>
						</a>
					</li>
					
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7">ID</th>
								<th> Year </th>
								<th> Type </th>
								<th> Publication </th>
								<th> Links </th>
								<th>  </th>
							</tr>
						</thead>
						<tbody>
						<?php
									include('db.php');
									$results = mysql_query("SELECT * FROM publication");
									while($rows = mysql_fetch_array($results))
										{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$rows['id'].'</td>';
									echo '<td><div align="right">'.$rows['year'].'</div></td>';
									echo '<td><div align="right">'.$rows['type'].'</div></td>';	
									echo '<td><div align="right">'.$rows['publication'].'</div></td>';	
									echo '<td><div><a href="pub1.pdf">Publication 1</a>';
									echo '<td><div><a href="Pub2.pdf">Publication 2</a>';
									echo '</tr>';
									}

							?> 
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					
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
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteres.php",
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
		
		<?php
		}
	
?>






  </body>
</html>







































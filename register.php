<!DOCTYPE HTML>
<html>
<head>
<title>Register User</title>

	<!--[if (lte IE 8)&!(IEMobile)]>
		<script>
		<script src="js/iefix.js"></script>
		</script>
		<link rel="stylesheet" type="text/css" href="css/ieold.css" />
		<![endif]-->
		
		
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Outing Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/select_login.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- js files -->
<script src="js/modernizr.custom.js"></script>
<!-- /js files -->

<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
<script type="text/javascript" src="xres/js/saslideshow.js"></script>
<script type="text/javascript" src="xres/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">



</head >
<body>





						<?php
						include("php/functions.php");
						$username=$_POST['username'];
						$firstname=$_POST['firstname'];
						$surname=$_POST['surname'];
						$emailadd=$_POST['emailadd'];
						$dayob=$_POST['dayob'];
						$monthob=$_POST['monthob'];
						$yearob=$_POST['yearob'];
						$dob=$yearob."-".$monthob."-".$dayob;

						$userpass=$_POST['userpass'];
						$secondpass=$_POST['secondpass'];
						$tnc=(isset($_POST['tnc'])?1:0);
						$salt=getSalt(16);
						$cryptpass=makeHash($userpass,$salt,50);
						
						// Used to check that submitted user does not exist already
						
						$userexists=false;
						$emailexists=false;
						
						// connect to database
						
						$db = createConnection();
						
						// check form details again in case javascript disabled form bypassed
						// javascript client side scripting
						// check username and email do not already exist
						
						$sql="select username,emailadd from customer where username=? or emailadd=?;";
						$stmt=$db->prepare($sql);
						$stmt->bind_param("ss",$username,$emailadd);
						$stmt->execute();
						$stmt->store_result();
						$stmt->bind_result($userresult,$emailresult);
						while($row=$stmt->fetch()) {
							if($userresult==$username) {$userexists=true;}
							if($emailresult==$email) {$emailexists=true;}
						}
						// check user is old enough, in this example users must be 16
						
						$latestbirthday=mktime(0, 0, 0,date("m"),date("d"),date("Y")-16); // the last value controls min age
						$birthday=mktime(0, 0, 0, $monthob, $dayob, $yearob);
						$validage=(($birthday-$latestbirthday)>0?false:true);
						// Check submitted and calculated variables before storing
						
						if(!$userexists && !$emailexists && $userpass==$secondpass && isset($userpass) && filter_var($emailadd, FILTER_VALIDATE_EMAIL) && $tnc && isset($firstname) && isset($surname) && $validage) {

						// insert new user
						
							$insertquery="insert into customer (username, firstname, surname, emailadd, dob, usertype, tnc, salt, userpass) values (?,?,?,?,?,2,?,?,?);";
							$inst=$db->prepare($insertquery);
							$inst->bind_param("sssssiss", $username, $firstname, $surname, $emailadd, $dob, $tnc, $salt, $cryptpass);
							$inst->execute();
							
						// check user inserted, if so create login form
						
							if($inst->affected_rows==1) {
						
						?>
						<!-- Register Section -->
					<section class="about-us " id="book">
						<h3 class="text-center ">Register</h3>
						<p class="text-center ">Lorem Ipsum  release of Letraset shee ....</p>
						<div class=" container ">
							<div class=" row ">
								<div class="col-lg-6 col-md-6 col-sm-6   " >
					<!-- Register User -->
					<div class="accordion-content" style="margin-bottom: 15px; ">
						<h3>Welcome:  <?php echo $firstname." ".$surname; ?></h3>
						<br>
						<p>You can now login with your username <em><?php echo $username; ?></em></p>
						<br>
						
						
						<form name="login" id="login" method="post" action="php/processlogin.php">
							<fieldset><legend>Login</legend>
							<p><label for="username"></label><input type="text" placeholder='Username' name="username" id="username" required value="<?php echo $username; ?>"/></p><br>
							<p><label for="userpass"></label><input type="password" placeholder='Password' name="userpass" id="userpass" required /></p><br>
							<button type="submit" id="submit">Login</button>
							</fieldset>
						</form>
					
					<?php } else { 
							//feedback there was a problem adding the user
							echo "<p>There was a problem adding your details. Please contact the website administrators</p>"; 
							}
					} else { 
					// registration failed either due to disabled javascript or other attempt to bypass validation
					?>
							
							<?php 
							if($emailexists){ echo "<p>The email address $emailadd already exists.</p>"; }
							if($userexists){ echo "<p>The username $username already exists.</p>"; }
							if($userpass!=$secondpass){ echo "<p>The passwords do not match.</p>"; }
							if(!filter_var($emailadd, FILTER_VALIDATE_EMAIL)){ echo "<p>The email address is invalid.</p>"; }
							?>
							<p>You need to return to the registration page and try again</p>
							<a href="register.html"class="button button-primary "><span>Register</span></a>
					<?php 
					}
						$stmt->close();
						$inst->close();
						$db->close(); 
					?>
						
				
					</div>	
			<a href="index.php" class="button">Home</a>					
			</div>		
		
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="about-info">
					<img src="images/logo.jpg" alt="about" class="img-responsive ">
				</div>
			</div>
		</div>
		
	</div>
</section>	
	
		
</section>
<!-- /Register Section -->
</body>
 <script src="js/functions.js"></script>
 </html>
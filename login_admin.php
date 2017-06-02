<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Login</title>

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




<!-- Login Section -->
<section class="about-us " id="book">
	<h3 class="text-center ">Admin Login</h3>
	<p class="text-center ">Lorem Ipsum hjdk ksloe ....</p>
	<div class=" container ">
		<div class=" row ">
		
			<div class="col-lg-6 col-md-6 col-sm-6   " >
					 <!-- Login -->
					 <div class="accordion-content" style="margin-bottom: 15px; ">
								<form name="loginform" id="loginform" method="post" action="login.php">
								<fieldset>
									<legend>Login Details</legend>
										<label for="username"> </legend><input type="text" placeholder="Username"  name="username" id="username" size="10" class="margin" required /><br />
									<br>
										<label for="userpass"></legend><input type="password" placeholder="Password" name="password" id="password" size="10" class="margin" required /><br />
									<br>
										<button type="submit">Login</button>
										<br>
										
								</fieldset>
								<br>
								 <a href="register.html"class="button button-primary "><span>Register</span></a>
								 <br><br>
								 <a href="login_user.php"class="button button-primary "><span>User</span></a>
								 <br><br>
								 <a href="index.php"class="button button-primary "><span>Home</span></a>
								</form>
								</div>
						 
								
				</div>
				 <!-- Login -->
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="about-info">
					<img src="images/admin.jpg" alt="about" class="img-responsive ">
				</div>
			</div>
		</div>
		
	</div>
</section>
<!-- /Login Section -->
</body>
</html>
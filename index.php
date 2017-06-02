<?php
	//Start session
	session_start();
	include_once("config.php");
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Scotia Sea Life Trust</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Outing Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/styleshop.css" rel="stylesheet" type="text/css">
<!-- /css files -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- js files -->
<script src="js/modernizr.custom.js"></script>
<!-- /js files -->



<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->

<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>


<script type="text/javascript">
		$("#slideshow > div:gt(0)").hide();

		setInterval(function() { 
		  $('#slideshow > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
		},  3000);
	</script>

<!--sa calendar-->	
		<script type="text/javascript" src="js/datepicker.js"></script>
    
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
		//<![CDATA[

		/*
				A "Reservation Date" example using two datePickers
				--------------------------------------------------

				* Functionality

				1. When the page loads:
						- We clear the value of the two inputs (to clear any values cached by the browser)
						- We set an "onchange" event handler on the startDate input to call the setReservationDates function
				2. When a start date is selected
						- We set the low range of the endDate datePicker to be the start date the user has just selected
						- If the endDate input already has a date stipulated and the date falls before the new start date then we clear the input's value

				* Caveats (aren't there always)

				- This demo has been written for dates that have NOT been split across three inputs

		*/

		function makeTwoChars(inp) {
				return String(inp).length < 2 ? "0" + inp : inp;
		}

		function initialiseInputs() {
				// Clear any old values from the inputs (that might be cached by the browser after a page reload)
				document.getElementById("sd").value = "";
				document.getElementById("ed").value = "";

				// Add the onchange event handler to the start date input
				datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e) {
				// Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
				// until they become available (a maximum of ten times in case something has gone horribly wrong)

				try {
						var sd = datePickerController.getDatePicker("sd");
						var ed = datePickerController.getDatePicker("ed");
				} catch (err) {
						if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
						return;
				}

				// Check the value of the input is a date of the correct format
				var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

				// If the input's value cannot be parsed as a valid date then return
				if(dt == 0) return;

				// At this stage we have a valid YYYYMMDD date

				// Grab the value set within the endDate input and parse it using the dateFormat method
				// N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
				var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

				// Set the low range of the second datePicker to be the date parsed from the first
				ed.setRangeLow( dt );
				
				// If theres a value already present within the end date input and it's smaller than the start date
				// then clear the end date value
				if(edv < dt) {
						document.getElementById("ed").value = "";
				}
		}

		function removeInputEvents() {
				// Remove the onchange event handler set within the function initialiseInputs
				datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		datePickerController.addEvent(window, 'load', initialiseInputs);
		datePickerController.addEvent(window, 'unload', removeInputEvents);

		//]]>
		</script> 




</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="navbar-wrapper">
    <div class="container">
		<nav class="navbar navbar-inverse navbar-static-top cl-effect-20">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo" style="width:110px;height:70px;"></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
						<li><a href="#book"><span data-hover="Booking">Booking</span></a></li>
						<li><a href="shop.php"><span data-hover="Shop">Shop</span></a></li>
						<li><a href="view_cart"><span data-hover="Basket">Basket</span></a></li>
						<li><a href="#events"><span data-hover="Guide">Guide</span></a></li>
						<li><a href="#testimonials"><span data-hover="Research">Research</span></a></li>
						<li><a href="login_user.php"><span data-hover="Sign In">Sign In</span></a></li>
						<li><a href="#contact"><span data-hover="Contact">Contact</span></a></li>
					</ul>
				</div>
			</div>
        </nav>
    </div>
</div>
<!-- Banner Section -->
<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
			<img class="first-slide" src="images/banner1.jpg" alt="First slide">
        </div>
        <div class="item">
			<img class="second-slide" src="images/banner2.jpg" alt="Second slide">
        </div>
        <div class="item">
			<img class="third-slide" src="images/banner3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
<!-- /Banner Section -->


<!-- Booking Section -->
<section class="about-us " id="book">
	<h3 class="text-center slideanim">Booking</h3>
	<p class="text-center slideanim">The adventure is waiting for you....</p>
	<div class="container  ">
		<div class="row  ">
		
			<div class="col-lg-6 col-md-6 col-sm-6   " >
					<h2 class="accordion-header" style="height: 23px; margin-bottom: 43px;">Book Your Cruise</h2>
					<div class="accordion-content" style="margin-bottom: 15px; ">
						<form action="selectset.php" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">Select Cruise: 
						<select name="cruise" required style="width: 188px; margin-left: 42px; border: 3px double #CCCCCC; padding:5px 10px;"/>
						<?php
						include('db.php');
						$result = mysql_query("SELECT * FROM cruise");
						while($row = mysql_fetch_array($result))
							{
								echo '<option value="'.$row['id'].'">';
								echo $row['cruise'].'  '.$row['type'].'  '.$row['time'];
								echo '</option>';
							}
						?>
						</select>
						</span><br>
						<span style="margin-right: 11px;">Date: 
						<input  type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" value="" maxlength="10"  required readonly="readonly"  style="width: 186px; margin-left: 92px;  margin-top: 10px; border: 3px double #CCCCCC; padding:10px 10px;"/>
						</span><br>
						<span style="margin-right: 11px;">No. of Adults: 
						<select name="qty" required style="width: 64px; margin-left: 164px; margin-top: 10px; border: 3px double #CCCCCC; padding:5px 10px;">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						</select>
						</span><br><br>
						<input type="submit" id="submit" value="Next" style="height: 34px;  background-color: #2594ca; color: white; margin-left: 124px; width: 116px; padding: 5px; " />
						</form>
					</div>	
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="about-info">
					<img src="images/vessel.jpg" alt="about" class="img-responsive slideanim">
				</div>
			</div>
		</div>
		
	</div>
</section>
<!-- /Booking Section -->


<!-- Donate Section -->
<section class="about-us" id="">
	<h3 class="text-center slideanim">Donate</h3>
	<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img src="images/about-img.jpg" alt="about" class="img-responsive slideanim">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="about-info">
					<h4 class="slideanim">We're The Best</h4>
					<p class="abt slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					<p class="abt slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Donate Section -->

<!-- Donate Section2 -->
<section class="about-us"id="">
	<div class="row">
		
				<!-- View Cart Box Start -->
<?php
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	echo '<div class="cart-view-table-front" id="view-cart">';
	echo '<h3>Your Basket </h3>';
	echo '<form method="post" action="cart_update.php">';
	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	echo '<tbody>';

	$total =0;
	$b = 0;
	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$id = $cart_itm["id"];
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		$product_color = $cart_itm["product_color"];
		$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
		echo '<tr class="'.$bg_color.'">';
		echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
		echo '<td>'.$product_name.'</td>';
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
		echo '</tr>';
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
		
	}
	echo '<td colspan="4">';
	echo '<button type="submit">Update</button><a href="view_cart.php" class="button">Checkout</a>';
	echo '</td>';
	echo '</tbody>';
	echo '</table>';
	
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	echo '</div>';

}
?>
<!-- View Cart Box End -->


<!-- Products List Start -->
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, price FROM donate ORDER BY id ASC");

if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<li class="product">
	<form method="post" action="cart_update.php">
	<div class="product-content"><h3>{$obj->product_name}</h3>
	<div class="product-thumb"><img src="img/{$obj->product_img_name}"></div>
	<div class="product-desc">{$obj->product_desc}</div>
	<div class="product-info">
	Price {$currency}{$obj->price} 
	
	<fieldset class="shop_fieldset">
	
	<label>
		<span>Size</span>
		<select name="product_color";>
		<option value="Large">Large</option>
		<option value="Small">Small</option>
		</select>
	</label>
	
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	
	</fieldset>
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center"><button type="submit" class="add_to_cart">Add</button></div>
	</div></div>
	</form>
	</li>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>    

<!-- Products List End -->
		
	</div>
</section>

<!-- /Donate Section2 -->

<!-- Events -->
<section class="our-events slideanim" id="events">
	<h3 class="text-center slideanim">Guide</h3>
	<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="event-info">
					<h4 class="text-center slideanim">March 24th</h4>
					<p class="eve slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="event-info">
					<h4 class="text-center slideanim">March 26th</h4>
					<p class="eve slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>	
			<div class="col-lg-4 col-md-4">
				<div class="event-info">
					<h4 class="text-center slideanim">March 28th</h4>
					<p class="eve slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>	
		</div>
	</div>
</section>
<!-- /Events -->
<!-- Gallery Section -->
<section class="our-gallery" id="gallery">
	<h3 class="text-center slideanim">Our Gallery</h3>
	<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="container">
		<img src="images/gallery-img1.jpg" data-darkbox="images/gallery-img1-1.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
        <img src="images/gallery-img2.jpg" data-darkbox="images/gallery-img2-2.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
		<img src="images/gallery-img3.jpg" data-darkbox="images/gallery-img3-3.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
		<img src="images/gallery-img4.jpg" data-darkbox="images/gallery-img4-4.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
		<img src="images/gallery-img5.jpg" data-darkbox="images/gallery-img5-5.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
		<img src="images/gallery-img6.jpg" data-darkbox="images/gallery-img6-6.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
		<img src="images/gallery-img7.jpg" data-darkbox="images/gallery-img7-7.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
		<img src="images/gallery-img8.jpg" data-darkbox="images/gallery-img8-8.jpg" data-darkbox-description="<b>Lorem Ipsum</b><br>Lorem ipsum dolor sit amet" class="img-responsive slideanim">
	</div>
</section>
<!-- /Gallery Section -->
<!-- Testimonials -->
<section class="our-testimonials slideanim" id="testimonials">
	<h3 class="text-center slideanim">Research</h3>
	<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="test">
					<img src="images/test-img1.png" class="img-responsive slideanim" alt="">
					<h4 class="text-center slideanim">Lorem Ipsum</h4>
					<p class="t1 slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>	
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="test">
					<img src="images/test-img2.png" class="img-responsive slideanim" alt="">
					<h4 class="text-center slideanim">Lorem Ipsum</h4>
					<p class="t1 slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>	
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="test">
					<img src="images/test-img3.png" class="img-responsive slideanim" alt="">
					<h4 class="text-center slideanim">Lorem Ipsum</h4>
					<p class="t1 slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>	
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Testimonials -->
<!-- Google Map -->
<section class="map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 slideanim">
				<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17190.131484137328!2d-6.217743075676031!3d57.41416608592295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488c2fe19bd3071d%3A0x101d0b7a22386915!2sPortree!5e0!3m2!1sen!2suk!4v1479567302811" frameborder="0"  style="border:0" allowfullscreen></iframe>
			</div>	
		</div>
	</div>
</section>
<!-- /Google Map -->
<!-- Contact Section -->
<section class="our-contacts slideanim" id="contact">
	<h3 class="text-center slideanim">Contact Us</h3>
	<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form role="form" action="mailto:14002792@uhi.ac.uk" method="post" enctype="text/plain">
					<div class="row">
						<div class="form-group col-lg-4 slideanim">
							<input type="text" class="form-control user-name" placeholder="Your Name" required/>
						</div>
						<div class="form-group col-lg-4 slideanim">
							<input type="email" class="form-control mail" placeholder="Your Email" required/>
						</div>
						<div class="form-group col-lg-4 slideanim">
							<input type="tel" class="form-control pno" placeholder="Your Phone Number" required/>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-lg-12 slideanim">
							<textarea class="form-control" rows="6" placeholder="Your Message" required/></textarea>
						</div>
						<div class="form-group col-lg-12 slideanim">
							<button type="submit" href="#" class="btn-outline1">Submit</button>
						</div>
					</div>
				</form>
			</div>	
		</div>
	</div>
</section>
<!-- /Contact Section -->
<!-- Footer Section -->
<section class="footer">
	<h2 class="text-center">THANKS FOR VISITING US</h2>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-4 footer-left">
				<h4>Contact Information</h4>
				<div class="contact-info">
					<div class="address">	
						<i class="glyphicon glyphicon-globe"></i>
						<p class="p3">10 Port Street</p>
						<p class="p4">Portree, Scotland</p>
					</div>
					<div class="phone">
						<i class="glyphicon glyphicon-phone-alt"></i>
						<p class="p3">+44 1200120034</p>
						<p class="p4">+44 5553300000</p>
					</div>
					<div class="email-info">
						<i class="glyphicon glyphicon-envelope"></i>
						<p class="p3"><a href="mailto:email1@example.com">ssltoffice@scotia.co.uk</a></p> 
						<p class="p4"><a href="mailto:email2@example.com">scotiainfo@scotia.co.uk</a></p>
					</div>
				</div>
			</div><!-- col -->
			<div class="col-md-4 footer-center">
				<h4>Newsletter</h4>
				<p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
				<form class="form-horizontal" role="form" action="newsletter.php" method="post">
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-4 control-label"></label>
						<div class="col-lg-10">
							<input type="email" name="email" class="form-control" id="inputEmail1" placeholder="Email" required>
						</div>
					</div>
					<div class="form-group">
						<label for="text1" class="col-lg-4 control-label"></label>
						<div class="col-lg-10">
							<input type="text" name="name" class="form-control" id="text1" placeholder="Your Name" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10">
							<input type="submit"  class="button" value="Subscribe" id="button" style="height: 34px;  background-color: #000; color: #fff; margin-left: 0px; margin-top:7px; width: 296px; padding: 5px; ">
						</div>
					</div>
				</form><!-- form -->
			</div><!-- col -->
			<div class="col-md-4 footer-right">
				<h4>Social Media</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<ul class="social-icons2">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
	<hr>
	<div class="copyright">
		<p>© 2016 Outing. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
	</div>
</section>
<!-- /Footer Section -->
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- /Back To Top -->

<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- js for gallery -->
<script src="js/darkbox.js"></script>
<!-- /js for gallery -->
<!-- js for back to top -->
<script src="js/main.js"></script>
<!-- /js for back to top -->
<!-- js for nav-smooth scroll -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<!-- /js for nav-smooth scroll -->
<!-- js for slide animations -->
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js for slide animations -->
<!-- /js files -->
</body>
</html>

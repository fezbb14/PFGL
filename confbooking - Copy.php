<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Confirm Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link rel="stylesheet" href="./css/main.css">
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="./css/booking/bootstrap.min.css" />

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="./css/booking/style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		<link rel="stylesheet" href="./css/roombookingstyle.css">
		
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
     <script>
	function openForm() {
	document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
	document.getElementById("myForm").style.display = "none";
	}
	</script>
	</head>
<body>

<div class="nav">
	   <ul id="menu">
        <li><a href="index.html">Home</a></li>
		<li><a href="services.html">Services</a></li>
		<li><a href="Accommodation.html">Accommodation</a></li>
		<li><a href="booking.html">Bookings</a></li>
		<li><a href="register.html">Special Offer</a><li/>
		<li><a href="contactus.html">Contact Us</a></li>
   </ul>
		<div class="navright">
		    
			
			<div class="logindrop">
				<button class="open-button" onclick="openForm()">Login</button>

				<div class="form-popup" id="myForm">
					<form action="/action_page.php" class="form-container">
		
						<label for="email"><b>Email</b></label>
						<input type="text" placeholder="Enter Email" name="email" required>

						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="psw" required>

						<button type="submit" class="btn">Login</button>
						<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
					</form>
				</div>
			</div>
		</div>
	</div>


<div class="content">
<div class="slideshow">
  <img class="slide" src="./images/slider/image1.png" style="display: block;">
    <img class="slide" src="./images/slider/image2.png" style="display: none;">
    <img class="slide" src="./images/slider/image3.png" style="display: block;">
    <script src="./js/slides.js"></script>
</div>
<br>
    <div class="confbooking">
		<div class="confbooking-inner">
			<form id="msform" action="reservation.php" method="post">
			<?php
				$roomid=$_GET['id'];
			?>
			<!-- progressbar -->
				<ul id="progressbar">
					<li class="active">Personal Details</li>
					<li>Booking Details</li>
					<li>Payment Details</li>
				</ul>
				<!-- fieldsets -->
				<fieldset>
					<h2 class="fs-title">Book your Delux room</h2>
					<h3 class="fs-subtitle">Enter your details</h3>
					<input type="text" name="name" placeholder="Name" />
					<input type="text" name="email" placeholder="Email" />
					<input type="text" name="phone" placeholder="Phone" />
					<input type="button" name="next" class="next action-button" value="Next" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Checking details</h2>
					<h3 class="fs-subtitle">Tell us about your requirement</h3>
					<input type="date" name="checkin" />
					<input type="date" name="checkout" />
					<select name="person">
						<option>How many persons?</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
					</select>
					<input type="button" name="previous" class="previous action-button" value="Previous" />
					<input type="button" name="next" class="next action-button" value="Next" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Payment Details</h2>
					<h3 class="fs-subtitle">We will not...</h3>
					<input type="text" name="cnumber" placeholder="Card Number" />
					<input type="text" name="cname" placeholder="Name on Card" />
					<input type="text" name="cvc" placeholder="CVC" />
					<input type="text" name="expiry" placeholder="Expiration" />
					<input type="button" name="previous" class="previous action-button" value="Previous" />
					<input type="submit" name="submit" class="submit action-button" action="reservation.php"  value="Submit" />
				</fieldset>
			</form>
			<!-- partial -->
			<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./js/roombookingscript.js"></script>

		</div>
		<div class="confbooking-inner">
		 
  
		</div>

	</div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <p class="titles">Copyright &copy; 2021 Sazia Tanzin<br>
</footer>
</div>

</body></html>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Confirm Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					<form action="login.php" class="form-container" method="POST">
		
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
			<form action="reservation.php" method="post">
			
			<br>
			<input type="hidden" name="roomid" value="<?php echo $_GET["id"];?>">
			<div class="input-container">
				<i class="fa fa-user icon"></i>
				<input class="input-field" type="text" placeholder="Name" name="name" required>
			</div>
			
			<div class="input-container">
				<i class="fa fa-envelope icon"></i>
				<input class="input-field" type="text" placeholder="Email" name="email">
			</div>
			
			<div class="input-container">
				<i class="fa fa-mobile icon"></i>
				<input class="input-field" type="text" placeholder="Mobile Number" name="phone" >
			</div>
			
			<div class="input-container">
				<i class="fa fa-calendar icon"></i>
				<input class="input-field" type="date" name="checkin" value="<?php echo $_GET["chkin"];?>" >
			</div>
			
			<div class="input-container">
				<i class="fa fa-calendar icon"></i>
				<input class="input-field" type="date" name="checkout" value="<?php echo $_GET["chkout"];?>">
			</div>
			
			<div class="input-container">
				<i class="fa fa-credit-card icon"></i>
				<input class="input-field" type="text" placeholder="Card Number" name="cnumber">
			</div>
			
			<div class="input-container">
				<i class="fa fa-credit-card icon"></i>
				<input class="input-field" type="text" placeholder="Name on Card" name="cname">
            </div>
			
			<div class="input-container">
				<i class="fa fa-credit-card icon"></i>
				<input class="input-field" type="text" placeholder="CVC" name="cvc">
            </div>
			
			<div class="input-container">
				<i class="fa fa-credit-card icon"></i>
				<input class="input-field" type="text" placeholder="Card Expiration" name="expiry">
            </div>
			
			<button type="submit" class="btn">Confirm Booking</button>
			</form>
		</div>
		<div class="confbooking-inner1">
		 
  
		</div>

	</div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<div style="text-align:center; font-size:12px; background:#abb886; height:50px;">
<footer>
    <p class="titles">Information Technology Diploma Project (INDP) Designed by Sazia Tanzin, Rexen Viray, Liang Ke</p>
</footer>
</div>

</body></html>
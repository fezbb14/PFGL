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
    <div class="reservation">
		<?php
		require 'dbConnectHotel.php'; 
		if (empty($_POST['name']) || empty($_POST['email']))
			die("Name and Email mube be supplied");
		
		else
			{
			//update the record
			$sql = "INSERT INTO reservation(GuestName,Email,MobNo,CheckIn,CheckOut,CNumber,CName,Cvc,Expiry,RoomID) VALUES('$_POST[name]', '$_POST[email]', '$_POST[phone]','$_POST[checkin]','$_POST[checkout]','$_POST[cnumber]','$_POST[cname]','$_POST[cvc]','$_POST[expiry]','$_POST[roomid]')";
			$result = mysqli_query($conn, $sql) or die( "<br> <br>"."<b>"."<font size=+3>"."Error reservation".mysqli_error($conn));
			$numrows = mysqli_affected_rows($conn);
			echo "<br> <br>";
			if ($numrows == 1)
				echo "<br><br><b>"."<font size=+3>". "Reservation successfull. Your booking date is: $_POST[checkin] to $_POST[checkout]. Thanks for choosing us.";
			else
				echo "<b><br><br>"."<font size=+3>"."Reservation failed"; 
			}
		?>

	</div>

</div>
<br><br><br>
<div style="text-align:center; font-size:12px; background:#abb886; height:50px;">
<footer>
    <p class="titles">Information Technology Diploma Project (INDP) Designed by Sazia Tanzin, Rexen Viray, Liang Ke</p>
</footer>
</div>

</body></html>
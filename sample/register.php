<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/main.css">
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
			<img class="slide" src="./images/slider/image2.png" style="display: none;">
			<img class="slide" src="./images/slider/image3.png" style="display: block;">
			<script src="./js/slides.js"></script>
		</div>
	
	<?php
		//open the server connection
		require 'dbConnectHotel.php'; 
		if (empty($_POST['fname']) || empty($_POST['email']) || empty($_POST['pass']))
			die("Some information has not been supplied");
		else
			{
			//update the record
			$sql = "INSERT INTO registration VALUES('$_POST[fname]', '$_POST[lname]', '$_POST[address]','$_POST[mobno]','$_POST[email]','$_POST[pass]')";
			$result = mysqli_query($conn, $sql) or die( "<br> <br>"."<b>"."<font size=+2>"."Error registration".mysqli_error($conn));
			$numrows = mysqli_affected_rows($conn);
			echo "<br> <br>";
			if ($numrows == 1)
				echo "<b>"."<font size=+2>". "Registration successfull";
			else
				echo "<b>"."<font size=+2>"."Registration failed"; 
			}
	?>
	</div>
<footer>
    <p class="titles">Copyright &copy; 2021 Sazia Tanzin<br>
</footer>
</div>

</body></html>
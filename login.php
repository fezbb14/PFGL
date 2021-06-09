<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/main.css">
		<style>
			#more {display: none;}
		</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>

    function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!").css('color', 'red');
        else
            $("#CheckPasswordMatch").html("Passwords match.").css('color', 'green');
    }
    $(document).ready(function () {
       $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });
    </script>
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
				<button class="open-button1" ><a href="index.html">LogOut</a></button>
			</div>
		</div>
</div>

	
<div class="login">
	<?php
		include "dbConnectHotel.php";

		$email = $_POST['email'];
		$password = $_POST['psw'];

		if (empty($_POST['email']) || empty($_POST['psw']))
			die("You need to enter a email and a password.");
		$sql = "SELECT Fname FROM registration WHERE Email ='$email' AND Pass=SHA('$password')";
		$result = mysqli_query($conn, $sql) or die("Error reading users - ".mysqli_error($conn));
 
		$numrows = mysqli_num_rows($result);
		if ($numrows == 1)
			{
			//get the username
			$row = mysqli_fetch_array($result);
			session_name('myhotel');
			session_start(); 
			$_SESSION['email'] = $email;
			echo "<h1>Welcome $row[0]</h1>";
			echo "<h2>You have successfully logged in</h2>";
			echo "<div class=loginimg>
					<div class=loginimg-inner>
						<img src='./images/roomtype/log1.jpg'></img>
					</div>
					<div class=loginimg-inner>
						<img src='./images/roomtype/log2.jpg'></img>
					</div>
					<div class=loginimg-inner>
						<img src='./images/roomtype/log3.jpg'></img>
					</div>
				  </div>
			";
			echo "<p>Our membership program is a lifestyle solution for those who would like to enjoy all of the 
			amenities of our lodge.</p>";
			echo "<p>Members are entitled to a discount of up to 12% off nightly room rates on 
			all future stays at our lodge by entering their Unique Member ID into the Reservation 
			Code section when making a booking directly through the Petra Flamingo Getaway Lodge website.</p>";
			echo "<p>We also have free breakfast and parking facilities for our guests.</p>";}
		else
			{
			echo 'The id or password was incorrect';
			session_name('myhotel');
			session_start();
			session_unset(); 
			}
	?>

</div>
<br><br><br><br><br><br><br><br><br><br><br>
<div style="text-align:center; font-size:12px; background:#abb886; height:50px;">
<footer>
    <p class="titles">Information Technology Diploma Project (INDP) Designed by Sazia Tanzin, Rexen Viray, Liang Ke</p>
</footer>
</div>


</body></html>
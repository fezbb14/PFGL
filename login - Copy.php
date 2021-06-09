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
				<button class="open-button" onclick="openForm()"><a href="index.html">LogOut</a></button>
				</div>
			</div>
		</div>
	<div class="content">
		<div class="login" style="text-align:center; font-size:12px; background:; height:50px;">

<?php
include "dbConnectHotel.php";

    $email = $_POST['email'];
    $password = $_POST['psw'];

  if (empty($_POST['email']) || empty($_POST['psw']))
   die("You need to enter a email and a password.");
    $sql = "SELECT * FROM registration WHERE Email ='$email' AND Pass='$password'";
 $result = mysqli_query($conn, $sql) or die("Error reading users - ".mysqli_error($conn));
 $numrows = mysqli_num_rows($result);
   if ($numrows == 1)
 {
 //get the username
 $row = mysqli_fetch_array($result);
 session_name('myhotel');
     session_start(); 
 $_SESSION['email'] = $email;
 echo "<h1>Welcome $email</h1>";
 echo "<h2>You have successfully logged in</h2>";
 }
 else
 {
 echo 'The id or password was incorrect';
 session_name('myhotel');
 session_start();
 session_unset(); 
 }
 ?>

</div>
<footer>
    <p class="titles">Copyright &copy;<br>
</footer>
</div>

</body></html>
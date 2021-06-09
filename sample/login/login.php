<?php
include "config.php";



    $uname = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];

//echo "Hi ".$uname."Your pass is:".$password."<br>";
    if ($uname != "" && $password != ""){

        //$sql_query = "select * from registraion where Email='$_POST[txt_uname]' and Pass='$_POST[txt_pwd]'";
        mysqli_query($con, "SELECT * FROM registration WHERE Email='$uname' AND Pass='$password'");
		//echo "uname Again".$uname."Your pass".$password;
		$count=mysqli_affected_rows($con);
		echo "Affected rows: " . $count;
		


       if($count > 0){
           //$_SESSION['uname'] = $uname;
		   echo "Welcome ".$uname;
            //header('Location: home.php');
        }else{
            echo "Invalid username and password";
       }

    }


?>
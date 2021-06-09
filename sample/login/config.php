
<?php
 //Connect to database
 //session_start();
 
 $USER     = "root";
 $PASSWORD = "";
 $DBNAME   = "hotel";
 $con = mysqli_connect("localhost", $USER, $PASSWORD, $DBNAME)
            or die("mySQL server connection failed");
?>
<?php
  session_start();
  $servername = "localhost"; //change this  accordingly
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "hostel";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
   //disabling null errors
   ini_set('display_errors', 0);
 ini_set('display_startup_errors', 0);

//disabling direct accessing page through url without logging in
  if(!$_SESSION['loggedIn']){
    //allow
      //redirect to the login page
      header('Location: error.php');
  }
      

if(time() - $_SESSION['timestamp'] > 900) { //subtract new timestamp from the old one
    // echo"<script>alert('15 Minutes over!');</script>";
    header("Location:includes/logout.inc.php");
} else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
   
?>
 
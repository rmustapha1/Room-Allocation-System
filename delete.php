<?php 
$id = $_GET['id'];
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
//sql to delete a record
   $query7 = "SELECT * FROM Student WHERE Student_id = '$id'";
   $result7 = mysqli_query($conn,$query7);
   $row7 = mysqli_fetch_assoc($result7);
   	$number = $row7['Mob_no'];
     $student_n = $row7['Fname'];
	error_reporting(0);

	$key ="sS4WwBPm47oTTXXB7c02kNOVm";
	$to ="$number";
	$msg ="Dear $student_n, your hostel room application has been cancelled due to unavailabilty of rooms or room  type . Kindly login to apply for a different room type.";
	$sender_id ="HMS-TaTU";//11 characters maximum

				//encode the message
	$msg = urlencode($msg);

				//prepare your url
	$url = "https://apps.mnotify.net/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender_id";

	$response = file_get_contents($url);

	echo "<script type='text/javascript'>alert($response)</script>";
	if ($response) {

    $sql = "DELETE FROM Application WHERE Student_id = $id";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
 	$_SESSION['deleted'] = true;
 	header('location: allocate_room.php');
 	exit();
 	// else{
 	// 	header("location: allocate_room.php?error=deletefailed");
 	// }
 }
 ?>
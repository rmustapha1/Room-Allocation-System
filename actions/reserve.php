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
   $sql = "UPDATE room SET Reserve = '1' WHERE Room_id = '$id'";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
 	
 	echo "<script>alert('Room reserved Successfully')</script>";
    echo "<script>window.location.href='../empty_rooms.php'</script>";
 	exit();
 	// else{
 	// 	header("location: empty_rooms.php?error=deletefailed");
 	// }
 ?>

<?php
include '../includes/config.inc.php';
if(isset($_POST['submit'])){

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

   //Defining Hostel id
   $hostel_id = $_SESSION['hostel_id'];
   $query1 = "SELECT * FROM Application where Hostel_id = '$hostel_id' and Application_status = '1'";
   $result1 = mysqli_query($conn,$query1);
   //select the hostel name from hostel table
   $query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
   $result6 = mysqli_query($conn,$query6);
   $row6 = mysqli_fetch_assoc($result6);
   $hostel_name = $row6['Hostel_name'];

    //Defining student Id 
   $row1 = mysqli_fetch_assoc($result1);
  $student_id = $row1['Student_id']; 
  $room_type = $row1['Room_Type']; 
          $query7 = "SELECT * FROM Student WHERE Student_id = '$student_id'";
            $result7 = mysqli_query($conn,$query7);
            $row7 = mysqli_fetch_assoc($result7);
            $student_name = $row7['Fname']." ".$row7['Lname'];

   
   // $result1 = mysqli_query($conn,$query1);
   
   /*echo "<script type='text/javascript'>alert('<?php echo $room_no ?>')</script>";*/
   // while($row1 = mysqli_fetch_assoc($result1)){
         //find the minimum room number
     $query2 = "SELECT * FROM Room where Room_No = (SELECT MIN(Room_No) FROM Room where Allocated = '0' and Room_type = '$room_type' and Reserve = '0' and Hostel_id = '$hostel_id')";

  
     $result2 = mysqli_query($conn,$query2);
     if(!$result2){
     	   echo "<script type='text/javascript'>alert('Rooms not available')</script>";
     	   exit();
     }
     else{

     $row2 = mysqli_fetch_assoc($result2);
     $room_no = $row2['Room_No'];
     var_dump($room_no);
  exit();
     if (!$room_no) {
     	// echo "<script type='text/javascript'>alert('Rooms not available')</script>";
       // header('location: ../allocate_room.php');
      $_SESSION['noroom'] = true;
      $_SESSION['msg'] = 'Rooms not Available';
       header('location: ../allocate_room.php'); 
     }
     else{
     $student_id = $_POST['student_no'];
     $query3 = "UPDATE Application SET Application_status = '0',Room_No = '$room_no' WHERE Student_id = '$student_id'";
     $result3 = mysqli_query($conn,$query3);
     /*echo "<script type='text/javascript'>alert('<?php echo $result3; ?>')</script>";*/
     if($result3){
     	$room_id = $row2['Room_id'];
     	$query4 = "UPDATE Student SET Hostel_id = '$hostel_id',Room_id = '$room_id' WHERE Student_id = '$student_id'";
     	$result4 = mysqli_query($conn,$query4);
     	
     	if($result4){
     		$query5 = "UPDATE Room SET Allocated = '1' where Room_id = '$room_id'";
     		$result5 = mysqli_query($conn,$query5);
     		
     			if($result5){
     				$number = $row7['Mob_no'];
     				$student_n = $row7['Fname'];
     				$floor = $row2['Floor'];
				 error_reporting(0);

				$key ="sS4WwBPm47oTTXXB7c02kNOVm";
				$to ="$number";
				$msg ="Dear $student_n, your hostel room application has been proccessed successfully. Your Room Number is: $room_no, Room Id is: $room_id, Room Type is: $room_type, and Floor is: $floor. Kindly login to your HMS account for more info.";
				$sender_id ="HMS-TaTU";//11 characters maximum

				//encode the message
				$msg = urlencode($msg);

				//prepare your url
				$url = "https://apps.mnotify.net/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender_id";

				$response = file_get_contents($url);
				echo "<script type='text/javascript'>alert($response)</script>";
     				
     		    echo "<script type='text/javascript'>alert('Rooms Allocated Successfully')</script>";
                header('location: ../allocate_room.php?roomallocate=success');	
     		}
     	}
     	else{
     		echo "<script type='text/javascript'>alert('Failed to allocate Rooms')</script>";
            header('location: ../allocate_room.php?roomallocate=failure');
     	}
     }
     else{
     	echo "<script type='text/javascript'>alert('Failed to allocate Rooms')</script>";
        header('location: ../allocate_room.php?roomallocate=failed');
     }

   }
}

     }

     
   
// }
?>
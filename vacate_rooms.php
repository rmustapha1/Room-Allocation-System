<?php
  require 'includes/config.inc.php';
?>



<?php
     $hostel_id = $_SESSION['hostel_id'];
     $roll = $_GET['sid'];
     // $room_number =(int)$_POST['room_no'];
     $room_id =$_GET['id'];

    	$query4 = "UPDATE student SET Hostel_id = NULL, Room_id = NULL WHERE Student_id = '$roll'";
    	$result4 = mysqli_query($conn,$query4);
    	if($result4){
    		$query5 = "UPDATE room SET Allocated = '0' WHERE Room_id = '$room_id'";
    		$result5 = mysqli_query($conn,$query5);
    		if($result5){
    			$query6 = "DELETE FROM application WHERE Student_id = '$roll'";
    			$result6 = mysqli_query($conn,$query6);
    			if($result6){
    			$query77 = "DELETE FROM guest WHERE Student_id = '$roll'";
    				$result77 = mysqli_query($conn,$query77);
    			   if ($result77) {
    			   	$query_msg = "DELETE FROM message WHERE sender_id = '$roll' and receiver_id = '$roll'";
    				$result_msg = mysqli_query($conn,$query_msg);
    			        }

    			      
    			      if ($result_msg) {  
    			   	$number = $row3['Mob_no'];
     				$student_n = $row3['Fname'];
				 error_reporting(0);

				$key ="YOUR_API";
				$to ="$number";
				$msg ="Dear $student_n, as the academic year has ended, your room has obviously been vacated for the year. To apply for the next Academic Year, Click here. ";
				$sender_id ="YOUR_SENDER_API";//11 characters maximum

				//encode the message
				$msg = urlencode($msg);

				//prepare your url
				$url = "https://apps.mnotify.net/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender_id";

				$response = file_get_contents($url);
				         echo "<script>alert($response)</script>";
    			   		 echo "<script>alert('Vacated Successfully')</script>";
    			   		 echo "<script>window.location.href='allocated_rooms.php'</script>";
    			   	}	
    			}
    			
    		}
    	}


?>


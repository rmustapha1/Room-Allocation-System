<?php

if (isset($_POST['add_guest_submit'])) {

  require 'config.inc.php';

  $gname= $_POST['gname'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $timein = $_POST['time_in'];
  $timeout= $_POST['time_out'];
  $student_id = $_POST['student_id'];
  $hostel_id = $_SESSION['hostel_id'];
  

 $sql = "SELECT Student_id FROM Student WHERE Student_id=? and Hostel_id = '$hostel_id'";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){

      echo "<script>alert('SQL ERROR')</script>";
      echo "<script>window.location.href='../visitor.php'</script>";
      
      exit();
      
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $student_id);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
       
      if ($resultCheck < 1) {
        echo "<script>alert('Student does not exist')</script>";
      echo "<script>window.location.href='../visitor.php'</script>";
      }


     
            $sql = "INSERT INTO Guest (Guest_name, Mob_no, Day, Time_in, Time_out, Student_id, Hostel_id) VALUES ('$gname', '$phone', '$date', '$timein', '$timeout', '$student_id', '$hostel_id')";
          $result = mysqli_query($conn, $sql);
          if($result){
            echo "<script>alert('Guest Added Successfully')</script>";
            echo "<script>window.location.href='../visitor.php'</script>";
          }
          else {
            echo "<script>alert('Failed to add Guest')</script>";
            echo "<script>window.location.href='../visitor.php'</script>";
          }

           }
  
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}

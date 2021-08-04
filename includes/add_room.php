<?php

if (isset($_POST['add_room_submit'])) {

  require 'config.inc.php';

  $room_no= $_POST['room_no'];
  $room_type = $_POST['room_type'];
  $floor = $_POST['floor'];
  $price = $_POST['price'];
  $hostel_id = $_SESSION['hostel_id'];


 

    $sql = "SELECT Room_No FROM Room WHERE Room_No=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      echo "<script>alert('SQL ERROR')</script>";
            echo "<script>window.location.href='../room.php'</script>";
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $room_no);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        echo "<script>alert('Room Already Exists')</script>";
        echo "<script>window.location.href='../room.php'</script>";
        exit();
      }
      else {
            $sql = "INSERT INTO Room (Hostel_id, Room_No, Allocated, Room_type, Floor, Price, Reserve) 
            VALUES ('$hostel_id', '$room_no', '', '$room_type', '$floor', '$price', '')";
          $result = mysqli_query($conn, $sql);
          if($result){
            echo "<script>alert('Room Added Successfully')</script>";
            echo "<script>window.location.href='../room.php'</script>";
          }
          else {
            echo "<script>alert('Failed to add room')</script>";
            echo "<script>window.location.href='../room.php'</script>";



      }
    }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  }
}


// else {
//   header("Location: ../room.php");
//   exit();
// }

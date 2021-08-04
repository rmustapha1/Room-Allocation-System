<?php 

if (isset($_POST['add_hostel_submit'])) {

  require 'config.inc.php';

 $hostel_name = $_POST['hname'];
  $hostel_room = $_POST['hroom'];
  $Username = $_SESSION['username'];
  $Adminpassword = $_POST['pass'];

 
    $sql = "SELECT Hostel_name FROM Hostel WHERE Hostel_name=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      echo "<script>alert('SQL ERROR')</script>";
      echo "<script>window.location.href='../admin/new_hostel.php'</script>";
      exit();
    
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $hostel_name);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        echo "<script>alert('Hostel Already Exists')</script>";
      echo "<script>window.location.href='../admin/new_hostel.php'</script>";
        exit();
      }
     else {
     	 $pwdCheck = "SELECT * FROM Hostel_Manager WHERE Username = '$Username' AND Pwd = '$Adminpassword'";
       $pwdresult = mysqli_query($conn, $pwdCheck);
    $row = mysqli_fetch_assoc($pwdresult);
 
    if (!$row) {
      echo "<script>alert('Incorrect Password')</script>";
      echo "<script>window.location.href='../admin/new_hostel.php'</script>";
      exit();
    }
    else {
            $hostelsql = "INSERT INTO Hostel (Hostel_name, current_no_of_rooms, No_of_rooms, No_of_students) VALUES ('$hostel_name', 'NULL', '$hostel_room', 'NULL')";

          $hostelresult = mysqli_query($conn, $hostelsql);
          if($hostelresult){
           echo "<script>alert('Hostel added Successfully')</script>";
      echo "<script>window.location.href='../admin/new_hostel.php'</script>";
          }
          else {
            echo "<script>alert('Failed to add Hostel')</script>";
      echo "<script>window.location.href='../admin/new_hostel.php'</script>";
          }


      }
    }
}
  
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
 exit();
 ?>
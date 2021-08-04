<?php

if (isset($_POST['hm_remove_submit'])) {

  require 'config.inc.php';

  $username = $_POST['hm_uname'];
  $hostel_name = $_POST['hostel_name'];
  $Adminpassword = $_POST['pass'];

  
      $sql = "SELECT *FROM Hostel_Manager WHERE Username = '$username'";
      $result = mysqli_query($conn, $sql);
      if($row = mysqli_fetch_assoc($result)){

      $sql2 = "SELECT *FROM Hostel WHERE Hostel_name = '$hostel_name'";
      $result2 = mysqli_query($conn, $sql2);
      if($row2 = mysqli_fetch_assoc($result2)){
        $HNO = $row2['Hostel_id'];
        if ($HNO == $row['Hostel_id']) {
         $pwdCheck = "SELECT * FROM Hostel_Manager WHERE Username = 'admin' AND Pwd = '$Adminpassword'";
       $pwdresult = mysqli_query($conn, $pwdCheck);
    $pwdrow = mysqli_fetch_assoc($pwdresult);
          if (!$pwdrow) {
            echo "<script>alert('Incorrect Password')</script>";
            echo "<script>window.location.href='../admin/create_hm.php'</script>";
            exit();
          }
          else {
            $sql3 = "DELETE FROM Hostel_Manager WHERE Username = '$username'";
            $result3 = mysqli_query($conn, $sql3);
            if($result3){
             echo "<script>alert('Hostel Manager deleted Successfully')</script>";
             echo "<script>window.location.href='../admin/create_hm.php'</script>";
              exit();
            }
            else {
              echo "<script>alert('Failed to delete Manager')</script>";
              echo "<script>window.location.href='../admin/create_hm.php'</script>";
              exit();
            }
          }
        }
        else {
          echo "<script>alert('Wrong Hostel name')</script>";
          echo "<script>window.location.href='../admin/create_hm.php'</script>";
          exit();
        }
      }
      else {
        echo "<script>alert('Hostel name does not exist')</script>";
    echo "<script>window.location.href='../admin/create_hm.php'</script>";
        exit();
      }

    }

}
else {
  header("Location: ../admin/create_hm.php");
  exit();
}


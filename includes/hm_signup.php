<?php

if (isset($_POST['hm_signup_submit'])) {

  require 'config.inc.php';
  require 'functions.php';

  
  $fname = $_POST['hm_fname'];
  $lname = $_POST['hm_lname'];
  $mobile = $_POST['hm_mobile'];
  $hostel_name = $_POST['hostel_name'];
  $email = $_POST['Email'];
  $username= randomUsername("$fname $lname");
  $password = randomPassword(10);


          $sql = "SELECT *FROM Hostel WHERE Hostel_name = '$hostel_name'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
            $HostelID = $row['Hostel_id'];
            $zz = 0;
            $sql1=mysqli_query($conn, "select * from hostel_manager where Hostel_id ='$HostelID' and Isadmin='$zz'");
            // $row1=mysqli_fetch_assoc($sql1);
            if(mysqli_num_rows($sql1) == 0) {
            
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            $sql2 = "INSERT INTO Hostel_Manager (Username, Fname, Lname, Mob_no, Hostel_id, Email, Pwd, Isadmin) VALUES ('$username', '$fname', '$lname', '$mobile', '$HostelID', '$email', '$hashedPwd', '$zz')";
          $result2 = mysqli_query($conn, $sql2);
          if($result2){
            echo "<script>alert('Hostel Manager Added Successfully')</script>";
            echo "<script>alert('Username: $username and Password: $password')</script>";
            echo "<script>window.location.href='../admin/create_hm.php'</script>";
          }
          else {
            echo "<script>alert('Hostel Already Has Manager')</script>";
            echo "<script>window.location.href='../admin/create_hm.php'</script>";
          }

          //  exit();
          }
          else {
            echo "<script>alert('Hostel Already Has Manager')</script>";
            echo "<script>window.location.href='../admin/create_hm.php'</script>";
            exit();
          }


      }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

// else {
//   header("Location: ../admin/create_hm.php");
//   exit();
// }

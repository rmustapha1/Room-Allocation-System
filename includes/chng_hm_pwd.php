<?php 

if (isset($_POST['chng_pwd_submit'])) {
  
    require 'config.inc.php';

 $old_pass = $_POST['old_pwd'];
  $new_pass = $_POST['new_pwd'];
  $cnf_pass = $_POST['cn_pwd'];
  $id= $_GET['id'];

if ($id) {
     $sql = "SELECT Pwd FROM Hostel_Manager WHERE Hostel_man_id='$id'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);
    if(!$result){
      header("Location: ../changepwd.php?error=sqlerror");
      exit();
   }
   else if($new_pass !== $cnf_pass){
    // header("Location: ../change_pwd.php?error=newpassnotmatch");
    $_SESSION['error1'] = true;
    $_SESSION['msg1'] = 'New password does not match!!';
    header("Location: ../changepwd.php");
    exit();
  }
    else {
      $sql = "SELECT * FROM Hostel_manager WHERE Hostel_man_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $pwdCheck = password_verify($old_pass, $row['Pwd']);
      if($pwdCheck == false){
        // header("Location: ../change_pwd.php?error=wrongoldpwd");
        $_SESSION['error2'] = true;
        $_SESSION['msg2'] = 'Old password is wrong!!';
        header("Location: ../changepwd.php");
        exit();
      }
         else if($pwdCheck == true){
          $hashedPwd = password_hash($new_pass, PASSWORD_DEFAULT);
             $sql2 = "UPDATE Hostel_manager SET Pwd= '$hashedPwd' WHERE Hostel_man_id = '$id'";
             
             $result2 = mysqli_query($conn,$sql2);
             if ($result2) {
              // header("Location: ../change_pwd.php?changepass=success");
              $_SESSION['error3'] = true;
              $_SESSION['msg3'] = 'Password has changed successfully!!';
              header("Location: ../changepwd.php?changepass=success");
             }
    }
  else{
       header("Location: changepwd.php?changepass=failure");
     }
       }
   }
   }
 ?>
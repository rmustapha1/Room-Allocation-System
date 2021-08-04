<?php 
if (isset($_POST['chng_pwd_submit'])) {
	
	  require 'config.inc.php';

  $old_pass = $_POST['old_pwd'];
  $new_pass = $_POST['new_pwd'];
  $cnf_pass = $_POST['cn_pwd'];
  $student_id = $_SESSION['roll'];

    $sql_st = "SELECT Pwd FROM Student WHERE Student_id='$student_id'";
    $query_st = mysqli_query($conn,$sql_st);
    $result_st = mysqli_fetch_assoc($query_st);
    if(!$result_st){
      header("Location: ../change_pwd.php?error=sqlerror");
      exit();
   }
   else if($new_pass !== $cnf_pass){
    // header("Location: ../change_pwd.php?error=newpassnotmatch");
    $_SESSION['error1'] = true;
    $_SESSION['msg1'] = 'New password does not match!!';
    header("Location: ../change_pwd.php");
    exit();
  }
    else {
      $sql_st1 = "SELECT * FROM Student WHERE Student_id = '$student_id'";
    $result_st1 = mysqli_query($conn, $sql_st1);
    if($row_st1 = mysqli_fetch_assoc($result_st1)){
      $pwdCheck = password_verify($old_pass, $row_st1['Pwd']);
      if($pwdCheck == false){
        // header("Location: ../change_pwd.php?error=wrongoldpwd");
        $_SESSION['error2'] = true;
        $_SESSION['msg2'] = 'Old password is wrong!!';
        header("Location: ../change_pwd.php");
        exit();
      }
         else if($pwdCheck == true){
          $hashedPwd = password_hash($new_pass, PASSWORD_DEFAULT);
             $sql_st2 = "UPDATE Student SET Pwd= '$hashedPwd' WHERE Student_id = '$student_id'";
             
             $result_st2 = mysqli_query($conn,$sql_st2);
             if ($result_st2) {
              // header("Location: ../change_pwd.php?changepass=success");
              $_SESSION['error3'] = true;
              $_SESSION['msg3'] = 'Password has changed successfully!!';
              header("Location: ../change_pwd.php?changepass=success");
             }

              else{
             	header("Location: ../change_pwd.php?changepass=failure");
             }
         }

    }
	   }
      }
      


 ?>
<?php

if (isset($_POST['login-submit'])) {
 
  require '../admin/config.inc.php';
  $username = $_POST['username'];
  $password = $_POST['pwd'];
    

    $sql =mysqli_query($conn, "select * from hostel_manager where Username='$username'");
    $row =mysqli_fetch_assoc($sql);
    $pwdCheck = password_verify($password, $row['Pwd']);
    if ($pwdCheck == true) {
     session_start();
        $_SESSION['loggedIn'] = true; 
        $_SESSION['timestamp'] = time();
        $_SESSION['hostel_man_id'] = $row['Hostel_man_id'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
        $_SESSION['mob_no'] = $row['Mob_no'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['hostel_id'] = $row['Hostel_id'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['isadmin'] = $row['Isadmin'];

       if($_SESSION['isadmin']==0){
          header("Location: ../home_manager.php?login=success");
        }
        else {
          header("Location: ../admin/admin_home.php?login=success");
        }
        exit();
    }
       


      else{
           $sql1 = "SELECT *FROM Student WHERE Student_id = '$username'";
    $result1 = mysqli_query($conn, $sql1);
    if($row1 = mysqli_fetch_assoc($result1)){
      $pwdCheck1 = password_verify($password, $row1['Pwd']);
      if($pwdCheck1 == false){ 
        $_SESSION['pwdCheck'] = true;
        $_SESSION['msg'] = 'Incorrect Username or Password';
        header("Location: ../index.php");
        exit();
      }
      else if($pwdCheck1 == true) {

        //session_start();
          //set the session on the login page
        $_SESSION['loggedIn'] = true; 
        $_SESSION['timestamp'] = time();
        $_SESSION['roll'] = $row1['Student_id'];
        $_SESSION['fname'] = $row1['Fname'];
        $_SESSION['lname'] = $row1['Lname'];
        $_SESSION['dob'] = $row1['DoB'];
        $_SESSION['sex'] = $row1['Sex'];
        $_SESSION['nation'] = $row1['Nationality'];
        $_SESSION['hmtown'] = $row1['H_town'];
        $_SESSION['hmaddress'] = $row1['H_address'];
        $_SESSION['mob_no'] = $row1['Mob_no'];
        $_SESSION['department'] = $row1['Dept'];
        $_SESSION['year_of_study'] = $row1['Year_of_study'];
        $_SESSION['ename'] = $row1['Emeg_name'];
        $_SESSION['erelationship'] = $row1['Emeg_relationship'];
        $_SESSION['econtact'] = $row1['Emeg_contact'];
        $_SESSION['hostel_id'] = $row1['Hostel_id'];
        $_SESSION['room_id'] = $row1['Room_id'];
        // if(isset($_SESSION['department'])){
        //   echo "<script type='text/javascript'>alert('Set')</script>";
        // }
        // else {
        //   echo "<script type='text/javascript'>alert('Not SET')</script>";
        // }
        //echo $_SESSION['lname'];
        header("Location: ../home.php?login=success");
        //exit();
      }
    }
        else{
          $_SESSION['pwdCheck1'] = true;
          $_SESSION['msg1'] = 'Incorrect Username or Password';
          header("Location: ../index.php");
        exit();
        }

      }
    
  }
  else {
  header("Location: ../index.php");
  exit();
}
  
    


    





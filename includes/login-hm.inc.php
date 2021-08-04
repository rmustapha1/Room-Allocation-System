
<?php

if (isset($_POST['login-submit'])) {

  require 'admin/config.inc.php';

  $roll = $_POST['student_roll_no'];
  $password = $_POST['pwd'];

  if (empty($roll) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT *FROM Student WHERE Student_id = '$roll'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = password_verify($password, $row['Pwd']);
      if($pwdCheck == false){
        header("Location: ../index.php?error=wrongpwd");
        exit();
      }
      else if($pwdCheck == true) {

        //session_start();
        $_SESSION['roll'] = $row['Student_id'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
        $_SESSION['dob'] = $row['DoB'];
        $_SESSION['sex'] = $row['Sex'];
        $_SESSION['nation'] = $row['Nationality'];
        $_SESSION['hmtown'] = $row['H_town'];
        $_SESSION['hmaddress'] = $row['H_address'];
        $_SESSION['mob_no'] = $row['Mob_no'];
        $_SESSION['department'] = $row['Dept'];
        $_SESSION['year_of_study'] = $row['Year_of_study'];
        $_SESSION['ename'] = $row['Emeg_name'];
        $_SESSION['erelationship'] = $row['Emeg_relationship'];
        $_SESSION['econtact'] = $row['Emeg_contact'];
        $_SESSION['hostel_id'] = $row['Hostel_id'];
        $_SESSION['room_id'] = $row['Room_id'];
        if(isset($_SESSION['department'])){
          echo "<script type='text/javascript'>alert('Set')</script>";
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
        //echo $_SESSION['lname'];
        header("Location: ../home.php?login=success");
        //exit();
      }
      else {
        header("Location: ../index.php?error=strangeerr");
        exit();
      }
    }
    else{
      header("Location: ../index.php?error=nouser");
      exit();
    }
  }

}
else {
  header("Location: ../index.php");
  exit();
}

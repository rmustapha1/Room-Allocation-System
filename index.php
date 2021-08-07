<?php require 'admin/config.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>HMS Login</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta name="keywords" content="An Online Room Allocation System Of Tamale Technical University(TaTU) Hostel." />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>
<style type="text/css">
    body{
        background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(web_home/images/g3.jpg) no-repeat 0px 0px; 
        background-size: cover;
        min-height: 100vh;
    }
</style>

<body style="">
    <h1>Room Allocation System-TaTU Hostel</h1>
    <div class=" w3l-login-form">
        <h2 class="mb-sm-5 mb-4">LOGIN</h2>
        <div  style="color: red;"><p><?php if (isset($_SESSION['pwdCheck'])) {
             $msg = $_SESSION['msg'];
        } echo $msg; ?><?php if( isset($_SESSION['pwdCheck1'])){
            $msg1 = $_SESSION['msg1'];
        } echo $msg1; ?></p></div>
        <!-- <div  style="color: green;"><p></p></div> -->
        
        <form action="includes/login.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="login-submit">Login</button>
        </form>
          <!-- <p class=" w3l-register-p">Login as<a href="login-hostel_manager.php" class="register"> Hostel-Manager/Admin</a></p> -->
        <p class=" w3l-register-p">Don't have an account?<a href="signup.php" class="register"> Sign up</a></p>
    </div>
    <div class="foo">
        <p style="color: #fff;"><?php echo "&copy;" .date("Y")." HMS-Tatu. All Rights Reserved | Design by MTR";  ?></p>
    </div>

</body>

</html>

<?php include 'includes/config.inc.php' ?>
<?php include 'header.php' ?>




<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="codedthemes" />
<!-- Favicon icon -->

<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<!-- Google font-->     
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
<!-- waves.css -->
<link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
<!-- themify-icons line icon -->
<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
<!-- ico font -->
<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<style type="text/css">

body{
font-family: 'Rajdhani', sans-serif;
}
</style>
<body themebg-pattern="theme1">
<!-- Pre-loader end -->
<section class="login-block">
<!-- Container-fluid starts -->
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<form action="includes/signup.inc.php" class="md-float-material form-material" method="post">
<div class="text-center">
<h1 style="color: #fff;">Private Hostel Booking Platform</h1>
</div>
<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-center txt-primary">Sign up</h3>
<p class="text-danger text-center"><i class="fas fa-warning"></i> Notice: Your information provided below will be used to identify and send you SMS and cannot be altered. Kindly provide valid information.</p>
</div>
</div>
<div class="form-group form-primary">
<input type="text" name="roll_no" class="form-control" required="required">
<span class="form-bar"></span>
<label class="float-label">Student ID</label>
</div>
<div class="form-group form-primary">
<input type="text" name="fname" class="form-control" required="required">
<span class="form-bar"></span>
<label class="float-label">Firstname</label>
</div>
<div class="form-group form-primary">
<input type="text" name="lname" class="form-control" required="required">
<span class="form-bar"></span>
<label class="float-label">Lastname</label>
</div>
<div class="form-group form-primary">
<input type="text" name="mobile_no" class="form-control" maxlength="10" pattern="[0-0]{1}[0-9]{2}[0-9]{3}[0-9]{4}" required="required">
<span class="form-bar"></span>
<label class="float-label">Mobile_No.</label>
</div>
<div class="form-group form-primary">
<input type="email" name="email" class="form-control" required="required">
<span class="form-bar"></span>
<label class="float-label">Email Address</label>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group form-primary">
<input type="password" name="pwd" class="form-control" required="required">
<span class="form-bar"></span>
<label class="float-label">Password</label>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-primary">
<input type="password" name="confirmpwd" class="form-control" required="required">
<span class="form-bar"></span>
<label class="float-label">Confirm Password</label>
</div>
</div>
</div>
<div class="row m-t-25 text-left">
<div class="col-md-12">
<div class="checkbox-fade fade-in-primary">
<label>
<input type="checkbox" value="" required="required">
<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
<span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
</label>
</div>
</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="register-submit">Sign up now</button>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-6">
<p class="text-inverse text-left m-b-0">Thank you.</p>
<p class="text-inverse text-left"><a href="index"><b><i class="fas fa-home"></i>Back to website</b></a></p>
</div>
<div class="col-md-6">
<p class="text-inverse text-right m-b-0">Already have an account?</p>
<p class="text-inverse text-right"><a href="signin"><b><i class="fas fa-user"></i>Login</b></a></p>
</div>
</div>
</div>
</div>
</form>
</div>
<!-- end of col-sm-12 -->
</div>
<!-- end of row -->
</div>
<!-- end of container-fluid -->
</section>


<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>     <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>     <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>

<?php include 'includes/config.inc.php' ?>
<?php include 'header.php' ?>




<!DOCTYPE html>
<html lang="en">
<head>
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
<div class="container">
<div class="row">
<div class="col-sm-12">
<!-- Authentication card start -->

<form action="includes/login_inc.php"class="md-float-material form-material" method="post">
<div class="text-center">
<h1 style="color: #fff;">Private Hostel Booking Platform</h1>
</div>
<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-center">Sign In</h3><br>
<?php if ($_SESSION['loginmsg']) { 
?>
<p class="text-danger"><?php echo $_SESSION['loginmsg']; ?></p>
<?php } ?>
<?php if ($_SESSION['timeout']) { 
?>
<p class="text-danger"><?php echo $_SESSION['timeout']; ?></p>
<?php } ?>
<p class="text-danger"><?php if (isset($_SESSION['pwdCheck'])) { echo $_SESSION['msg'];} elseif (isset($_SESSION['nouser'])) {
echo $_SESSION['msg1'];
} ?></p>
</div>
</div>
<div class="form-group form-primary">
<input type="text" name="roll_no" class="form-control" required="required">
<span class="form-bar"></span>
<label class="float-label">Student ID</label>
</div>
<div class="form-group form-primary">
<input type="password" name="pwd" class="form-control" required="required">
<span class="form-bar"></span>
<label class="float-label">Password</label>
</div>
<div class="row m-t-25 text-left">
<div class="col-12">
<div class="forgot-phone text-right f-right">
<a href="#" class="text-right f-w-600"> Forgot Password?</a>
</div>
</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" name="signin-submit">Sign in</button>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-6">
<p class="text-inverse text-left m-b-0">Thank you.</p>
<p class="text-inverse text-left"><a href="index"><b><i class="fas fa-home"></i>Back to website</b></a></p>
</div>
<div class="col-md-6">
<p class="text-inverse text-right m-b-0">Have an account?</p>
<p class="text-inverse text-right"><a href="signup"><b><i class="far fa-user"></i>Create new account</b></a></p>
</div>
</div>
</div>
</div>
</form>
<!-- end of form -->
</div>
<!-- end of col-sm-12 -->
</div>
<!-- end of row -->
</div>
<!-- end of container-fluid -->
</section>
</script>

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

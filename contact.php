<?php include 'includes/config.inc.php';
include 'header.php';
?>


<div class="loader">
<img src="images/logo.png">
</div>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-flex">
<div class="container-fluid">
<a class="navbar-brand logo" href="index">
<img src="images/logo.png" alt="" width="57" height="50">
<p>Private <span>Hostels</span></p>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" aria-current="page" href="index">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" aria-current="page" href="about">About Us</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Hostels<i class="fa fa-chevron-down"></i>
</a>
<?php 
$query_sch1 = mysqli_query($conn, "select * from school");
?>
<ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
<?php while ($row_sch1=mysqli_fetch_assoc($query_sch1)) {
$id=$row_sch1['Campus'];
?>
<li><a class="dropdown-item" href="hostels?id=<?php echo $id; ?>">
<i class="fas fa-chevron-right fa-sm fa-fw mr-2 text-gray-400"></i>
<span>(<?php echo $id; ?>)</span> Hostels</a></li>
<?php } ?>
<li><a class="dropdown-item" href="all_hostels.php"><i class="fas fa-chevron-right fa-sm fa-fw mr-2 text-gray-400"></i>View All Hostels</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="contact">Contact Us</a>
</li>
<?php if ($_SESSION['loggedIn']) {
?>
<li class="nav-item dropdown">
<a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Welcome, <?php echo $_SESSION['fname']; ?><i class="fa fa-chevron-down"></i>
</a>
<ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item" href="profile">
<i class="far fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
Profile</a></li>
<li><a class="dropdown-item" href="changepwd">
<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
Change Password</a></li>
<li><a class="dropdown-item" href="includes/logout_inc.php">
<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
Logout</a></li>
</ul>
</li>
</ul>
<?php } 
else{

?>
<a href="signin"><button class="btn btn-light"><i class="far fa-user"></i>Login/Signup</button></a>
</div>
<?php } ?>
</div>
</nav><br><br>
<!-- header -->
<section id="banner" class="mb-5">
<div class="top-banner mb-5">
<h1>Get In Touch</h1>
<ul>
<li><a class="active" href="index">Home</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</div>
</section>
<section id="contact">
<div class="container">
<div class="page-header">
<h1 class="page-title">Get In Touch</h1>
</div>
<p class="page-content mb-3 mt-3 text-muted">Send us a mail or call our telephone lines for a quick feedback</p>
<div class="row" data-aos="fade-up" data-aos-delay="0">
<div class="col-md-4 info">
<div class="icon mb-5 mt-3">
<i class="fas fa-phone"></i>
</div>
<div class="icon-title mt-3">
<h3>Call Us</h3>
<h4 class="text-muted">0207728823/0240245872</h4>
</div>
</div>
<div class="col-md-4 info">
<div class="icon mb-5 mt-3">
<i class="fas fa-envelope"></i>
</div>
<div class="icon-title mt-3">
<h3>Email</h3>
<h4 class="text-muted">privatehostels@gmail.com</h4>
</div>
</div>
<div class="col-md-4 info">
<div class="icon mb-5 mt-3">
<i class="fas fa-map-marker-alt"></i>
</div>
<div class="icon-title mt-3">
<h3>Find Us</h3>
<h4 class="text-muted">ICT Dept,TaTU.</h4>
</div>
</div>
<div class="col-md-7" data-aos="zoom-in" data-aos-delay="0">
<div class=" contact-form mb-5">
<form action="#" method="POST">
<div class=" form-group mb-3">
<h6 class="text-muted">Name</h6>
<div class="group">
<input type="text" class="form-control" name="name" placeholder="Private Hostel Booking" required="required" />
</div>
</div>
<div class="form-group mb-3">
<h6 class="text-muted">Email</h6>
<div class="group">
<input type="email" class="form-control" name="email" placeholder="privatehostels@gmail.com" required="required" />
</div>
</div>
<div class="form-group mb-3">
<div class="group">
<textarea name="Message" class="form-control" placeholder="Message..." ></textarea>
</div>
</div>
<!--<div class="forgot">
<a href="#">Forgot Password?</a>
<p><input type="checkbox">Remember Me</p>
</div>-->
<button type="submit" class="btn mb-3" name="contact-submit"><i class="fa fa-paper-plane"></i> Submit </button>
</form>
<!-- <p class=" w3l-register-p">Login as<a href="login-hostel_manager" class="register"> Hostel-Manager/Admin</a></p> -->
</div>
</div>


<div class="col-md-5" data-aos="fade-in" data-aos-delay="0">
<div class="map mt-3 mb-5">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3935.8720471753595!2d-0.8680915858925279!3d9.432620285135407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfd43c4a9c677f5f%3A0x12a1546ebc05b18a!2sT-Poly%20Computer%20Science%20Dep&#39;t!5e0!3m2!1sen!2sgh!4v1620549034961!5m2!1sen!2sgh" width="300" height="40" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
</div>
</div>
</section>




<?php include 'footer.php' ?>




<script type="text/javascript">

setTimeout(function(){
$('.loader').fadeToggle();
},2000);
</script>
</body>
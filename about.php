<?php include 'includes/config.inc.php';
include 'header.php';
?>

<div class="loader">
<img src="images/logo.png">
<div></div>
<div></div>
<div></div>
<!-- <div></div>
<div></div>
<div></div> -->
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
<a class="nav-link active" aria-current="page" href="about">About Us</a>
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
<a class="nav-link" aria-current="page" href="contact">Contact Us</a>
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
<h1>About Us</h1>
<ul>
<li><a class="active" href="index">Home</a></li>
<li><a href="#">About us</a></li>
</ul>
</div>
</section>
<section id="about">
<div class="container">
<div class="page-header">
<h1 class="page-title">Overview</h1>
</div>
<div class="row mb-5 mt-3">
<div class="col-lg-4" data-aos="fade-up" data-aos-delay="0">
	<img src="images/4.jpg" width="500" class="img-fluid mb-2 mt-3">
</div>
<div class="col-lg-8" data-aos="fade-down" data-aos-delay="0">
	
	<p class="page-content text-muted" style="letter-spacing: 1px;line-height: 30px;">Hostel Management System is a software developed for managing various activities in the hostel. For the past years the number of educational institutions is increasing rapidly thereby the number of hostels is also increasing for the accommodation of students studying in this institution and hence, there is a lot of strain on the person running the hostels, and software is not usually used in this context.Hostel Management System is a software developed for managing various activities in the hostel. For the past years the number of educational institutions is increasing rapidly thereby the number of hostels is also increasing for the accommodation of students studying in this institution and hence, there is a lot of strain on the person running the hostels, and software is not usually used in this context.Hostel Management System is a software developed for managing various activities in the hostel.</p>
</div>
</div>
</div>
<div class="about mb-5">
	<div class="mission mt-3 mx-5" data-aos="zoom-in" data-aos-delay="0"><br>
		<h3 class="text-center mt-3">Our Mission</h3>
<p class="page-content" style="letter-spacing: 1px;line-height: 30px;">With a mission to provide students to the most affordable top notched private hotels , Private Hostels invests in digital technology that helps ease finding private hostels. At Private Hostels Booking, we connect students with the nation`s most affordable top-class private hostels to stay.
</p>
</div>
<div class="vision mx-5" data-aos="zoom-in" data-aos-delay="0">
	<h3 class="text-center mt-3">Our Vision</h3>
<p class="page-content" style="letter-spacing: 1px;line-height: 30px;">Through Private Hostels, we are committed to offering an informative, user-friendly website with the best rates guaranteed. Our goal is to provide business and students nationwide with a pleasant, efficient and cost-effective way to book private hostels accommodations.
</p>
	</div><br>
</div>	
<div class="container mb-5">
	<div class="page-header">
<h1 class="page-title">Core Values</h1>
</div>
	<p class="page-content text-muted" style="letter-spacing: 1px;line-height: 30px;">
	1. We believe in the power of curiosity, experimentation and continuous learning.<br>
    2. We care more about reaching our success together than our individual goals.<br>
    3. We are humble, open and friendly, knowing our diversity gives us strength.<br>
    4. We embrace the opportunity to improve and understand that success starts with accountability and ownership. <br>
    5. We thrive on change
	</p>
</div>
</section>




<?php include 'footer.php' ?>


<script type="text/javascript">

setTimeout(function(){
$('.loader').fadeToggle();
},0.3000);
</script>
</body>
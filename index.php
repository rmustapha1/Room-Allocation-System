
<?php 
require 'includes/config.inc.php';
?>
<?php include 'header.php';  

?>



<body>
<div class="loader">
<img src="images/logo.png">
</div>   

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-flex">
<div class="container-fluid">
<a class="navbar-brand logo" href="index">
<img src="images/logo.png" alt="" width="57" height="50"><p>Private <span>Hostels</span></p>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="index">Home</a>
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
<a class="nav-link" aria-current="page" href="contact">Contact Us</a>
</li>
<?php if ($_SESSION['loggedIn']) {
$id =$_SESSION['id'];
$query ="SELECT * FROM students WHERE Student_id = '$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$_SESSION['fname'] = $row['Fname'];
$_SESSION['lname'] = $row['Lname'];
$_SESSION['mobile'] = $row['Mob_no'];
$_SESSION['email'] = $row['Email'];
$_SESSION['roomid'] = $row['Room_id'];
$_SESSION['hid'] = $row['Hostel_id'];
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
</nav>

<!-- header -->
<section id="hero">
<div class="container" data-aos="zoom-in" data-aos-delay="200">
<img src="images/logo.png" width="200" height="150">
<h1 class="page-title">Private <span>Hostels</span> Booking</h1>
<p class="mb-3 mt-3">We serve you the most affordable top notched private hotels for your accommodation. Acknowledged the first, most secured and fartest private hostel booking platform in the nation.</p>
<?php if ($_SESSION['loggedIn']) {
?>
<a href="all_hostels" class=" btn btn-primary">View Hostels/Continue</a>
<?php }
else{ ?>
<a href="signin" class="btn btn-grd btn-mat btn-primary">Login/Signup</a>
</div>
<?php } ?>
</section>

<section class="service-card">
<div class="container">
<div class="page-header">
<h1 class="page-title">Getting Started</h1>
</div>
	<h3 class="text-center" style="font-weight: 600;">Enjoy the most affordable firstclass services at our hostels.</h3>
<p class="page-content mb-3 mt-3 text-muted">We serve you the most affordable top notched private hotels for your accommodation. Acknowledged the first, most secured and fartest private hostel booking platform in the nation.</p>
<div class="row" data-aos="fade-up" data-aos-delay="200">
<div class="col-md-4" >
<div class="card mb-5">
<div class="card-body text-center">
<a href="#"><i class="fas fa-book"></i></a>
<h3 class="card-title">Book Room Online</h3>
<p class="card-text">Login or Sign up with your details to book your favourite private hostel around your campus.</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card mb-5">
<div class="card-body text-center">
<a href="#"><i class="far fa-money-bill-alt"></i></a>
<h3 class="card-title">Make Your Payment</h3>
<p class="card-text">Make payment via mobile money within 24 hours after booking and receive an SMS/Receipt.</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card mb-5">
<div class="card-body text-center">
<a href="#"><i class="fas fa-hotel"></i></a>
<h3 class="card-title">Move In</h3>
<p class="card-text">With the aid of your SMS or Receipt, you can pack to your booked room.</p>
</div>
</div>
</div>
</div>
</div>
</section><br><br>

<!-- FAQs -->
<section id="faqs">
<div class="container">
<div class="page-header">
<h1 class="page-title">HOW-TO Guides</h1>
</div>
<p class="page-content mb-3 mt-3 text-muted">Check out some guides you may want to know</p>
</div>
<div class="container" data-aos="fade-up" data-aos-delay="0">
<div class="row">
<div class="accordion mb-5" id="accordionExample">
<div class="accordion-item mb-3">
<h2 class="accordion-header" id="headingOne">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="far fa-question-circle"></i>
How To Book A Room
</button>
</h2>
<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="inner text-muted"><strong>New Users:</strong><br>1. Click on the above <code>login/signup</code> button to create a fresh account. <br>2. Login to your account and click on <code>view hostels/continue</code> <br>3. Select your school to see available hostels and click on preferred one to commence bookings. <br><strong>Already Users:</strong><br>1. Click <code>login/signup</code> button to login your details. <br> 2. Click on <code>view hostels/continue</code> button to select your school. <br>3. In the hostel page select preferred hostel to proceed bookings.</p>
</div>
</div>
</div>
<div class="accordion-item mb-3">
<h2 class="accordion-header" id="headingTwo">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="far fa-question-circle"></i>
How To Make Payments
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="inner text-muted"><code>Note: Payments are made through mobile money and not banks, and should be done within 24hrs after booking a room.</code><br>Details of where to send and how to send the money will be given to you after bookings in a form of receipt. <br><code>Warning: For any inconvenience caused for lately payments(after 24hrs) will not be at our fault. </code></p>
</div>
</div>
</div>
<div class="accordion-item mb-3">
<h2 class="accordion-header" id="headingThree">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="far fa-question-circle"></i>
How To Get Your Room
</button>
</h2>
<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="inner text-muted">After making your payments within 24hrs, send us the message received after the payment through our WhatsApp or Telegram Channel provided at the footer or bottom of our website for confirmation. After we confirm your payments, we will send you a message(SMS) with your room details.<br>Your SMS will be your approved receipt/ticket to enter your room. <br><code>Note: All this should be done within 24hrs.</code></p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingFour">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="far fa-question-circle"></i>
How To Renew Your Room
</button>
</h2>
<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="inner text-muted">Room bookings is done and lasts for only one academic year, therefore various rooms will be vacated or emptied after it ends.<br>To persist, stay or to keep your room or hostel, you need to make a renewal before the end of every academic year. Renewal can be done by; <br>1. Click on the <code>renew room</code> button or move to <code>Quick Links</code> at the footer/bottom of this page and you can find the renew link</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- FAQs end -->



<!-- Universities -->
<section id="school-card">
<?php 
$query_sch = mysqli_query($conn, "select * from school where School_id= '1' or School_id='2' or School_id='3' or School_id='5' or School_id='6' or School_id='7'");
?>
<div class="container">
<div class="page-header">
<h1 class="page-title">Universities / Hostels</h1>
</div>
<p class="page-content mb-3 mt-3 text-muted">Get to Know all our honored Universities and their various Private Hostels in Ghana.</p>
<div class="row" data-aos="zoom-in" data-aos-delay="100">
<?php while ($row_sch=mysqli_fetch_assoc($query_sch)) {
$school_name=$row_sch['School_name'];
$campus=$row_sch['Campus'];
$img=$row_sch['Image'];
?>
<div class="col-md-4 col-sm-6 mb-5">
<div class="card mb-3 d-flex flex-column">
<img src="images/<?php echo $img;?>" class="card-img-top overlay" alt="...">
<div class="card-body text-center">
<h3 class="card-title"><?php echo $school_name;?></h3>
<a href="hostels?id=<?php echo $campus; ?>"><button class="btn btn-light btn-grd btn-mat btn-center py-auto">Veiw Hostels</button></a>
</div>
</div>
</div>
<?php } ?>
<a href="all_hostels"><button class="btn btn-light view mb-5">Click To View All</button></a>
</div>
</div>
</section>
<!-- Universities end -->



<?php include 'footer.php';?>

<script type="text/javascript">

setTimeout(function(){
$('.loader').fadeToggle();
},1000);
</script>
</body>
</html>
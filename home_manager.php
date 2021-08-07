<?php
 require 'includes/config.inc.php';

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> HMS | Index : MTR</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- testimonials css -->
	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->

	<!-- web-fonts -->
	
	<!-- //web-fonts -->

</head>

<body>

<!-- banner -->
	<div class="banner" id="home">
		<div class="cd-radial-slider-wrapper">

<!--Header-->
<header>
	<div class="container agile-banner_nav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<h1><a class="navbar-brand" href="home_manager.php">HMS <span class="display"></span></a></h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="home_manager.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Rooms
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="allocated_rooms.php">Allocated Rooms</a>
							</li>
							<li>
								<a href="empty_rooms.php">Empty Rooms</a>
							</li>
							<li>
								<a href="reserved_rooms.php">Reserved Rooms</a>
							</li>
						</ul>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Add New
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="visitor.php">Add Visitor</a>
							</li>
							<li>
								<a href="room.php">Add Room</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="guest.php">Guests</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact_manager.php">Contact</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Welcome, <?php echo $_SESSION['fname']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="admin/manager_profile.php">My Profile</a>
							</li>
							<li>
								<a href="changepwd.php">Change Password</a>
							</li>
							<li>
								<a href="includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>

		</nav>
	</div>
</header>
<!--Header-->
		</div> <!-- .cd-radial-slider-wrapper -->
	</div><br><br><br><br><br><br><br><br><br>
<!-- //banner -->

<!-- about -->

<section id="dashboard" class="mb-4">
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</h1>
</div>

	<div class="row">
		
<?php
$mid=$_SESSION['hostel_man_id']; 
$hostel_id=$_SESSION['hostel_id']; 
//Total Students
$query= "SELECT * FROM student WHERE Hostel_id='$hostel_id'";
$res = mysqli_query($conn,$query);
$totalstudents=mysqli_num_rows($res);
//Total Rooms
$query1=mysqli_query($conn,"select * from room where Hostel_id='$hostel_id'");
$totalroom=mysqli_num_rows($query1);
//Total Messages
$query2=mysqli_query($conn,"select * from message where receiver_id='$mid' and seen ='1'");
$totalmessage=mysqli_num_rows($query2);
//Total Messages
$query3=mysqli_query($conn,"select * from application where Hostel_id='$hostel_id' and Application_status='1'");
$application=mysqli_num_rows($query3);
// // Empty Rooms
$query4=mysqli_query($conn,"select * from room where Allocated = '0' and Hostel_id='$hostel_id'");
$totalempty_room=mysqli_num_rows($query4);

// // Allotted Rooms
$query5=mysqli_query($conn,"select * from room where Allocated = '1' and Hostel_id='$hostel_id'");
$totalallotted=mysqli_num_rows($query5);

// //Total Guest
$query6=mysqli_query($conn,"select * from guest where Hostel_id='$hostel_id'");
$totalguests=mysqli_num_rows($query6);

// //Total Revenue
$query7=mysqli_query($conn,"select sum(Price) as totalsum from room where Allocated ='1' and Hostel_id='$hostel_id'");
$totalprice=mysqli_fetch_assoc($query7);
$sum= $totalprice['totalsum'];

// //Total Reserved Rooms
$query8=mysqli_query($conn,"select * from room where Reserve ='1' and Hostel_id='$hostel_id'");
$reserved_rooms=mysqli_num_rows($query8);




?>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-primary shadow h-100 py-2">
    		<a href="#">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
Total Students</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalstudents;?></div>
</div>
<div class="col-auto">
<i class="fas fa-users fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-info shadow h-100 py-2">
    		<a href="#">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
Total Rooms</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalroom;?></div>
</div>
<div class="col-auto">
<i class="fas fa-bed fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-warning shadow h-100 py-2">
    		<a href="message_hostel_manager.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
Messages Received</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalmessage;?></div>
</div>
<div class="col-auto">
<i class="fas fa-envelope fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-danger shadow h-100 py-2">
    		<a href="allocate_room.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
New Applications</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $application;?></div>
</div>
<div class="col-auto">
<i class="fas fa-users fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-success shadow h-100 py-2">
    		<a href="empty_rooms.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
Empty Rooms</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalempty_room;?></div>
</div>
<div class="col-auto">
<i class="fas fa-bed fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-warning shadow h-100 py-2">
    		<a href="allocated_rooms.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
Allotted Rooms</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalallotted;?></div>
</div>
<div class="col-auto">
<i class="fas fa-bed fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-primary shadow h-100 py-2">
    		<a href="guest.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
Total Guests</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalguests;?></div>
</div>
<div class="col-auto">
<i class="fas fa-users fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-info shadow h-100 py-2">
    		<a href="#">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
Total Revenue</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $sum;?>.00</div>
</div>
<div class="col-auto">
<i class="fas fa-2x text-gray-300">GH&#8373;</i>
</div>
</div>
</div>
</a>
    	</div>
    </div>

     <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-primary shadow h-100 py-2">
    		<a href="reserved_rooms.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
Reserved Rooms</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $reserved_rooms;?></div>
</div>
<div class="col-auto">
<i class="fas fa-bed fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-info shadow h-100 py-2">
    		<a href="room.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
Add New Room</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">Add</div>
</div>
<div class="col-auto">
<i class="fas fa-plus fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-warning shadow h-100 py-2">
    		<a href="visitor.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
Add New Visitor</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">Add</div>
</div>
<div class="col-auto">
<i class="fas fa-plus fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-danger shadow h-100 py-2">
    		<a href="allocated_rooms.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
Vacate Rooms</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">Vacate</div>
</div>
<div class="col-auto">
<i class="fas fa-times fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
	</div>
</div>
   
</section><br><br><br><br><br><br>

<!-- //about -->

<!-- why choose us -->

<!-- //why choose us -->

<!-- team -->

<!-- //team -->

<!-- Clients -->

<!--// Clients -->

<!-- latest news -->

<!-- //latest news -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="#">HMS</a>
		</div>
			<div class="agileits_w3layouts-copyright mt-4 text-center">
				<p>© 2021 HMS. All Rights Reserved | Design by MTR</p>
		</div>
		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- banner js -->
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //banner js -->

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>

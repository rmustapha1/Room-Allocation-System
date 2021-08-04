<?php

 require '../includes/config.inc.php';
if (!$_SESSION['loggedIn']) {
 	
 	header('Location: ../error.php');
 }
 elseif(time() - $_SESSION['timestamp'] > 900) { //subtract new timestamp from the old one
    // echo"<script>alert('15 Minutes over!');</script>";
    header("Location:../includes/logout.inc.php");
} else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
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

	<link href="../web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- css files -->
	<link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- testimonials css -->
	<link rel="stylesheet" href="../web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->

</head>

<body>

<!-- banner -->
<div class="banner" id="home">
<!--Header-->
<?php include 'header.php' ?><br><br><br>
<!--Header-->
</div><br><br><br><br>
<!-- //banner -->
<section id="dashboard" class="mb-4">
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</h1>
<a href="report.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

	<div class="row">
		
<?php 
//Total Students
$query= "SELECT * FROM student";
$res = mysqli_query($conn,$query);
$totalstudents=mysqli_num_rows($res);
//Total Rooms
$query1=mysqli_query($conn,"select * from room");
$totalroom=mysqli_num_rows($query1);
//Total Hostels
$query2=mysqli_query($conn,"select * from hostel");
$totalhostel=mysqli_num_rows($query2);
// // Total Hostel Managers
$query3=mysqli_query($conn,"select * from hostel_manager where Isadmin='0'");
$totalhm=mysqli_num_rows($query3);
// // Empty Rooms
$query4=mysqli_query($conn,"select * from room where Allocated = '0'");
$totalempty_room=mysqli_num_rows($query4);

// // Allotted Rooms
$query5=mysqli_query($conn,"select * from room where Allocated = '1'");
$totalallotted=mysqli_num_rows($query5);

// //Total Reserved Rooms
$query6=mysqli_query($conn,"select * from guest");
$totalguests=mysqli_num_rows($query6);

// //Total Reserved Rooms
$query7=mysqli_query($conn,"select sum(Price) as totalsum from room where Allocated ='1'");
$totalprice=mysqli_fetch_assoc($query7);
$sum=$totalprice['totalsum'];



?>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-primary shadow h-100 py-2">
    		<a href="students.php">
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
    		<a href="hostel.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
Total Hostels</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalhostel;?></div>
</div>
<div class="col-auto">
<i class="fas fa-home fa-2x text-gray-300"></i>
</div>
</div>
</div>
</a>
    	</div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    	<div class="card border-left-danger shadow h-100 py-2">
    		<a href="managers.php">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
Hostel Managers</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalhm;?></div>
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
    		<a href="visitor.php">
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
	</div>
</div>
</section>
<!-- about -->

<!-- //about -->

<!-- why choose us -->

<!-- team -->

<!-- //team -->

<!-- Clients -->

<!--// Clients -->

<!-- latest news -->

<!-- //latest news -->

<!-- footer -->
<?php include 'admin_footer.php' ?>
<!-- footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- banner js -->
	<script src="../web_home/js/snap.svg-min.js"></script>
	<script src="../web_home/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //banner js -->

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="../web_home/js/jquery.flexslider.js"></script>
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
	<script src="../web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="../web_home/js/move-top.js"></script>
	<script type="text/javascript" src="../web_home/js/easing.js"></script>
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

<?php

 require 'includes/config.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> HMS | Home : MTR</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
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
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all"/> <!-- Style-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- testimonials css -->
	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->

</head>

<body>

<!-- banner -->
	<div class="banner" id="home">

<!--Header-->
	<header>
		<div class="container agile-banner_nav">
					<nav class="navbar navbar-expand-lg navbar-light bg-light" style="top:0;">

			<h1><a class="navbar-brand" href="home.php">HMS <span class="display"></span></a></h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="services.php">Hostels</a>
					</li>

					<li class="dropdown nav-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Pages
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li>
									<a href="single.php">Payment Process</a>
								</li>
								<li>
									<a href="projects.php">Gallery</a>
								</li>
								<li>
									<a href="error.php">Error Page</a>
								</li>
							</ul>
						</li>
					<li class="nav-item">
						<a class="nav-link" href="message_user.php?id=msg">Message Received</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Hi,<?php echo $_SESSION['fname']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="profile.php">My Profile</a>
							</li>
							<li>
								<a href="change_pwd.php">Change Password</a>
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
	</header><br><br>
	<!--Header-->
<!--Header-->
<section>
<div class="cd-radial-slider-wrapper">
	<?php include 'slider.php' ?>
</div> <!-- .cd-radial-slider-wrapper -->
</section>

	</div>

<!-- about -->
<section class="wthree-row py-5" >
	<div class="container py-lg-5 py-sm-3">
		<h3 class="heading text-capitalize mb-sm-5 mb-4"> About us </h3>
		<div class="row d-flex justify-content-center">
			<div class="card col-lg-3 col-md-6 border-0">
				<div class="card-body bg-light pl-0 pr-0 pt-0">
					<h5 class=" card-title titleleft">Nkrumah Hall</h5>
					<p class="card-text mb-3">Hostel Management System is a software developed for managing various activities in the hostel.</p>
				</div>
				<img class="card-img-top" src="web_home/images/img1.jpeg" alt="Card image cap">
			</div>
			<div class="card col-lg-3 col-md-6 border-0 mt-md-0 mt-5">
				<img class="card-img-top" src="web_home/images/img1.jpg " alt="Card image cap ">
				<div class="card-body bg-light text-center">
					<h5 class="card-title pt-3">Pagnaa Hall</h5>
					<p class="card-text mb-3 ">Hostel Management System is a software developed for managing various activities in the hostel.</p>
				</div>
			</div>
			<div class="card col-lg-3 col-md-6 border-0 mt-lg-0 mt-5 ">
				<img class="card-img-top " src="web_home/images/img6.jpg " alt="Card image cap ">
				<div class="card-body bg-light text-center">
					<h5 class="card-title pt-3">Gbadamoshie Hall</h5>
					<p class="card-text mb-3 ">Hostel Management System is a software developed for managing various activities in the hostel.</p>
				</div>
			</div>
			<div class="card col-lg-3 col-md-6 border-0 mt-lg-0 mt-5 text-right">
				<div class="card-body bg-light pl-0 pr-0 pt-0">
					<h5 class="card-title titleright">Gbewaa Hall</h5>
					<p class="card-text mb-3">Hostel Management System is a software developed for managing various activities in the hostel.</p>
				</div>
				<img class="card-img-top " src="web_home/images/img3.jpeg " alt="Card image cap ">
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- counter -->
<div class="services-bottom stats" style="background: url(web_home/images/img9.jpg);background-position: fixed;background-repeat:repeat;">
	<div class="wthree-different-dot1 py-5">
	<div class="container py-lg-5 pb-3">
		<h3 class="heading text-capitalize mb-5"> Our Stats </h3>
		  <div class="row wthree-agile-counter">
		  <div class="col-sm-3 col-6 w3_agile_stats_grid-top">
			<div class="w3_agile_stats_grid">
				<div class="agile_count_grid_left">
				<span class="fas fa-bath" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">324</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>Bathrooms</h4>
			</div>
		</div>
		<div class="col-sm-3 col-6 w3_agile_stats_grid-top">
			<div class="w3_agile_stats_grid">
				<div class="agile_count_grid_left">
					<span class="fab fa-asymmetrik"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">543</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>Chairs and tables</h4>
			</div>
		</div>
		<div class="col-sm-3 col-6 mt-sm-0 mt-5 w3_agile_stats_grid-top">
			<div class="w3_agile_stats_grid">
				<div class="agile_count_grid_left">
					<span class="fas fa-bed" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">434</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>Beds and Matresses</h4>
			</div>
		</div>
		<div class="col-sm-3 col-6 mt-sm-0 mt-5 w3_agile_stats_grid-top">
			<div class="w3_agile_stats_grid">
				<div class="agile_count_grid_left">
					<span class="fab fa-first-order" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">234</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>Furniture</h4>
			</div>
		</div>
		</div>
	</div>
	</div>
</div>
<!-- //counter -->

<!-- about  bottom -->
<section class="wthree-row py-5">
	<div class="container py-3">
		<h3 class="heading text-capitalize mb-5"> History of us</h3>
		<div class="row bottom-grids">
			<div class="col-lg-4 bottom-grid1">
				<h3 class="mb-2">Tamale Technical University</h3>
				<h3> Get-Fund Hostel </h3>
				<p class=""> Hostel Management System is a software developed for managing various activities in the hostel. For the past years the number of educational institutions is increasing rapidly thereby the number of hostels is also increasing for the accommodation of students studying in this institution and hence, there is a lot of strain on the person running the hostels, and software is not usually used in this context.</p> 
			</div>
			<div class="col-lg-4 text-center bottom-grid2">
				<h4>HMS</h4>
			</div>
			<div class="col-lg-4 bottom-grid1"><br>
				<h3>New Hostel</h3>
				<p class="mb-4"> Hostel Management System is a software developed for managing various activities in the hostel. For the past years the number of educational institutions is increasing rapidly thereby the number of hostels is also increasing for the accommodation of students studying in this institution and hence, there is a lot of strain on the person running the hostels, and software is not usually used in this context. </p>
			</div>
		</div>
	</div>
</section>
<!-- //about  bottom -->


<!-- why choose us -->
<!-- team -->


<!-- Clients -->



<!-- footer -->
<?php include 'footer.php' ?>
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
	<!-- stats -->
	<script src="web_home/js/jquery.waypoints.min.js"></script>
	<script src="web_home/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

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
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>

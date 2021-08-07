<!--
	Author: MTR
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

 require 'includes/config.inc.php';

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> HMS | Payment Process : MTR</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="A Room Allocation System Of Tamale Technical University(TaTU) Hostel Online" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	
	<!-- //web-fonts -->
	
</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
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
					<li class="nav-item">
						<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="services.php">Hostels</a>
					</li>

					<li class="dropdown nav-item active">
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
						<a class="nav-link" href="message_user.php">Message Received</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['fname']; ?>
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
	</header>
	<!--Header-->
</div>
<!-- //banner -->    
<!-- //banner --> 
<section class="banner-bottom-w3ls-agileinfo py-5">
		<!--/blog-->
		<div class="container py-md-3">
		<h2 class="heading text-capitalize mb-sm-5 mb-3"> Payment Procedures</h2>
			<div class="row inner-sec-wthree-agileits">
				<div class="col-lg-12 blog-sp">
					<article class="blog-x row">
						<div class="blog-img">
							<a href="#">
								<img src="web_home/images/1.jpg" alt="" class="img-fluid" />
							</a>
						</div>
						<div class="blog_info">
							<h5>
								<a href="#">How to pay hostel fees.</a>
							</h5>

							<p>Hostel Management System is a software developed for managing various activities in the hostel. For the past years the number of educational institutions is increasing rapidly thereby the number of hostels is also increasing for the accommodation of students studying in this institution and hence, there is a lot of strain on the person running the hostels, and software is not usually used in this context. </p>
								<p>Hostel Management System is a software developed for managing various activities in the hostel. For the past years the number of educational institutions is increasing rapidly thereby the number of hostels is also increasing for the accommodation of students studying in this institution and hence, there is a lot of strain on the person running the hostels, and software is not usually used in this context.</p>
								<p>Hostel Management System is a software developed for managing various activities in the hostel. For the past years the number of educational institutions is increasing rapidly thereby the number of hostels is also increasing for the accommodation of students studying in this institution and hence, there is a lot of strain on the person running the hostels, and software is not usually used in this context. </p><br><br>
								<h5>
								<a href="#">Available banks for hostel fees payment.</a>
							</h5>
                                 <p>Hostel Management System is a software developed for managing various activities in the hostel. For the past years the number of educational institutions is increasing rapidly thereby the number of hostels is also increasing for the accommodation of students studying in this institution and hence, there is a lot of strain on the person running the hostels, and software is not usually used in this context. </p>
								<p>Hostel Management System is a software developed for managing various activities in the hostel. For the past years the number of educational institutions is increasing rapidly thereby the number of hostels is also increasing for the accommodation of students studying in this institution and hence, there is a lot of strain on the person running the hostels, and software is not usually used in this context.</p>
								<p>Hostel Management System is a software developed for managing various activities in the hostel. For the past years the number of educational institutions is increasing rapidly thereby the number of hostels is also increasing for the accommodation of students studying in this institution and hence, there is a lot of strain on the person running the hostels, and software is not usually used in this context. </p><br><br>
								<code>NOTE : Kindly submit your payment receipt to your various Hostel Managers for approval and allocation.<br> WARNING : Your application will not be approved without payment.</code>
								
						</div>
						<div class="clearfix"></div>
					</article>


		</div>

	</section>


<!-- footer -->
<?php include 'footer.php' ?>
<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
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
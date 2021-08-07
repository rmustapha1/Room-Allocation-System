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
<title> HMS | Projects : MTR</title>

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

	<!-- gallery css -->
	<link rel="stylesheet" href="web_home/css_home/swipebox.css">
	<!-- //gallery css -->

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

<!--Gallery-->
	<div class="gallery py-5">
		<div class="container py-sm-3">
		<h2 class="heading text-capitalize mb-sm-5 mb-3"> Gallery </h2>
					<div class="row gallery-grids">
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/g1.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/g2.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/g2.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/g3.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/g3.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/g4.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/g4.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/g5.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/g5.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/g6.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/g6.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/g7.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/g8.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/g8.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/g9.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/g9.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/g10.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/g10.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/img1.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img1.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/img.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/img.jpeg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img.jpeg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small wow fadeInUp animated" data-wow-delay=".5s">
							<a href="web_home/images/img1.jpeg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img1.jpeg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small ban-mar wow fadeInUp animated" data-wow-delay=".5s">
							<a href="web_home/images/img3.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img3.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top small ban-mar wow fadeInUp animated" data-wow-delay=".5s">
							<a href="web_home/images/img4.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img4.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top three wow ban-mar fadeInLeft animated gap-w3" data-wow-delay=".5s">
							<a href="web_home/images/img6.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img6.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top three wow ban-mar fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/img7.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img7.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top three thre ban-mar wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/img3.jpeg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img3.jpeg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top three thre ban-mar wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/img5.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img5.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top three thre ban-mar wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/img4.jpeg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img4.jpeg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 ggd baner-top three thre ban-mar wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="web_home/images/img8.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="web_home/images/img8.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>HMS Gallery</h4>
											<span class="separator"></span>
											<p>Enjoy the beauty of our hostel.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
		</div>
	<!-- //gallery -->

<!-- footer -->
<?php include 'footer.php' ?>
<!-- footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- swipe box js -->
	<script src="web_home/js/jquery.swipebox.min.js"></script>
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js -->

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

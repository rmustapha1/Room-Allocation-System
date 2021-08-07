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
<title> HMS | Services : MTR</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="An Online Room Allocation System Of Tamale Technical University(TaTU) Hostel." />
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
					<li class="nav-item ">
						<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item active">
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

<!-- services -->
<section class="services">
	<div class="container py-lg-5 py-3">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Halls </h2>
		<div class="row service-grids">
			<?php 
             $query = "SELECT * FROM Hostel";
             $result = mysqli_query($conn,$query);

             while ($row = mysqli_fetch_assoc($result)){
			 ?>
			 
			<div class=" card shadow mb-3 col-lg-4 col-md-6 service-grid1">
				<div class="card-body">
				<h3><?php echo $row['Hostel_name']; ?></h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>1 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>Room Types</p>
						<p>4 in 1 | GHS 550.00</p>
						<p>6 in 1 | GHS 450.00</p>
					</div>
				</div>
				</div>
			</div>
			 <?php
              } 
              ?>
		</div>
	</div>
</section>
<!-- services -->

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					<div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3> Apply for Gbewaa Hall</h3>
								<p>Gbewaa Hall</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=Gbewaa Hall"><img src="web_home/images/img3.jpeg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for Nkrumah Hall</h3>
								<p>Nkrumah Hall</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=Nkrumah Hall"><img src="web_home/images/img1.jpeg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for Pagnaa Hall</h3>
								<p>Pagnaa Hall</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=Pagnaa Hall"><img src="web_home/images/img1.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view3 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for Gbadamoshie Hall</h3>
								<p>Gbadamoshie Hall</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=Gbadamoshie Hall"><img src="web_home/images/img6.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- banner-bottom -->

<br>
<br>

<div class="banner-bottom">
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					<!--<div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bath" aria-hidden="true"></i>
								<h3> Apply for D-Hostel</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip. Sed semper sem non commodo egestas. In rutrum enim a neque volutpat aliquet</p>
							</div>
							<div class="mask">
								<img src="web_home/images/s1.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>-->
					<!--<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3> Apply for E-Hostel</h3>
								<p>E Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=E"><img src="web_home/images/s2.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for F-Hostel </h3>
								<p>F Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=F"><img src="web_home/images/s3.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>-->
					<!--<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view3 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Office Chairs</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip. Sed semper sem non commodo egestas. In rutrum enim a neque volutpat aliquet</p>
							</div>
							<div class="mask">
								<img src="web_home/images/s4.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>-->
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<!-- team -->

<!-- //team -->

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
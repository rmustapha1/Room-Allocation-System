<!--
	Author: MTR
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

 require '../includes/config.inc.php';
 if (!$_SESSION['loggedIn']) {
 	
 	header('Location: ../error.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> HMS | Contact : MTR</title>
	
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
	<link rel="stylesheet" href="../web_home/css_home/flexslider.css" type="text/css" media="screen" property="" />
	<!-- web-fonts -->
	
	<!-- //web-fonts -->
	
</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
	<!--Header-->
	<?php include 'header.php' ?>
	<!--Header-->
</div>
<!-- //banner --> 

<!-- contact -->
<section class="contact py-5">
	<div class="container">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Contact Us </h2>
		<div class="card shadow mb-4">
  	<div class="card-header py-3 px-3">
  		<h6 class="m-0 font-weight-bold text-primary">Get In Touch</h6>
  	</div>
  	<div class="card-body">
			<div class="mail_grid_w3l">
				<form action="#" method="post">
					<div class="row">
						<div class="col-md-6 contact_left_grid" data-aos="fade-right">
							<div class="contact-fields-w3ls">
								<input type="text" name="Name" placeholder="Name" required="">
							</div>
							<div class="contact-fields-w3ls">
								<input type="email" name="Email" placeholder="Email" required="">
							</div>
							<div class="contact-fields-w3ls">
								<input type="text" name="Telephone" placeholder="Phone Number" required="">
							</div>
							<div class="contact-fields-w3ls">
								<input type="text" name="Subject" placeholder="Subject" required="">
							</div>
						</div>
						<div class="col-md-6 contact_left_grid" data-aos="fade-left">
							<div class="contact-fields-w3ls">
								<textarea name="Message" placeholder="Message..." required=""></textarea>
							</div>
							<input type="submit" value="Submit">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- //contact -->


<!-- footer -->
<?php include 'admin_footer.php' ?>
<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
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
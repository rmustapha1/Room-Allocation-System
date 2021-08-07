<?php

 require 'includes/config.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>User Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Profile Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="web_profile/js/sliding.form.js"></script>
<!-- //js -->
<link href="web_profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="web_profile/css/font-awesome.min.css" />
<link rel="stylesheet" href="web_profile/css/smoothbox.css" type='text/css' media="all" />

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
<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- testimonials css -->
<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
<!-- //testimonials css -->



</head>
<body>
	<!-- banner -->
		<div class="banner" id="home">
			<div class="cd-radial-slider-wrapper">

	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<h1><a class="navbar-brand" href="../home_manager.php">HMS <span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home_manager.php">Home <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item">
						<a class="nav-link" href="allocate_room.php">Allocate Rooms</a>
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
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../contact_manager.php">Contact</a>
					</li>
						<li class="dropdown nav-item">
								<li>
									<a href="includes/logout.inc.php" class="nav-link">Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</div>
	</header>
	<!--Header-->
<br><br><br><br><br>
<body>
       <div class="main">
		<div id="navigation" style="display:none;" class="w3_agile">
			<ul>
				<li class="selected">
					<a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Change</span></a>
				</li>
				<!-- <li>
					<a href="#"><i class="fa fa-close" aria-hidden="true"></i><span>Remove</span></a>
				</li> -->
			</ul>
		</div>
		<div id="navigation" style="display:none;" class="w3_agile">

		</div>
		<div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
			<div id="steps" style="margin:0 auto; width: 100%" class="agileits w3_steps">
				<?php  $id=$_SESSION['hostel_man_id']; ?>
				<form id="formElem" name="formElem" action="includes/chng_hm_pwd.php?id=<?php echo $id; ?>" method="post" class="w3_form w3l_form_fancy">

				<?php if ($_SESSION['error1'] or $_SESSION['error2'] or $_SESSION['error3']) {
					$error1_msg1 = $_SESSION['error1_msg1']; $error2_msg2 = $_SESSION['error2_msg2'] ; $error3_msg3 = $_SESSION['error3_msg3']; }?>

        <fieldset class="step w3_agileits">
          <legend>CHANGE PASSWORD</legend>
            <p style="color: red;"><?php echo $error1_msg1; ?></p>
            <p style="color: red;"><?php echo $error2_msg2; ?></p>
            <p style="color: green;"><?php echo $error3_msg3; ?></p>
            <div class="agilecontactw3ls-grid">
              <div class="agile-con-centre">
                <form action="includes/chng_hm_pwd.php" method="POST">
                  <input type="password" name="old_pwd" placeholder="OLD PASSWORD" required="required">
                  <input type="password" name="new_pwd" placeholder="NEW PASSWORD" required="required">
                  <input type="password" name="cn_pwd" placeholder="CONFIRM NEW PASSWORD" required="required">
                  <div class="send-button text-center" >
                    <input type="submit" name="chng_pwd_submit" value="Change">
                  </div>
                  <hr>
                  <div class="row">
               <div class="col-md-6">
                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                    <p class="text-inverse text-left"><a href="home_manager.php"><b>Go Back</b></a></p>
                 </div>
            </div>
                </form>
              </div>
              <div class="clear"></div>
            </div>
        </fieldset>

				</form>

			</div>
		</div>
		
	</div>
	<script type="text/javascript" src="../web_profile/js/smoothbox.jquery2.js"></script>        
</body>
</html>

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
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="templates/web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="templates/web_profile/js/sliding.form.js"></script>
<!-- //js -->
<link href="templates/web_profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="templates/web_profile/css/font-awesome.min.css" />
<link rel="stylesheet" href="templates/web_profile/css/smoothbox.css" type='text/css' media="all" />

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
					<li class="nav-item">
						<a class="nav-link" href="allocate_room.php">Allocate Rooms</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="message_hostel_manager.php">Messages Received</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="room.php">Add Room</a>
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
 <br><br><br><br>

       <div class="main">
		<div id="navigation" style="display:none;" class="w3_agile">
			<ul>
				<li class="selected">
					<a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Add</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-close" aria-hidden="true"></i><span>Remove</span></a>
				</li>
			</ul>
		</div>
		<div id="navigation" style="display:none;" class="w3_agile">

		</div>
		<div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
			<div id="steps" style="margin:0 auto;" class="agileits w3_steps">
				<form id="formElem" name="formElem" action="includes/add_guest.php" method="post" class="w3_form w3l_form_fancy">
        <fieldset class="step w3_agileits">
          <legend>Add New Guest</legend>
            <div class="agilecontactw3ls-grid">
              <div class="agile-con-centre">
                <form action="includes/add_guest.php" method="POST" autocomplete="on">
                  <input type="text" name="gname" placeholder="GUEST NAME" required="required">
                  <input type="text" name="phone" placeholder="PHONE" required="required">
                  <input type="date" name="date" placeholder="DATE" required="required" style="
	width: 93%;
	padding: 10px;
	border: 1px solid #AFAFAF;
	color: #AFAFAF;
	cursor: pointer;
	text-transform: capitalize;
	outline: none;
	background: transparent;
	border-radius: 0;
	margin-bottom: 20px;
	font-size: 13px;	">
                  <input type="time" name="time_in" placeholder="TIME IN | 00:00am" required="required" style="	width: 93%;
	padding: 10px;
	border: 1px solid #AFAFAF;
	color: #AFAFAF;
	cursor: pointer;
	text-transform: capitalize;
	outline: none;
	background: transparent;
	border-radius: 0;
	margin-bottom: 20px;
	font-size: 13px;">
                  <input type="time" name="time_out" placeholder="TIME OUT | 05:00pm" value="5:00pm"  required="required" style="	width: 93%;
	padding: 10px;
	border: 1px solid #AFAFAF;
	color: #AFAFAF;
	cursor: pointer;
	text-transform: capitalize;
	outline: none;
	background: transparent;
	border-radius: 0;
	margin-bottom: 20px;
	font-size: 13px;">
                  <input type="text" name="student_id" placeholder="STUDENT ID" required="required">
                  <input type="hidden" name="hostel_id" value="<?php echo $_SESSION['hostel_id'] ?>" required="required" disabled = "disabled">
                  <div class="send-button text-center" >
                    <input type="submit" name="add_guest_submit">
                  </div>
                </form>
              </div>
              <div class="clear"></div>
            </div>
        </fieldset>

				</form>
				<form id="formElem" name="formElem" action="includes/remove_guest.php" method="post" class="w3_form w3l_form_fancy">
				<fieldset class="step w3_agileits">
          <legend>Remove Guest</legend>
            <div class="agilecontactw3ls-grid">
              <div class="agile-con-centre">
                <form action="../includes/remove_guest.php" method="POST">
                  <input type="text" name="hname" placeholder="GUEST NAME" required="required">
                  <input type="password" name="pass" placeholder="MANAGER PASSWORD" required="required" style="    width: 93%;
    padding: 10px;
    border: 1px solid #AFAFAF;
    color: #AFAFAF;
    outline: none;
    background: transparent;
    border-radius: 0;
    margin-bottom: 20px;
    font-size: 13px;">
                  <div class="send-button text-center">
                    <input type="submit" name="#">
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

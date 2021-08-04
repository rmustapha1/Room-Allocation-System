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
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="../templates/web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="../text/javascript" src="templates/web_profile/js/sliding.form.js"></script>
<!-- //js -->
<link href="../templates/web_profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../templates/web_profile/css/font-awesome.min.css" />
<link rel="stylesheet" href="../templates/web_profile/css/smoothbox.css" type='text/css' media="all" />

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

	<!-- web-fonts -->
	
	<!-- //web-fonts -->

</head>


<body>
	<style type="text/css">
		.agilecontactw3ls-grid input[type=password]{
				width: 93%;
	padding: 10px;
	border: 1px solid #999;
	color: #999;
	cursor: pointer;
	text-transform: capitalize;
	outline: none;
	background: transparent;
	border-radius: 0;
	margin-bottom: 20px;
	font-size: 13px;
		}

	</style>

<!-- banner -->
	<div class="banner" id="home">
		<div class="cd-radial-slider-wrapper">

<!--Header-->
	<?php include 'header.php' ?>
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
				<form id="formElem" name="formElem" action="../includes/chng_admin_pwd.php?id=<?php echo $id; ?>" method="post" class="w3_form w3l_form_fancy">

				<?php if ($_SESSION['error1'] or $_SESSION['error2'] or $_SESSION['error3']) {
					$msg1 = $_SESSION['msg1']; $msg2 = $_SESSION['msg2'] ; $msg3 = $_SESSION['msg3']; }?>

        <fieldset class="step w3_agileits">
          <legend>CHANGE PASSWORD</legend>
            <p style="color: red;"><?php echo $msg1; ?></p>
            <p style="color: red;"><?php echo $msg2; ?></p>
            <p style="color: green;"><?php echo $msg3; ?></p>
            <div class="agilecontactw3ls-grid">
              <div class="agile-con-centre">
                <form action="../includes/chng_admin_pwd.php" method="POST">
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
                    <p class="text-inverse text-left"><a href="admin_home.php"><b>Go Back</b></a></p>
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

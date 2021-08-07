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
						<a class="nav-link" href="message_user.php">Message Received</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Hi, <?php echo $_SESSION['fname']; ?>
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

<section class="contact py-5">
	<div class="container">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Application Form </h2>
		<div class="card shadow mb-4">
  	<div class="card-header py-3 px-3">
  		<h6 class="m-0 font-weight-bold text-primary">Apply For A Room</h6>
  	</div>
  	<div class="card-body">
			<div class="mail_grid_w3l">
				<form action="application_form.php?id=<?php echo $_GET['id']?>" method="post"class="form-primary">
					<div class="row">
						<div class="col-md-6 contact_left_grid">
							<div class="contact-fields-w3ls">
								<input type="text" name="Name" placeholder="Name" value="<?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>" required="" readonly>
							</div>
							<div class="contact-fields-w3ls">
								<input type="text" name="roll_no" placeholder="Matric Number" value="<?php echo $_SESSION['roll']?>" required="" readonly>
							</div>
							<div class="contact-fields-w3ls">
								<input type="text" name="hostel" placeholder="Hostel" value="<?php echo $_GET['id']?>" required="" readonly>
							</div>
							<div class="contact-fields-w3ls">
								<input type="password" name="pwd" placeholder="Password" required="">
							</div>
						</div>
						<div class="col-md-6 contact_left_grid">
							<div class="contact-fields-w3ls">
								<select name="room_type" required="">
									<option value="4 in 1 Male">4 in 1 Male</option>
									<option value="4 in 1 Female">4 in 1 Female</option>
									<option value="6 in 1 Male">6 in 1 Male</option>
									<option value="6 in 1 Female">6 in 1 Female</option>
								</select>
							</div>
							<div class="contact-fields-w3ls">
								<input type="text" name="mob_no" placeholder="Mobile_no" value="<?php echo $_SESSION['mob_no']; ?>" maxlength="10" pattern="[0-0]{1}[0-9]{2}[0-9]{3}[0-9]{4}" required="">
							</div>
							<div class="contact-fields-w3ls">
								<textarea name="Message" placeholder="Message..." ></textarea>
							</div>
							<input type="submit" name="submit" value="Click to Apply">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	</div>
</section>

<!--footer-->
<?php include 'footer.php' ?>
<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
		
	<!-- stats -->
	<script src="web_home/js/jquery.waypoints.min.js"></script>
	<script src="web_home/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

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

<?php
   //echo 'Hello';
   
   if(isset($_POST['submit'])){
     $roll = $_SESSION['roll'];
     $password = $_POST['pwd'];
     $hostel = $_GET['id'];
     $room_type = $_POST['room_type'];
     $mob_no = $_POST['mob_no'];
     $message = $_POST['Message'];

     

     /*echo "<script type='text/javascript'>alert('<?php echo $roll ?>')</script>";*/
     $query_imp = "SELECT * FROM Student WHERE Student_id = '$roll'";
     $result_imp = mysqli_query($conn,$query_imp);
     $row_imp = mysqli_fetch_assoc($result_imp);
     $room_id = $row_imp['Room_id'];
     /*echo "<script type='text/javascript'>alert('<?php echo $room_id ?>')</script>";*/
     if(is_null($room_id)){
     
     $query_imp2 = "SELECT * FROM Application WHERE Student_id = '$roll'";
     $result_imp2 = mysqli_query($conn,$query_imp2);
     if(mysqli_num_rows($result_imp2)==0){


     $query = "SELECT * FROM Student WHERE Student_id = '$roll'";
     $result = mysqli_query($conn,$query);
     if($row = mysqli_fetch_assoc($result)){
     	$pwdCheck = password_verify($password, $row['Pwd']);
     	
        if($pwdCheck == false){
            echo "<script type='text/javascript'>alert('Incorrect Password!!')</script>";
      }
      else if($pwdCheck == true) {

      	    $query2 = "SELECT * FROM Hostel WHERE Hostel_name = '$hostel'";
      	    $result2 = mysqli_query($conn,$query2);
      	    $row2 = mysqli_fetch_assoc($result2);
      	    $hostel_id = $row2['Hostel_id'];
      	       //select the hostel name from hostel table
            $query = "SELECT * FROM Room WHERE Hostel_id = '$hostel_id'";
            $query_result = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($query_result);
            $room_type = $_POST['room_type']; 
                   
            $query3 = "INSERT INTO Application (Student_id,Hostel_id,Application_status,Message,Mob_no,Room_type) VALUES ('$roll','$hostel_id',true,'$message',$mob_no,'$room_type')";
            $result3 = mysqli_query($conn,$query3);

            if($result3){
            	 echo "<script type='text/javascript'>alert('Application sent successfully')</script>";
            }
      }
     }

     }
     else{
     	echo "<script type='text/javascript'>alert('You have Already applied for a Room')</script>";
     }
    
     }
     else{
          echo "<script type='text/javascript'>alert('You have Already been alloted a Room')</script>";   
      }


}
?>
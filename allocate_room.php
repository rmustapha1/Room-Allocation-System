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
	<!--bootsrap -->

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
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="home_manager.php">HMS<span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home_manager.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
						<a class="nav-link" href="allocate_room.php">Allocate Room</a>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Rooms
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="allocated_rooms.php">Allocated Rooms</a>
							</li>
							<li>
						<a href="message_hostel_manager.php">Messages Received</a>
					</li>
							<li>
								<a href="empty_rooms.php">Empty Rooms</a>
							</li>
								<li>
								<a href="reserved_rooms.php">Reserved Rooms</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact_manager.php">Contact</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['fname']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="admin/manager_profile.php">My Profile</a>
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
<br><br><br>

<section class="contact py-5">
	<div class="container">
			<div class="mail_grid_w3l">
				<form action="allocate_room.php" method="post">
					<div class="row">
					        <div class="col-md-9"> 
							<input type="text" placeholder="Search by Admission|Matric Number" name="search_box">
							</div>
							<div class="col-md-3">
							<input type="submit" value="Search" name="search"></input>
							</div>
					</div>
				</form>
			</div>
	</div>
</section>
<?php
   if (isset($_POST['search'])) {
   	   $search_box = $_POST['search_box'];
   	   /*echo "<script type='text/javascript'>alert('<?php echo $search_box; ?>')</script>";*/
   	   $hostel_id = $_SESSION['hostel_id'];
   	   $query_search = "SELECT * FROM Application WHERE Student_id like '$search_box%' and Hostel_id = '$hostel_id' and Application_status = '1'";
   	   $result_search = mysqli_query($conn,$query_search);

   	   //select the hostel name from hostel table
       $query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
       $result6 = mysqli_query($conn,$query6);
       $row6 = mysqli_fetch_assoc($result6);
       $hostel_name = $row6['Hostel_name'];
   	   ?>
   	   <div class="container">
   	   <div class="card shadow mb-4">
  	<div class="card-header py-3 px-3">
  		<h6 class="m-0 font-weight-bold text-primary">Applications Received</h6>
  	</div>
  	<div class="card-body">     
  <table class="table table-hover table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Hostel</th>
        <th>Number</th>
        <th>Room Type</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </thead>
    <tfoot>
    	<tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Hostel</th>
        <th>Number</th>
        <th>Room Type</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </tfoot>
    <tbody>
    <?php
   	   if(mysqli_num_rows($result_search)==0){
   	   	  echo '<tr><td colspan="4">No Rows Returned</td></tr>';
   	   }
   	   else{
   	   	  while($row_search = mysqli_fetch_assoc($result_search)){
      		//get the name of the student to display
            $student_id = $row_search['Student_id'];
            $room_type = $row_search['Room_Type'];

            $query7 = "SELECT * FROM Student WHERE Student_id = '$student_id'";
            $result7 = mysqli_query($conn,$query7);
            $row7 = mysqli_fetch_assoc($result7);
            $student_name = $row7['Fname']." ".$row7['Lname'];
            ?>
      		<tr>
	      		<td><?php echo $student_name;?></td>
	      		<td><?php echo $row_search['Student_id'];?></td>
	      		<td><?php echo $hostel_name;?></td>
	      		<td><?php echo $row7['Mob_no'];?></td>
	      		<td><?php echo $room_type;?></td>
	      		<td><?php echo $row_search['Message'];?></td>
	      		<td>
	      			<div class="mail_grid_w3l">
				<form action="allocate_room.php" method="post">
					<div class="row"> 
						<input type="hidden" name="student_no" value="<?php echo $row_search['Student_id'];?>">
						<input type="hidden" name="student_name" value="<?php echo $student_name;?>">
						 <input type="hidden" name="room_type" value="<?php echo $room_type;?>">
						 <input type="hidden" name="number" value="<?php echo $row7['Mob_no'];?>">
						<button type="submit" name="submit" class="btn-success">Allocate</button>
						<div class="btn-cancel btn-sm">
							<?php echo "<a href='actions/delete.php?id=".$row_search['Student_id']."'>Cancel</a>" ?>
							
						</div>
						
					</div>
				</form>
			</div>
	      		</td>
	      		<td>
	      			
	      		</td>
	      			
      		</tr>
      	<?php } }?>
   </tbody>
  </table>
</div>
</div>
</div>
<?php
}
  ?>

<div class="container">
<h2 class="heading text-capitalize mb-sm-5 mb-4"> Applications Received </h2>
<?php
   $hostel_id = $_SESSION['hostel_id'];
   $query1 = "SELECT * FROM Application where Hostel_id = '$hostel_id' and Application_status = '1'";
   $result1 = mysqli_query($conn,$query1);
   //select the hostel name from hostel table
   $query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
   $result6 = mysqli_query($conn,$query6);
   $row6 = mysqli_fetch_assoc($result6);
   $hostel_name = $row6['Hostel_name'];

?>
        
  <div class="card shadow mb-4">
  	<div class="card-header py-3 px-3">
  		<h6 class="m-0 font-weight-bold text-primary">Applications Received</h6>
  	</div>
  	<div class="card-body">     
  <table class="table table-hover table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Hostel</th>
        <th>Number</th>
        <th>Room Type</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </thead>
    <tfoot>
    	<tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Hostel</th>
        <th>Number</th>
        <th>Room Type</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </tfoot>
    <tbody>
    <?php
      if(mysqli_num_rows($result1)==0){
         echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }
      else{ 
      	while($row1 = mysqli_fetch_assoc($result1)){
      		//get the name of the student to display
            $student_id = $row1['Student_id']; 
            $room_type = $row1['Room_Type']; 
            $query7 = "SELECT * FROM Student WHERE Student_id = '$student_id'";
            $result7 = mysqli_query($conn,$query7);
            $row7 = mysqli_fetch_assoc($result7);
            $student_name = $row7['Fname']." ".$row7['Lname'];
            ?>
            
      		<tr>
	      		<td><?php echo $student_name;?></td>
	      		<td><?php echo $row1['Student_id'];?></td>
	      		<td><?php echo $hostel_name;?></td>
	      		<td><?php echo $row7['Mob_no'];?></td>
	      		<td><?php echo $room_type?></td>
	      		<td><?php echo $row1['Message'];?></td>
	      		<td>
	      			<div class="mail_grid_w3l">
				<form action="allocate_room.php" method="post">
					<div class="row"> 
						<input type="hidden" name="student_no" value="<?php echo $row1['Student_id'];?>">
						<input type="hidden" name="student_name" value="<?php echo $student_name;?>">
						 <input type="hidden" name="room_type" value="<?php echo $room_type;?>">
						 <input type="hidden" name="number" value="<?php echo $row7['Mob_no'];?>">
						<button type="submit" name="submit" class="btn-success">Allocate</button>
						<div class="btn-cancel btn-sm">
							<?php echo "<a href='actions/delete.php?id=".$row1['Student_id']."'>Cancel</a>" ?>
							
						</div>
						
						
					</div>
				</form>
			</div>
	      		</td>
      		</tr>
      	<?php } }?>
      
     
    </tbody>
  </table>
</div>
</div>
</div>

<?php
if(isset($_POST['submit'])){

$room_type = $_POST['room_type'];

   // $result1 = mysqli_query($conn,$query1);
   
   /*echo "<script type='text/javascript'>alert('<?php echo $room_no ?>')</script>";*/
   // while($row1 = mysqli_fetch_assoc($result1)){
         //find the minimum room number
     $query2 = "SELECT * FROM Room where Room_No = (SELECT MIN(Room_No) FROM Room where Allocated = '0' and Room_type = '$room_type' and Reserve = '0') and Hostel_id = '$hostel_id'";
     
     $result2 = mysqli_query($conn,$query2);
     if(!$result2){
     	   echo "<script type='text/javascript'>alert('Rooms not available')</script>";
     	   echo "<script>window.location.href='../allocate_room.php'</script>";
     	   exit();
     }
     else{

     $row2 = mysqli_fetch_assoc($result2);
     $room_no = $row2['Room_No'];
          if (!$room_no) {
     	echo "<script type='text/javascript'>alert('Rooms not available')</script>";
     	echo "<script>window.location.href='allocate_room.php'</script>";
     }
     else{
     $student_id = $_POST['student_no'];
     $query3 = "UPDATE Application SET Application_status = '0',Room_No = '$room_no' WHERE Student_id = '$student_id'";
     $result3 = mysqli_query($conn,$query3);
     /*echo "<script type='text/javascript'>alert('<?php echo $result3; ?>')</script>";*/
     if($result3){
     	$room_id = $row2['Room_id'];
     	$query4 = "UPDATE Student SET Hostel_id = '$hostel_id',Room_id = '$room_id' WHERE Student_id = '$student_id'";
     	$result4 = mysqli_query($conn,$query4);
     	
     	if($result4){
     		$query5 = "UPDATE Room SET Allocated = '1' where Room_id = '$room_id'";
     		$result5 = mysqli_query($conn,$query5);
     		
     			if($result5){
     				//getting the student name from students table
             $query7 = "SELECT * FROM Student WHERE Student_id = '$student_id'";
            $result7 = mysqli_query($conn,$query7);
            $row7 = mysqli_fetch_assoc($result7);
            //sms implementation starts here
     				$number = $_POST['number'];
     				$student_n =$row7['Fname'];
     				$floor = $row2['Floor'];
				 error_reporting(0);

				$key ="YOUR_API";
				$to ="$number";
				$msg ="Dear $student_n, your hostel room application has been proccessed successfully. Your Room Number is: $room_no, Room Id is: $room_id, Room Type is: $room_type, and Floor is: $floor. Kindly login to your HMS account for more info.";
				$sender_id ="YOUR_SENDER_ID";//11 characters maximum

				//encode the message
				$msg = urlencode($msg);

				//prepare your url
				$url = "https://apps.mnotify.net/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender_id";

				$response = file_get_contents($url);
				echo "<script type='text/javascript'>alert($response)</script>";
     				
     		    echo "<script type='text/javascript'>alert('Room Allotted Successfully')</script>";
     		    echo "<script>window.location.href='allocate_room.php'</script>";
     		}
     	}
     	else{
     		echo "<script type='text/javascript'>alert('Failed to allocate Rooms')</script>";
     		echo "<script>window.location.href='allocate_room.php'</script>";
     	}
     }
     else{
     	echo "<script type='text/javascript'>alert('Failed to allocate Rooms')</script>";
     	echo "<script>window.location.href='allocate_room.php'</script>";
     }

   }
}

     }

     
   
// }
?>

<br>
<br>
<br>

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="#">HMS</a>
		</div>
			<div class="agileits_w3layouts-copyright mt-4 text-center">
				<p>© 2021 HMS. All Rights Reserved | Design by MTR</p>
		</div>
		</div>
	</div>
</footer>
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


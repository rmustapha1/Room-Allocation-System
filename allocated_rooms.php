<?php
  require 'includes/config.inc.php';

  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Allocated Rooms</title>
	
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
	<link rel="stylesheet" href="web_home/css_home/print.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	
	
	<!-- //web-fonts -->
	
</head>


<body>
	<style type="text/css">
	@media print {
   * {
      display: none;

   }
   #allocated_rooms {
      display: block;
   }
   #allocated_rooms .fa{
      font-size: 25px;
      color: red;
   }
   table {
       font-size: 80%;
   }
   table, th, td{
      border-collapse: collapse;
      border: 1px solid black;
      width: 100%;
      text-align: right;
   }
}
</style>

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
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
						<li class="nav-item">
							<a class="nav-link" href="home_manager.php">Home <span class="sr-only">(current)</span></a>
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
							<li>
								<a href="reserved_rooms.php">Reserved Rooms</a>
							</li>
						</ul>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Add New
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="visitor.php">Add Visitor</a>
							</li>
							<li>
								<a href="room.php">Add Room</a>
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

<section class="contact py-5">
	<div class="container">
			<div class="mail_grid_w3l">
				<form action="allocated_rooms.php" method="post">
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
   	   $query_search = "SELECT * FROM student WHERE Student_id like '$search_box%' and Hostel_id = '$hostel_id'";
   	   $result_search = mysqli_query($conn,$query_search);

   	   //select the hostel name from hostel table
       $query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
       $result6 = mysqli_query($conn,$query6);
       $row6 = mysqli_fetch_assoc($result6);
       $hostel_name = $row6['Hostel_name'];
       //select the room type from hostel table
        $query = "SELECT * FROM application WHERE Hostel_id = '$hostel_id' and Application_status = '0'";
   $query_result = mysqli_query($conn,$query);
   $row = mysqli_fetch_assoc($query_result);
   $room_type = $row['Room_Type'];
   	   ?>
   	   <div class="container">
   	   <div class="card shadow mb-4">
  	<div class="card-header py-3 px-3">
  		<h6 class="m-0 font-weight-bold text-primary">Allotted Rooms</h6>
  	</div>
  	<div class="card-body">
  <table class="table table-hover table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Contact Number</th> 
        <th>Hostel</th>
        <th>Room Number</th>
        <th>Room ID</th>
        <th>Room Floor</th>
        <th>Action</th>
      </tr>
    </thead>
    <tfoot>
    	<tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Contact Number</th> 
        <th>Hostel</th>
        <th>Room Number</th>
        <th>Room ID</th>
        <th>Room Floor</th>
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
            $room_id = $row_search['Room_id']; 
            $query7 = "SELECT * FROM room WHERE Room_id = '$room_id'";
            $result7 = mysqli_query($conn,$query7);
            $row7 = mysqli_fetch_assoc($result7);
            $room_no = $row7['Room_No'];
            //student name
            $student_name = $row_search['Fname']." ".$row_search['Lname'];
            ?>
            <tr>
	      		<td><?php echo $student_name;?></td>
	      		<td><?php echo $row_search['Student_id'];?></td>
	      		<td><?php echo $row_search['Mob_no'];?></td>
	      		<td><?php echo $hostel_name;?></td>
	      		<td><?php echo $room_no;?></td>
	      		<td><?php echo $room_id;?></td>
	      		<td><?php echo $row7['Floor'];?></td>
	      		<td><div class="btn-cancel">
		<?php echo "<a href='actions/reserve.php?id=".$room_id."'>Vacate</a>" ?>
		</div></td>
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


<div class="container" id="allocated_rooms"> 
<h2 class="heading text-capitalize mb-sm-5 mb-4"> Rooms Allotted </h2>
<?php
   $hostel_id = $_SESSION['hostel_id'];
   $query1 = "SELECT * FROM student where Hostel_id = '$hostel_id'";
   $result1 = mysqli_query($conn,$query1);
   //select the hostel name from hostel table
   $query6 = "SELECT * FROM hostel WHERE Hostel_id = '$hostel_id'";
   $result6 = mysqli_query($conn,$query6);
   $row6 = mysqli_fetch_assoc($result6);
   $hostel_name = $row6['Hostel_name'];

?>
  <div class="card shadow mb-4">
  	<div class="card-header py-3 px-3">
  		<h6 class="m-0 font-weight-bold text-primary">Allotted Rooms</h6>
  	</div>
  	<div class="card-body">      
  <table class="table table-hover table-bordered" id="allocated_rooms" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Contact Number</th> 
        <th>Hostel</th>
        <th>Room Number</th>
        <th>Room ID</th>
        <th>Room Floor</th>
        <th>Action</th>
      </tr>
    </thead>
    <tfoot>
    	<tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Contact Number</th> 
        <th>Hostel</th>
        <th>Room Number</th>
        <th>Room ID</th>
        <th>Room Floor</th>
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
      		//get the room_no of the student from room_id in room table
            $room_id = $row1['Room_id']; 
            $query7 = "SELECT * FROM room WHERE Room_id = '$room_id' and Allocated ='1'";
            $result7 = mysqli_query($conn,$query7);
            $row7 = mysqli_fetch_assoc($result7);
            $room_no = $row7['Room_No'];
            //student name
            $student_name = $row1['Fname']." ".$row1['Lname'];
             ?>
            
      		<tr>
	      		<td><?php echo $student_name;?></td>
	      		<td><?php echo $row1['Student_id'];?></td>
	      		<td><?php echo $row1['Mob_no'];?></td>
	      		<td><?php echo $hostel_name;?></td>
	      		<td><?php echo $room_no;?></td>
	      		<td><?php echo $room_id;?></td>
	      		<td><?php echo $row7['Floor'];?></td>
	      		<td><div class="btn-cancel">
		<?php echo "<a href='vacate_rooms.php?id=".$room_id."&sid=".$row1['Student_id']."'>Vacate</a>" ?>
		</div></td>
	      		
      		</tr>
      	<?php } }?>
      

    </tbody>
  </table>
</div>
</div>
 <iframe name="print_frame" src="about:blank" style="font-size:80%;width: 0; height: 0; border: none; position: absolute; visibility:hidden;"></iframe>
<a onclick="printDiv()"><i class="fa fa-print" style="font-size: 35px;float: right; color: #F44336; cursor: pointer;"></i></a>
</div>
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
				<p>© 2021 HMS-TaTU. All Rights Reserved | Design by MTR</p>
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
<script>
  function printDiv() {
  	window.frames["print_frame"].document.body.innerHTML =
  	document.getElementById("allocated_rooms").innerHTML;
  	   window.frames["print_frame"].window.focus();
  	   window.frames["print_frame"].window.print();

  }

</script>
</body>
</html>


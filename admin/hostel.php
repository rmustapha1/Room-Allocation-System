<?php
  require '../includes/config.inc.php';

   if (!$_SESSION['loggedIn']) {
 	
 	header('Location: ../error.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Reports View | MTR</title>

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
	<!--bootsrap -->

	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/view.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->

	<!-- //css files -->

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

<section class="contact py-5">
	<div class="container">
			<div class="mail_grid_w3l">
				<form action="hostel.php" method="post">
					<div class="row">
					        <div class="col-md-9">
							<input type="text" placeholder="Search by Hostel name" name="search_box">
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
   	   $hostel_id = $_SESSION['hostel_id'];
   	   $query_search = "SELECT * FROM Hostel WHERE Hostel_name like '$search_box%'";
   	   $result_search = mysqli_query($conn,$query_search);
   	   ?>
   	   <div class="container">
   	   	<div class="card shadow mb-4">
   	   		<div class="card-header py-3 px-3">
   	   			<h6 class="m-0 font-weight-bold text-primary">Hostels</h6>
   	   		</div>
   	   		<div class="card-body">
   	   <table class="table table-hover table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Hostel ID</th>
        <th>Hostel Name</th>
        <th>Number Of Rooms</th>
        <th>Hostel Manager</th>
        <th>Manager ID</th>
      </tr>
    </thead>
    <tfoot>
    	<tr>
        <th>Hostel ID</th>
        <th>Hostel Name</th>
        <th>Number Of Rooms</th>
        <th>Hostel Manager</th>
        <th>Manager ID</th>
      </tr>
    </tfoot>
    <tbody>
    <?php
   	   if(mysqli_num_rows($result_search)==0){
   	   	  echo '<tr><td colspan="4">No Rows Returned</td></tr>';
   	   }
   	   else{
   	   	  while($row_search = mysqli_fetch_assoc($result_search)){
   	   	  	$HID = $row_search['Hostel_id'];
            $query88 = "SELECT * FROM Hostel_manager WHERE Hostel_id = '$HID' and Isadmin = '0'";
            $result88 = mysqli_query($conn,$query88);
            $row88 = mysqli_fetch_assoc($result88);
            // $hostel_name = $row88['Hostel_name'];
               //manager name
            $manager_name = $row88['Fname']." ".$row88['Lname'];;
            $manager_id = $row88['Hostel_man_id'];
           if (!$manager_name) {
           	$manager_name = 'None';
           }
           if (!$manager_id) {
           	$manager_id = 'None';
           }
         
			?>

      		<tr>
	      		<td><?php echo $row_search['Hostel_id'];?></td>
	      		<td><?php echo $row_search['Hostel_name'];?></td>
	      		<td><?php echo $row_search['No_of_rooms'];?></td>
	      		<td><?php echo $manager_name;?></td>
	      		<td><?php echo $manager_id;?></td>
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


<div class="container" id="hostels">
<h2 class="heading text-capitalize mb-sm-5 mb-4"> Hostels Report </h2>
     <?php 

   $count = "SELECT COUNT(*) FROM Hostel";
            $query_count = mysqli_query($conn,$count);
             $result_count = mysqli_fetch_array($query_count);
      ?>
             <tr>
               <td colspan="12" style="font-size: 30px;">The Total Number Of Hostels is <?php echo $result_count[0]; ?></td>
             </tr><br><br>

<?php
   $query1 = "SELECT * FROM Hostel";
   $result1 = mysqli_query($conn,$query1);
?>
  <div class="card shadow mb-4">
  	<div class="card-header py-3 px-3">
  		<h6 class="m-0 font-weight-bold text-primary">Hostels</h6>
  	</div>
  	<div class="card-body">
  <table class="table table-hover table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Hostel ID</th>
        <th>Hostel Name</th>
        <th>Number Of Rooms</th>
        <th>Hostel Manager</th>
        <th>Manager ID</th>
      </tr>
    </thead>
    <tfoot>
    	<tr>
        <th>Hostel ID</th>
        <th>Hostel Name</th>
        <th>Number Of Rooms</th>
        <th>Hostel Manager</th>
        <th>Manager ID</th>
      </tr>
    </tfoot>
    <tbody>
    <?php
      if(mysqli_num_rows($result1)==0){
         echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }
      else{
      	while($row1 = mysqli_fetch_assoc($result1)){
      		$HID = $row1['Hostel_id'];

            $query99 = "SELECT * FROM Hostel_manager WHERE Hostel_id = '$HID' and Isadmin = '0'";
            $result99 = mysqli_query($conn,$query99);
            $row99 = mysqli_fetch_assoc($result99);
            $manager_name = $row99['Fname']." ".$row99['Lname'];
            $manager_id = $row99['Hostel_man_id'];
           if (!$manager_id) {
           	$manager_name = 'None';
           }
           if (!$manager_id) {
           	$manager_id = 'None';
           }
            
            ?>

      		<tr>
	      		<td><?php echo $row1['Hostel_id'];?></td>
	      		<td><?php echo $row1['Hostel_name'];?></td>
	      		<td><?php echo $row1['No_of_rooms'];?></td>
	      		<td><?php echo $manager_name;?></td>
	      		<td><?php echo $manager_id;?></td>
      		</tr>
      	<?php }} ?>
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
<?php include 'admin_footer.php' ?>
<!-- footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
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
  	document.getElementById("hostels").innerHTML;
  	   window.frames["print_frame"].window.focus();
  	   window.frames["print_frame"].window.print();

  }

</script>

</body>
</html>

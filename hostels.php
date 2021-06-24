<?php 
require 'includes/config.inc.php';

?>
<?php include 'header.php';?>

<div class="loader">
<img src="images/logo.png">
</div>

<style type="text/css">
	
	 .h2 .card-title{
	 	/*background-color: #009bd9;*/
		/*border-radius: 10px;*/
        height: 30px;
		font-weight: 700;
		text-align: left;
		font-size: 19px;
		color: #009bd9;
	}
	.col-sm-9{
		float: left;
		padding-right: 10px;
	}
	.col-sm-3{
		
		float: left;
		padding-left: 15px;
	}
	 .h3 .card-title{
	 	background-color: #009bd9;
	 	float: right;
		font-weight: 700;
		font-size: 30px;
		text-align: center;
		border: 2px solid #009bd9;
		border-radius: 50%;
        width: 50px;
        height: 50px;
        line-height: 50px;
        color: #fff;
	}
	@media(max-width: 600px){
		.col-sm-9{
			float: left;
			/*padding-right: 20px;*/
		}
		.col-sm-3{
			float: right;
			/*padding-left: 20px;*/
		}
	}
	.card .card-body .fas,.fa,.far{
      color: #009bd9;
	}
</style>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-flex">
<div class="container-fluid">
<a class="navbar-brand logo" href="index">
<img src="images/logo.png" alt="" width="57" height="50">
<p>Private <span>Hostels</span></p>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" aria-current="page" href="index">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" aria-current="page" href="about">About Us</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Hostels<i class="fa fa-chevron-down"></i>
</a>
<?php 
$query_sch1 = mysqli_query($conn, "select * from school");
?>
<ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
<?php while ($row_sch1=mysqli_fetch_assoc($query_sch1)) {
$id=$row_sch1['Campus'];
?>
<li><a class="dropdown-item" href="hostels?id=<?php echo $id; ?>">
<i class="fas fa-chevron-right fa-sm fa-fw mr-2 text-gray-400"></i>
<span>(<?php echo $id; ?>)</span> Hostels</a></li>
<?php } ?>
<li><a class="dropdown-item" href="all_hostels.php"><i class="fas fa-chevron-right fa-sm fa-fw mr-2 text-gray-400"></i>View All Hostels</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" aria-current="page" href="contact">Contact Us</a>
</li>
<?php if ($_SESSION['loggedIn']) {
?>
<li class="nav-item dropdown">
<a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Welcome, <?php echo $_SESSION['fname']; ?><i class="fa fa-chevron-down"></i>
</a>
<ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item" href="profile">
<i class="far fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
Profile</a></li>
<li><a class="dropdown-item" href="changepwd">
<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
Change Password</a></li>
<li><a class="dropdown-item" href="includes/logout_inc.php">
<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
Logout</a></li>
</ul>
</li>
</ul>
<?php } 
else{

?>
<a href="signin"><button class="btn btn-light"><i class="far fa-user"></i>Login/Signup</button></a>
</div>
<?php } ?>
</div>
</nav><br><br>
<!-- header -->
<section id="banner" class="mb-5">
<div class="top-banner mb-5">
<h1>Our Hostels</h1>
<ul>
<li><a class="active" href="index">Home</a></li>
<li><a href="#">Hostels</a></li>
</ul>
</div>
</section>

<section id="school-card">
<div class="container">
<div class="page-header">
<h1 class="page-title">Hostels in <span style="text-transform: uppercase;"><?php echo $_GET['id']; ?></span></h1>
</div>
<p class="page-content mb-3 mt-3 text-muted">Click and start booking process.</p>
<div class="row" data-aos="zoom-in" data-aos-delay="0">
<?php 
$hostel_loc = $_GET['id']; //getting id from various schools to find corresponding hostels
// selecting hostels by from hostel table
$query = "SELECT * FROM hostel WHERE Hostel_loc ='$hostel_loc'";
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result)==0) {
	?>
   <div class="text-center mb-5 mt-3" style="font-size:45px; font-weight: 700; text-transform:uppercase; color: #009bd9;">Ooops!! Hostels Coming Soon...</div>
<?php }  
else{
while ( $row = mysqli_fetch_assoc($result)) {
$hostel_name = $row['Hostel_name'];
$price = $row['Price'];
$no_of_room = $row['No_of_rooms'];
$loc = $row['Location'];
$image = $row['Image'];
$hostel_id = $row['Hostel_id'];

?>
<div class="col-md-3 col-sm-6 col-sm-3 mb-5">
<a href="booking_form?id=<?php echo $hostel_id; ?>"><div class="card mb-3 d-flex flex-column">
<img src="images/<?php echo $row['Image']; ?>" class="card-img-top" alt="...">
<div class="card-body">
<div class="h2 col-sm-9"><h2 class="card-title"><?php echo $hostel_name; ?></h2></div>
<div class="h3 col-sm-3"><h2 class="card-title">1yr</h3></div><br><br>
<p class="card-text">
<i class="fas fa-tags"></i> <b>GH&#8373;<?php echo $price; ?></b><br>	
<i class="fas fa-bed"></i> <b>No.of rooms :</b> <?php echo $no_of_room; ?><br>
<i class="fas fa-map-marker-alt"></i><b> Location :</b> <?php echo $loc; ?><br>
</p>
</div>
</div></a>
</div>
<?php }} ?>
</div>
</div>
</section>



<?php include 'footer.php'; ?>


<script type="text/javascript">

setTimeout(function(){
$('.loader').fadeToggle();
},0.5000);
</script>
</body>
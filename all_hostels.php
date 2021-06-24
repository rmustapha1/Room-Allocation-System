<?php 
require 'includes/config.inc.php';

?>
<?php include 'header.php';?>

<div class="loader">
<img src="images/logo.png">
<div></div>
<div></div>
<div></div>
<!-- <div></div>
<div></div>
<div></div> -->
</div>

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
<a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
<span><?php echo $id; ?></span> Hostels</a></li>
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

<!-- Universities -->
<section id="school-card">
<?php 
$query_sch = mysqli_query($conn, "select * from school");
?>
<div class="container">
<div class="page-header">
<h1 class="page-title">Universities | Hostels</h1>
</div>
<p class="page-content mb-3 mt-3 text-muted">Get to Know all our honored Universities and their various Private Hostels in Ghana.</p>
<div class="row">
<?php while ($row_sch=mysqli_fetch_assoc($query_sch)) {
$school_name=$row_sch['School_name'];
$campus=$row_sch['Campus'];
$img=$row_sch['Image'];
?>
<div class="col-md-4 col-sm-6 mb-5">
<div class="card mb-3 d-flex flex-column">
<img src="images/<?php echo $img;?>" class="card-img-top overlay" alt="...">
<div class="card-body text-center">
<h3 class="card-title"><?php echo $school_name;?></h3>
<a href="hostels?id=<?php echo $campus; ?>"><button class="btn btn-light btn-grd btn-mat btn-center py-auto">Veiw Hostels</button></a>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</section>
<!-- Universities end -->



<?php include 'footer.php'; ?>


<script type="text/javascript">

setTimeout(function(){
$('.loader').fadeToggle();
},0.5000);
</script>
</body>
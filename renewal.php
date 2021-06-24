<?php include 'includes/config.inc.php';
include 'header.php';
?>

<?php if (!$_SESSION['loggedIn']) {
$_SESSION['loginmsg'] = 'Kindly Signin or Signup to continue';
header("Location: signin");
exit();
}
?>

<style type="text/css">
.card{
background: linear-gradient(rgba(255,255,255,.90),rgba(255,255,255,.90)),url(images/hero-bg.jpg) center center no-repeat;
transition: .5s;
}
.card:hover{
transform: scale(1.1);
cursor: pointer;
transition: .7s;
margin-bottom: 10px;
}
.form-label{
margin-top: 10px;
font-size: 17px;
font-weight: 600;
color: #022d54;
}
</style>

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
<span>(<?php echo $id; ?>)</span> Hostels</a></li>
<?php } ?>
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
<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
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
<a href="signin"><button class="btn btn-light"><i class="fa fa-user"></i>Login / Signup</button></a>
</div>
<?php } ?>
</div>
</nav><br><br>
<!-- header -->
<section id="banner" class="mb-5">
<div class="top-banner mb-5">
<h1>Room Renewals</h1>
<ul>
<li><a class="active" href="index">Home</a></li>
<li><a href="#">Renewal form</a></li>
</ul>
</div>
</section>
<section id="renewal">
	<?php 
      $hid=$_SESSION['hid'];
      $rid=$_SESSION['roomid'];

	 ?>
<div class="container"> 
<div class="page-header">
<h1 class="page-title">Room Renewal Form</h1>
</div>
<p class="page-content mb-5 mt-3 text-muted">Renew your room.</p>
<div class="card shadow mb-4">
<form class="row g-3 mb-5 mx-5 my-5" action="includes/renewal_inc.php?<?php echo"hid=$hid&rid=$rid" ?>" method="POST">
<div class="col-md-12">
<label for="inputID" class="form-label">Student ID</label>
<input type="text" class="form-control" name="roll_no" value="<?php echo $_SESSION['id']; ?>" required="required" readonly="true">
</div>
<div class="col-md-6">
<label for="inputfname4" class="form-label">Firstname</label>
<input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['fname']; ?>" required="required">
</div>
<div class="col-md-6">
<label for="inputlname4" class="form-label">Lastname</label>
<input type="text" class="form-control" name="lname" value="<?php echo $_SESSION['lname']; ?>" required="required">
</div>
<div class="col-md-6">
<label for="inputEmail" class="form-label">Email</label>
<input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email'] ;?>">
</div>
<div class="col-md-6">
<label for="inputNum" class="form-label">Mobile Number</label>
<input type="text" class="form-control" name="mob_no" value="<?php echo $_SESSION['mobile'] ;?>" readonly>
</div>
<div class="col-md-4">
<?php 
$query2= "SELECT * FROM hostel WHERE Hostel_id = '$hid'";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$hostel_name = $row2['Hostel_name']; ?>
<label for="inputHostel" class="form-label">Hostel Name</label>
<input type="text" class="form-control" name="hname" value="<?php echo $hostel_name ?>" readonly="true">
</div>
<div class="col-md-4">
<?php 
$query2= "SELECT * FROM room WHERE Room_id = '$rid'";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$room_no = $row2['Room_no']; ?>
<label for="inputHostel" class="form-label">Room Number</label>
<input type="text" class="form-control" name="roomno" value="<?php echo $room_no ?>" readonly="true">
</div>
<div class="col-md-4">
<?php 
$room_type = $row2['Room_type']; ?>
<label for="inputHostel" class="form-label">Room Type</label>
<input type="text" class="form-control" name="roomtype" value="<?php echo $room_type ?>" readonly="true">
</div>
<div class="col-12 mt-3">
<button type="submit" class="btn btn-secondary" name="pay"><i class="fas fa-paper-plane"></i> Renew Now</button>
</div>
</form>
</div>
</div>
</section>
<?php include 'footer.php' ?>

<script type="text/javascript">

setTimeout(function(){
$('.loader').fadeToggle();
},0.3000);
</script>
</body>
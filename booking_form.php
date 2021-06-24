<?php include 'includes/config.inc.php';
include 'header.php';
?>

<?php if (!$_SESSION['loggedIn']) {
$_SESSION['loginmsg'] = 'Kindly Signin or Signup to continue';
header("Location: signin");
exit();
} 
elseif(time() - $_SESSION['timestamp'] > 900) { //subtract new timestamp from the old one
session_start();
session_unset();
session_destroy();
$_SESSION['timeout'] = '15 Minutes timeout! Kindly Signin again';
header("Location: signin");
} else {
$_SESSION['timestamp'] = time(); //set new timestamp
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
<h1>Bookings</h1>
<ul>
<li><a class="active" href="index">Home</a></li>
<li><a href="#">Booking form</a></li>
</ul>
</div>
</section>
<section >
<?php 
$id = $_GET['id'];
$query = "SELECT * FROM room WHERE Hostel_id = '$id' and Allocated = '0' and Reserve = '0'";
$result = mysqli_query($conn,$query);
?>
<div class="container">
<div class="page-header">
<h1 class="page-title">Available Rooms</h1>
</div>
<p class="page-content mb-5 mt-3 text-muted">Kindly check room availabilty before you proceed bookings. <br><code> In the table shown below, Rooms are numbered in decimals Eg: Roon 1.0 equals Room 1 and 2.0 equals 2. Also, for Room numbers with .1, .2, .3, and so on represents the number of students in that room.For example if Room 1 is a (4 in 1) Room Type, therefore it  will have a corresponding Room numbers such as Room 1.0, 1.1, 1.2, and Room 1.3. This means if a student falls under any of these Room numbers is said to be in Room 1.
Note: Room Types (1 in 1) has no corresponding rooms, its just  the room number with point 0. eg. 1.0, 2.0, 3.0 etc.</code></p>
<div class="row">
<div class="col-md-12"style="max-height:250px;overflow-y: auto;">
<table class="table table-light table-hover table-striped"style="height:20px;overflow-y:scroll">

<thead>
<tr>
<th><i class="fas fa-hashtag"></i></th>
<th>Hostel Name</th>
<th>Room Type</th>
<th>Room Number</th>
<th>Room Price</th>
</tr>
</thead>
<tfoot>
<tr>
<th><i class="fas fa-hashtag"></i></th>
<th>Hostel Name</th>
<th>Room Type</th>
<th>Room Number</th>
<th>Room Price</th>
</tr>
</tfoot>

<tbody>
<?php
$i=0;
if(mysqli_num_rows($result)==0){
echo '<tr><td colspan="5"> Ooops!! No Rooms Available</td></tr>';
}
else{
while ($row = mysqli_fetch_assoc($result)) {
$room_type = $row['Room_type'];
$room_no = $row['Room_no'];
$price = $row['Price'];
//Fetching Hostel name from the hostel table
$id = $_GET['id'];
$query7 = "SELECT * FROM Hostel WHERE Hostel_id = '$id'";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$hostel_name = $row7['Hostel_name'];
$i++; 
?>
<tr>
<td ><?php echo $i; ?></td>
<td><?php echo $hostel_name; ?></td>
<td><?php echo $room_type; ?></td>
<td><?php echo $room_no; ?></td>
<td>&#8373;<?php echo  $price; ?>.00 /1yr</td>
</tr>

<?php }} ?>

</tbody>
</table>
</div>
</div>
</div>
</section>
<section id="booking">
<?php 
$id_1 = $_GET['id'];
$query1 = "SELECT * FROM room WHERE Hostel_id = '$id_1' and Allocated = '0' and Reserve = '0'";
$result1= mysqli_query($conn,$query);
?>
<div class="container"> 
<div class="page-header">
<h1 class="page-title">Booking Form</h1>
</div>
<p class="page-content mb-5 mt-3 text-muted">Move on with booking process.</p>
<div class="card shadow mb-5" data-aos="zoom-in" data-aos-delay="0">
<form class="row g-3 mb-5 mx-5 my-5" action="includes/allocate.php?id=<?php echo $_GET['id'];?>" method="POST">
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
<?php $id_2 = $_GET['id'];
$query2= "SELECT * FROM hostel WHERE Hostel_id = '$id_2'";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$hostel_name = $row2['Hostel_name']; ?>
<label for="inputHostel" class="form-label">Hostel Name</label>
<input type="text" class="form-control" name="hname" value="<?php echo $hostel_name ?>" readonly="true">
</div>
<div class="col-md-4">

<?php
if(mysqli_num_rows($result1)==0){
echo '<label for="inputState" class="form-label">Room Type</label>
<select id="inputState" class="form-select">
<option selected>Choose One...</option>
<option>Ooops!! No room Available</option>
</select>';
}
else{

?>
<label for="inputState" class="form-label">Room Type</label>
<select id="inputState" class="form-select" name="room_id" required="">
<option selected>Choose One...</option>
<?php 
while ($row1 = mysqli_fetch_assoc($result1)) {
$room_type = $row1['Room_type']; $price = $row1['Price'];
$room_id = $row1['Room_id'];  ?>
<option value="<?php echo $room_id ?>"><?php echo $room_type ; ?></option>
<?php }} ?>
</select>
</div>
<div class="col-12 mt-3">
<button type="submit" class="btn btn-primary" name="pay"><i class="fas fa-paper-plane"></i> Book Now</button>
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
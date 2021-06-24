<?php include 'includes/config.inc.php' ?>
<?php include 'header.php' ?>




<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<!-- Google font-->     
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
<!-- waves.css -->
<link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
<!-- themify-icons line icon -->
<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
<!-- ico font -->
<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<style type="text/css">

body{
font-family: 'Rajdhani', sans-serif;
}
h1{
font-weight: 600;

}
h3{
color: #009bd9;
font-size: 30px;
font-weight: 700;
}
.address-text b{
color: #023b6d;
font-size: 20px;
text-transform: capitalize;
font-weight: 600;
}
li{
font-size: 17px;
} 
.card-block img{
    min-height: 200px;
    width: 70%;
    float: none;
    margin: 24px 40px 0;
}
</style>
<body themebg-pattern="theme1">


<!-- Pre-loader end -->

<section class="login-block">
<!-- Container-fluid starts -->
<div class="container">
<div class="row">
<div class="col-sm-12">
<!-- Authentication card start -->
<?php  
$id = $_SESSION['id'];
$query = "SELECT * FROM students WHERE Student_id = '$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$student_name = $row['Fname']." ".$row['Lname'];
$number = $row['Mob_no'];
$email= $row['Email'];
$hostel_id = $row['Hostel_id'];
$room_id = $row['Room_id'];

if (!$hostel_id) {
$hostel_name = 'None';
}
else{
//getting hostel name and room number
$query_prfl = "SELECT * FROM hostel Where Hostel_id = $hostel_id";
$result_prfl = mysqli_query($conn,$query_prfl);
$row_prfl = mysqli_fetch_assoc($result_prfl);
$hostel_name = $row_prfl['Hostel_name'];
}
if (!$room_id) {
$room_no = 'None';
}
else{
$query_prfl2 = "SELECT * FROM room Where Room_id = $room_id";
$result_prfl2 = mysqli_query($conn,$query_prfl2);
$row_prfl2 = mysqli_fetch_assoc($result_prfl2);
$room_no = $row_prfl2['Room_no'];
}
?>

<form action="#"class="md-float-material form-material" method="post">
<div class="text-center">
<h1 style="color: #fff;">Private Hostels Booking Platform</h1>
</div>
<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<h2 class="text-center">Personal Info</h2><br>
</div>
</div>
<img src="images/c.png">
<div class="form-group form-primary">
<h3 class="text-center"><?php echo $student_name; ?></h3>
<h5 class="text-center">Student</h5>
</div>
<hr>
<div class="form-group form-primary">
<ul class="address">
<li>
<ul class="address-text">
<li><b>Student ID :</b> <?php echo $id; ?></li><br>
<li><b>Mobile No :</b> <?php echo $number; ?></li><br>
<li><b>Email :</b> <?php echo $email; ?></li><br>
<li><b>Hostel Name:</b> <?php echo $hostel_name; ?></li><br>
<li><b>Room Number:</b> <?php echo $room_no; ?></li><br>
</ul>
</li>
</ul>
</div>
<hr/>
<div class="row">
<div class="col-md-6">
<p class="text-inverse text-left"><a href="index"><b>Back to website</b></a></p>
</div>
</div>
</div>
</div>
</form>
<!-- end of form -->
</div>
<!-- end of col-sm-12 -->
</div>
<!-- end of row -->
</div>
<!-- end of container-fluid -->
</section>
</script>

<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>     <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>     <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>

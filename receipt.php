<?php include 'includes/config.inc.php' ?>
<?php include 'header.php' ?>

<?php if (!$_SESSION['paid']) {
header('Location:error.php');
} ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
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
.logo{
height: 60px;
width: 60px;
margin-left: 41%;
background: url(images/logo.png) no-repeat;
background-size: 70px 70px;
}
h6{
font-weight: 600;
margin-top: 5px;
}
h4{
font-size: 18px;
font-weight: 700;
margin-top: 5px;
}
h5{
font-size: 12px;
margin-top: 5px;
}
h1{
font-size: 35px;
font-weight: 700;
text-shadow: 0 0 3px green, 0 0 5px #3333;
}
b{
font-weight: 600;
}
th{
//padding: 7px;
font-weight: 700;
}
td{
border-bottom: 1px solid #EEE;
width: 50mm;
}
.col-md-6{
padding-left: 1px;
float: left;
border-bottom: 2px solid rgb(0 0 0 / 10%);
}
.not-paid{
width: 100%;
position: absolute;
top: -20px;
font-weight: 700;
left: 0;
border-top-left-radius: 5px;
border-top-right-radius: 5px;
z-index: 1;
font-size: 20px;
text-transform: uppercase;
text-align: center;
padding: 5px 0 3px 0;
background: red;
color: #fff;
opacity: .5;
}

</style>
<body >


<!-- Pre-loader end -->

<div id="print-content" class="login-block" >
<!-- Container-fluid starts -->
<div class="container">
<div class="row">
<div class="col-sm-12">
<?php  
$id = $_SESSION['id'];
$query = "SELECT * FROM students WHERE Student_id = '$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$student_name = $row['Fname']." ".$row['Lname'];
$number = $row['Mob_no'];
$email= $row['Email'];
$hostel_id = $_GET['hid'];
$room_id = $_GET['rid'];
$refno = $_GET['ref'];

if (!$hostel_id) {
$hostel_name = 'None';
}
else{
//getting hostel name and room number
$query_prfl = "SELECT * FROM hostel Where Hostel_id = '$hostel_id'";
$result_prfl = mysqli_query($conn,$query_prfl);
$row_prfl = mysqli_fetch_assoc($result_prfl);
$hostel_name = $row_prfl['Hostel_name'];
}

if (!$room_id) {
$room_no = 'None';
$price = 'None';
$room_type = 'None';
}
else{
$query_prfl2 = "SELECT * FROM room Where Room_id = '$room_id' and Hostel_id='$hostel_id'";
$result_prfl2 = mysqli_query($conn,$query_prfl2);
$row_prfl2 = mysqli_fetch_assoc($result_prfl2);
$room_no = $row_prfl2['Room_no'];
$price = $row_prfl2['Price'];
$room_type = $row_prfl2['Room_type'];
}
$manager_query = mysqli_query($conn, "select * from hostel_manager where Hostel_id=$hostel_id");
$row = mysqli_fetch_assoc($manager_query);
?>

<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<span class="not-paid">Not Paid</span><br>
<div class="logo"></div>
<h3 class="text-center">Private Hostels Booking Platform</h3>
<p class="text-center">IT Department,TaTU <br>
0207728823/0240245872 <br>
mustapharafick3@gmail.com
</p>
<br>
<hr>

<div id="mid">
<div class="col-md-6">
<h4>Student Details</h4>
<ul>
<li><b>Bookings No. :</b> <?php echo $refno; ?></li><br>
<li><b>Student Name :</b> <?php echo $student_name; ?></li><br>
<li><b>Mobile No :</b> <?php echo $number; ?></li><br>
<!-- <li><b>Hostel Name:</b> <?php echo $hostel_name; ?></li><br> -->
<!-- <li><b>Room Number:</b> <?php echo $room_no; ?></li><br> -->
</ul>
</div>
<div class="col-md-6">
<h4>Hostel Manager Details</h4>
<ul>
<li><b>Manager Name :</b> <?php echo $row['Fname']." ".$row['Lname']; ?></li><br>
<li><b>Mobile No :</b> <?php echo $row['Mob_no']; ?></li><br>
<li><b>Hostel Name:</b> <?php echo $hostel_name; ?></li><br>
<!-- <li><b>Room Number:</b> <?php echo $room_no; ?></li><br> -->
</ul>
</div>
</div><br><br>
<h4 class="mt-3">Booking Details</h4>
<table class="mt-2 ">
<thead>
<tr class="m-b-20">
<th>Hostel</th>
<th>Room Type</th>
<th>Price</th>
</tr>
</thead>

<tbody>
<tr class="mb-5">
<td><?php echo $hostel_name; ?></td>
<td><?php echo $room_type; ?></td>
<td>GH&#8373;<?php echo $price; ?>.00</td>
<tr>
<td></td>
<td><h6>Grand Total:</h6></td>
<td>GH&#8373;<?php echo $price; ?>.00</td>
</tr>
<tr>
<td></td>
<td><h6>Amount to Pay:</h6></td>
<td>GH&#8373;<?php echo $price; ?>.00</td>
</tr>
</tbody>
</table>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-12">
<h5 class="text-inverse text-center m-b-0">Kindly make payment to the Hostel Manager`s Number(<?php echo $row['Mob_no']; ?>), Manager`s Name(<?php echo $row['Fname']." ".$row['Lname'];?>),and send us the messsage through our WhatsApp number above. Your Reference should be your Bookings Number</h5>
<h5 class="text-danger text-center m-b-0"><i class="fas fa-warning"></i>Note: Your Bookings will be cancelled automatically after 24 hours without payment.</h5><br>
<h6 class="text-inverse text-center m-b-0">Thank you for transacting with us.</h6>
<p class="text-primary text-left"><a href="index"><b><i class="fas fa-chevron-left"></i> Back to website</b></a></p>
<input type="button" value="click" onclick="printDiv()">
</div>
</div>
</div>
</div>
<!-- end of form -->
</div>
<!-- end of col-sm-12 -->
</div>
<!-- end of row -->
</div>
<!-- end of container-fluid -->
</div>

<script type="text/javascript">
function printDiv() {
var printContents = document.getElementById("print-content").innerHTML;
w=window.open();
w.document.write('<style>h1{font-size:20px;color:#76C04E;width:90%;}</style>');
w.document.write('<style>body{background: #FFFFFF; color: #000000; font: 85% arial, verdana, helvetica, sans-serif; }</style>');
w.document.write('<style>.res td{font-size: 12px;font-family: open sans, arial; border-top: 1px solid #ddd; width: auto;padding: 4px;} </style>');
w.document.write(printContents);
w.print();
w.close();
}
</script>
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

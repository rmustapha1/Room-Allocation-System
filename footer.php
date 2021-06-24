<!-- footer -->
<footer id="footer">
<div class="container">
<div class="row">
<div class="col-md-6 footer-about">
<a href="index" class="logo">
<img src="images/logo.png" alt="" width="57" height="50">
<p>Private <span>Hostels</span></p>
</a>
<p class="description text-muted">
Private Hostels Booking is a booking platorm developed to allow bookings of various private hostels in Ghana, manage their activities online securely and faster. We provide you the most affordable top notched private hotels for your accommodation. Acknowledged the first, most secured and fastest private hostels booking platform in the nation. 
</p>
<div class="social-links d-flex mt-3">
<a target="_blank" href="https://t.me/rafick_1"><i class="fab fa-telegram"></i></a>
<a target="_blank" href="https://web.facebook.com/m.rafick.9/"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-whatsapp"></i></a>
<a href="mailto:mustapharafick3@gmail.com"><i class="fas fa-envelope"></i></a>
</div>
</div>
<div class="col-md-3 footer-top">
<h3>Quick Links</h3>
<nav class="footer-nav">

  <?php $hid= $_SESSION['hid'];
   $room_id= $_SESSION['roomid'] ;
if (!$room_id) {

   ?>
<ul>
<li><i class="fa fa-chevron-right"></i><a href="index">Home</a></li>
<li><i class="fa fa-chevron-right"></i><a href="about">Our History</a></li>
<li><i class="fa fa-chevron-right"></i><a href="contact">Get In Touch</a></li>
<li><i class="fa fa-chevron-right"></i><a href="all_hostels">All Hostels</a></li>
<?php if (!$_SESSION['loggedIn']) {
 ?>
<li><i class="fa fa-chevron-right"></i><a href="signin">Login/Signup</a></li>
<?php } else{?>
<li><i class="fa fa-chevron-right"></i><a href="includes/logout_inc.php">Logout</a></li>
<?php }  ?>
</ul>
<?php } else{?>
	<ul>
<li><i class="fa fa-chevron-right"></i><a href="index">Home</a></li>
<li><i class="fa fa-chevron-right"></i><a href="about">Our History</a></li>		
<li><i class="fa fa-chevron-right"></i><a href="renewal">Renew room</a></li>
<li><i class="fa fa-chevron-right"></i><a href="receipt">Get Your receipt</a></li>
<?php if (!$_SESSION['loggedIn']) {
 ?>
<li><i class="fa fa-chevron-right"></i><a href="signin">Login/Signup</a></li>
<?php } else{?>
<li><i class="fa fa-chevron-right"></i><a href="includes/logout_inc.php">Logout</a></li>
<?php }  ?>
</ul>
<?php } ?>
</nav>
</div>
<div class="col-md-3 footer-top">
<h3>Explore Our Hostels</h3>
<nav class="footer-nav">
<ul>
	<?php 
$query_sch1 = mysqli_query($conn, "select * from school");
while ($row_sch1=mysqli_fetch_assoc($query_sch1)) {
$id=$row_sch1['Campus'];
?>
<li><i class="fa fa-chevron-right"></i><a href="hostels?id=<?php echo $id; ?>"><span>(<?php echo $id; ?>)</span> Hostels</a></li>
<?php } ?>
</ul>
</nav>
</div>
</div>
</div>
<div class="col-md-12" style="background-color: #fff; width: 100%;">
<div class="container">
<div class="copyright text-center">
<?php echo "<p>&copy;".date("Y")."-All Rights Reserved | Ck Fi Ra Design</p>";  ?>
</div>
</div>
</div>
</footer>
<!-- footer end -->
<!--
Author: MTR
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<style type="text/css">


.content_left h2 {
font-size: 100px;
position: relative;
}
.content_left h2:after {
content: "";
position: absolute;
border: 5px solid #3F51B5;
width: 46px;
height: 46px;
left: 6.2%;
top: 31%;
border-radius: 50%;
}
.b-search input[type="text"] {
width: 100%;
outline: none;
padding: 12px 20px;
font-size: 16px;
font-weight: 900;
letter-spacing: 3px;
color: #333;
border: none;
box-sizing: border-box;
border: 1px solid #999;
}
.b-search input[type="submit"] {
background: url(images/search-icon.png) no-repeat 14px 14px #3F51B5;
border: none;
height: 50px;
width: 50px;
display: inline-block;
position: absolute;
outline: none;
cursor: pointer;
top: 0px;
right: 0px;
}
.b-search {
position: relative;
width: 40%;
}
.back_to_index a {
font-size: 15px;
font-weight: 900;
background: #3F51B5;
padding: 1em 2em;
margin: 1em 0;
display: inline-block;
letter-spacing: 3px;
text-align: center;
color: #fff;
border: none;
outline: none;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-o-transition: 0.5s all;
-ms-transition: 0.5s all;
-moz-transition: 0.5s all;
cursor: pointer;
}
.back_to_index a:hover {
background: #333;
}
.content_left p {
font-size: 15px;
color: #777;`
line-height: 28px;
font-weight: 600;
letter-spacing: 1px;
}
.content_left h5 {
font-size: 20px;
color: #3F51B5;
font-weight: 900;
text-transform: uppercase;
text-decoration: none;
line-height: 1.5;
letter-spacing: 3px;
}



/*-- //error --*/
</style>
<body>

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
<!--Header-->
<!--Header-->
</div>
<!-- //banner --> 

<!-- Error page -->
<section class="error py-5">
<div class="container py-3">
<h3 class="heading text-capitalize mb-sm-5 mb-4"> Error Page ! ! ! </h3>
<div class="error_content">
<div class="content_left">
<h2 class="font-weight-bold">404</h2>
<h5 class="text-capitalize">looks like that page doesn't exist</h5>
<p class="mt-3">. </p>
<div class="back_to_index mt-4">
<a href="index" class="text-capitalize">Back to Home</a>
</div>
<p class="text-capitalize my-3">Please check the URL and try again</p>
<div class="b-search">
<form action="#" method="post">
<input type="text" name="search" placeholder="Enter your keywords here..." required="">
<input type="submit" value="">
</form>
</div>
</div>
</div>
</div>
</section>
<!-- //Error page -->

</body>
</html>
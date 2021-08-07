<!DOCTYPE html>
<html lang="en">

<head>
    <title>SignUp Page</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- /google fonts-->

</head>
<style type="text/css">
    body{
        background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(web_home/images/g3.jpg) no-repeat 0px 0px; 
        background-size: cover;
        min-height: 100vh;
    }
</style>

<body>
    <h1 class="wh1">Room Allocation System -TaTU Hostel</h1>
     <section class="contact py-5">
    <div class="container">
        <h2 class="heading text-capitalize mb-sm-5 mb-4"> SignUp Form </h2>
            <div class="mail_grid_w3l">
                <form action="includes/signup.inc.php" method="post">
                    <div class="row">
                        <div class="col-md-6 contact_left_grid" data-aos="fade-right">
                            <div class="contact-fields-w3ls">
                                <input type="text" name="student_roll_no" placeholder="Admission | Matric No" minlength="8" maxlength="8"  required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="student_fname" placeholder="First Name" required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="student_lname" placeholder="Last Name" required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="date" name="dob"  placeholder="Date of Birth" max="2005-12-31" required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <select name="sex" required="">
                                    <option>-Sex-</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="nationality" placeholder="Nationality"  required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="hometown" placeholder="Hometown" required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="address" placeholder="Home Address"required="required">
                            </div>
                        </div>
                        <div class="col-md-6 contact_left_grid" data-aos="fade-left">
                            <div class="contact-fields-w3ls">
                                <input type="text" name="mobile_no" placeholder="Mobile No" maxlength="10" pattern="[0-0]{1}[0-9]{2}[0-9]{3}[0-9]{4}" required="">
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="department" placeholder="Department"required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <select name="year_of_study" required="">
                                    <option>-Year Of Study-</option>
                                    <option value="100">100</option>
                                    <option value="200">200</option>
                                    <option value="300">300</option>
                                    <option value="400">400</option>
                                </select>
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="emergency_name" placeholder="Relative Name" required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="emergency_relationship" placeholder="Relative relation" required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="text" name="emergency_no" placeholder="Relative Mobile_no" maxlength="10" pattern="[0-0]{1}[0-9]{2}[0-9]{3}[0-9]{4}" required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="password" name="pwd" placeholder="Password" required="required">
                            </div>
                            <div class="contact-fields-w3ls">
                                <input type="password" name="confirmpwd" placeholder="Confirm Password" required="required">
                            </div>

                            <input type="submit" name="signup-submit" value="Sign Up">
                        </div>
                    </div>

                </form>
            </div>
        <p class=" w3l-register-p">Already a member?<a href="index.php" class="register"> Login</a></p>
    </div>
</section>
<div class="foo">
        <p style="color: #fff;"><?php echo "&copy;".date("Y")." HMS-Tatu. All Rights Reserved | Design by MTR";  ?></p>
</div>
    

</body>

</html>

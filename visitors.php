
<?php 
session_start();
$_email=$_SESSION['email'];
$_pass=$_SESSION['password'];

?>





 


 <!DOCTYPE html>
 <html>
 <head>
 	<title>visitors</title>

 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
 </head>
 <body>
 	<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <nav class="navbar navbar-expand-sm navbar-primary bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="assets/images/image46.png" width="150px" height="80px"></a>
     <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <li><a class="nav-link scrollto" href="index.php">Services</a></li>
          <li><a class="nav-link scrollto " href="index.php">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index.php">Pricing</a></li>
          <li><a class="nav-link scrollto" href="index.php">Team</a></li>
          <li class="dropdown"><a class="btn btn-primary" href="#"><span>Welcome Register here</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              
                <ul>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                  
                </ul>
              </li>
              <li><a href="service.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="#"></a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
         <a  class="btn btn- me-2" class="nav-link" href="logout.php">Sign out</a>
        <button class="btn btn- me-2" type="button">Search</button>
      </form>
     
       
    </div>
  </div>
</nav>
        
    
    </div>
    </div>
       <h2 style="text-align: right;" class="container">Welcome: <?php echo $_SESSION['email']; ?></h2>
 <div class="container"> 

  </div>

 

  <div class="div1" ><img src="assets/images/image30.jpg"  class="rounded rounded-circle"  class="float-start" width="400" >
<img src="assets/images/image9090.jpg" class="img-thumbnail" class="float-start" width="350">
<img src="assets/images/image59.jpg" class="img-thumbnail" class="float-start" width="470">
</div> 


<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3">
			<form>
				<fieldset>
					<legend>Welcome</legend>
					 <label>Firast Name</label>
     <input type="text" name="fname" class="form-control">
        <label>Last Name</label>
          <input type="text" name="lname" class="form-control">
        
        <label>Email</label>
        <input type="email" name="email" class="form-control"> 
        <label>Contact</label>
        <input type="text" name="phone" class="form-control">
               
	</fieldset>
				</form>
			
		</div>
		
	</div>
	




</div>






  <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Pricing</h2>
          <p>Telecommunication and Software Application Plan</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in">
             
             <h3>Accessories</h3>
              <p>start from</p>

              <h4><sup>Ksh.</sup>10000<span> /Package</span></h4>
              <ul>
                <li>Computer Accessories</li>
                <li>Access control Accessories</li>
                <li>Cctv Accessories</li>
                <li>Network Accessories</li>
                <li>Transmission and Display Accessories</li>
              </ul>
              <div class="btn-wrap">
                <a href="contact.php" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Software development</h3>
              <p>start from</p>

              <h4><sup>Ksh.</sup>40000<span> /Package</span></h4>
              <ul>
                <li>School management system</li>
                <li>E-commerce Applications</li>
                <li>Hotel Management System</li>
                <li>Humanrecourse Management System</li>
                <li >Point of Sale management system</li>
                <li>Hospital Management System</li>
              </ul>
              <div class="btn-wrap">
                <a href="contact.php" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
               <h3>Web development</h3>
              <p>start from</p>

              <h4><sup>Ksh.</sup>35000<span> /Package</span></h4>
              <ul>
                <li>E-commerce</li>
                <li>CMS Website</li>
                <li>Custom Website</li>
                <li>Blog/custom Website</li>
                <li>Website Maintenance</li>
              </ul>
              <div class="btn-wrap">
                <a href="contact.php" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">Advanced</span>
              <span class="advanced">Package</span>
              <h3>Graghic Design</h3>
              <p>start from</p>


              <h4><sup>Ksh.</sup>5000<span> / Package</span></h4>
              <ul>
                <li>Web Design</li>
                <li>Billboard Design</li>
                <li>Signage</li>
                <li>Logo</li>
                <li>Car Graffiti</li>
              </ul>
              <div class="btn-wrap">
                <a href="contact.php" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

     <!-- ======= Footer ======= -->




  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Thanks for shopping with us</p>
          </div>
          
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Software Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Busia-Kenya <br>
              Ongata Rongai-Kajiado<br>
              
              <strong>Phone:</strong>+254715229634<br>
              <strong>Email:</strong>datasightcoms@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Datasight communications</h3>
            <p> A home of new Generation ICT solutions provider</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>datasightcommunications</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">Datasight communications</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>










</body>
 </html>

 <?php 

 if (isset($_POST['submit']))

                 {  

                  $first=$_POST['fname'];
                  $last=$_POST['lname'];
                 	$email=$_POST['email'];
                 	$contact=$_POST['phone'];
                 	$date=$_POST['dob'];
                 	$city=$_POST['town'];
                 	$state=$_POST['state'];
                 	$gender=$_POST['gender'];
                 	$service=$_POST['service'];
                 	$user=$_POST['user'];
                  $password=$_POST['pass'];
                  
                 	$newpassword=md5($password);
                  

     $con=mysqli_connect('localhost','root','','datasight');



  $sql="UPDATE `form` SET `first name`='$first',`last name`='$last',`email`='$email',`contact`='$contact',`date`='$date',`city`='$city',`state`='$state',`gender`='$gender',`service`='$service',`username`='$user',`password`='$newpassword' WHERE   id='$id'";

                mysqli_query($con,$sql);

                header("Location: application.php");

               

                 	}
?>



<?php 
session_start();

$_email=$_SESSION['email'];

$_pass=$_SESSION['password'];

?>



<!DOCTYPE html>
<html>
<head>
  <title>Our services</title>
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
       <h2 style="text-align: right;" class="container">Welcome: <?php echo $_SESSION['email']; ?></h2>
 <div class="container"> 


      
    </div>
    
  </div>

 

  <div class="div1" ><img src="assets/images/image30.jpg"  class="rounded rounded-circle"  class="float-start" width="400" >
<img src="assets/images/image9090.jpg" class="img-thumbnail" class="float-start" width="350">
<img src="assets/images/image59.jpg" class="img-thumbnail" class="float-start" width="470">
</div> 
   
 

<div class="container-fluid">
    <div class="row">

<div class="col-lg-4">
        

 <div class="row ">
          <div class="col-sm-12">
            <form  method="post"  class="border border-2" >
          <fieldset>
        <legend class="text-primary">Fill the form below</legend>

        <label>Firast Name</label>
     <input type="text" name="fname" class="form-control">
        <label>Last Name</label>
          <input type="text" name="lname" class="form-control">
        
        <label>Email</label>
        <input type="email" name="email" class="form-control"> 
        <label>Contact</label>
        <input type="text" name="phone" class="form-control">
               
        <label>City</label>
        <input type="text" name="town" class="form-control"><br>
        <label>State</label>
        <input type="text" name="state" class="form-control"><br>
        <label>Gender</label><br>
        <select  name="gender" class="form-control"><br>
          <option>Male</option>
          <option>Female</option>
        </select>
        <label>Book service</label>
        <select  name="service"  class="form-control"><br>
          <option>Select Services</option>
       
          <option>HARDWARE SYSTEMS AND REPAIR/MAINTENANCE</option>
          <option>Computer system unit</option>
          <option>Access control system Unit</option>
          <option>Cctv system Unit </option>
          <option>Network sysetm Unit</option>
          <option>Transmission and Display system Unit</option>
          
          <option>SOFTWARE DEVELOPMENT</option>
          <option>School management system</option>
          <option>E-commerce Application system</option>
          <option>Hotel Management System</option>
          <option>Humanrecourse Management System</option>
          <option>Point of Sale management system</option>
          <option>Hospital Management System</option>
          
          <option>WEB DEVELOPMENT</option>
           <option>E-commerce Website</option>
            <option>CMS Website</option>
             <option>Custom Website</option>
              <option>Blog/custom Website</option>
               <option>Website Maintenance</option>
          <option>FIBER/WIMAX INTERNET SOLUTION </option>
          <option>VSAT INTERNET SOLUTION</option>
          <option>WEB HOSTING</option>
          <option>CCTV INSTALLATION</option>
          <option>BIOMETRIC ACCESS CONTROL SOLUTION</option>

          <option>GRAPHIC DESIGN SOLUTION</option>
          <option>Web Design</option>
          <option>Billboard Design</option>
          <option>Signage</option>
          <option>Logo</option>
          <option>Car Graffiti</option>
                   </select><br>


        <label>User Name</label>
        <input type="text" name="user" class="form-control"><br>
        <label>password</label>
        <input type="password"  name="pass" class="form-control"><br>

                   
        <input type="submit" name="submit" value="Submit form"  class="btn btn-primary"><br>

         </fieldset>
          
          </div>
          </div>

             </form><br>
             <li class="nav-item">
        
        </li>





           
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">

             <h2 >About Us</h2>
          <p >Our Solutions</p>
            <p class="text-primary">
              Our solutions are deployed through an articulated project management process right from conception through to commissioning. Whether providing specialized expertise for Turnkey ICT projects or partnering with our customers in the delivery of products and services, we pride ourselves in our ability to integrate diverse technology skills in the delivery of comprehensive business solutions.
            </p>
             <p class="text-primary">Datasight communications  is a leading firm in the  Hardware support and Systems Integration sector with its corporate Offices in Kajiado and Busia Kenya.
We specialize in systems integration, Hardware, Telecommunications, consultancy, 
out-sourcing and support, platform building and migration for Enterprises.
Our solutions are deployed through an articulated project management process right from conception through to commissioning. Whether providing specialized expertise for Turnkey ICT projects or partnering with our customers in the delivery of products and services, we pride ourselves in our ability to integrate diverse technology skills in the delivery of comprehensive business solutions.
At Datasight communications, we balance our technical talent with practical business sense and real dedication to ensure customer requirements delivery.
</p>
            <p class="text-primary">
              We provide high quality, reliable and affordable IT and Telecommunication products and services:
            </p>
            <ul class="text-primary">
              <li><i class="ri-check-double-line"></i>System hardware repair and design</li>
              <li><i class="ri-check-double-line"></i>Operating system and firewall security programming </li>
              <li><i class="ri-check-double-line"></i> Internet access </li>
               <li><i class="ri-check-double-line"></i> Mail security </li>
                <li><i class="ri-check-double-line"></i>Share point </li>



            </ul>



            <a href="index.php" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->





<div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31917.518803485866!2d34.088864753985746!3d0.4597936202841249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177fa140f465654f%3A0x68fa5e85fcab9513!2sBusia!5e0!3m2!1sen!2ske!4v1709306163050!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
              </div>
    <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message"></div>
              </div>
              <div class="text-center"><button type="submit" name="submit" class="btn btn-primary">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


           <div class="col-sm-4">
          
        </div>
        
      </div>
      
    </div>
    
  </div>

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



  $sql="INSERT INTO `form`(`id`, `first name`, `last name`, `email`, `contact`, `date`, `city`, `state`, `gender`, `service`, `username`, `password`) VALUES ('','$first','$last','$email','$contat','$date','$city','$state','$gender','$service','$user','$newpassword')";

                mysqli_query($con,$sql);
                  


                }

                ?>

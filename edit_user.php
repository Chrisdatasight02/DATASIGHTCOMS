
<?php 
session_start();
$_email=$_SESSION['email'];
$_pass=$_SESSION['password'];

?>





<?php 

$id=$_GET['id'];

$con=mysqli_connect('localhost','root','','datasight');

$sql="SELECT * FROM `form` WHERE id='$id'";

$data=mysqli_query($con,$sql);

$array_data=mysqli_fetch_array($data);

?>

 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Edit user</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>

<body>

   </div>
       <h2 style="text-align: right;" class="container">Welcome: <?php echo $_SESSION['email']; ?></h2>
 <div class="container"> 

<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          
          <li class="active"><a href="signup.php"  >Edit</a></li>
        
        </ul> 
        <div class="tab-content">
          <div class="tab-pane fade active in" id="signup">
            <h2 class="text-uppercase text-center"> Edit</h2>
             <form  method="post"  class="border border-2">
          <fieldset>
        

        <label>First Name</label><br><br>
      <div class="col-md-6 form-group">
<input type="text" name="fname"  value="<?=$array_data[1]?>"class="form-control" id="name" placeholder="" required>
                </div><br><br><br>
        <label>Last Name</label><br>
        <div class="col-md-6 form-group"><br>
        <input type="text" name="lname" value="<?=$array_data[2]?>" class="form-control" id="name" placeholder="" required><br><br>
                </div><br><br><br>
        <label>Email</label><br>
        <input type="email" name="email"  value="<?=$array_data[3]?>"class="form-control"><br> 
        <label>Contact</label>
        <input type="text" name="phone"  value="<?=$array_data[4]?>"class="form-control"><br> 
                <label>Date of Birth</label>
        <input type="date" name="dob"  value="<?=$array_data[5]?>"class="form-control"><br>
        <label>City</label>
        <input type="text" name="town"  value="<?=$array_data[6]?>"class="form-control"><br>
        <label>State</label>
        <input type="text" name="state" value="<?=$array_data[7]?>" class="form-control"><br>
        <label>Gender</label><br>
        <select  name="gender" class="form-control"><br>
        <option><?=$array_data[8]?></option>
          <option>Male</option>
          <option>Female</option>
        </select>
        <label>Book service</label>
        <select  name="service"  class="form-control"><br>
        	<option><?=$array_data[9]?></option>
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
        <input type="text" name="user"  value="<?=$array_data[10]?>"class="form-control"><br>
        <label>password</label>
        <input type="password"  name="pass" value="<?=$array_data[11]?>" class="form-control"><br>
            <button type="submit" value="Edit" name="submit" class="btn btn-larger btn-block">
                Reset
                </button>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- /.container --> 
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
<!-- partial -->
  <script  src="./script.js"></script>
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



  $sql="UPDATE `form` SET `first name`='$first',`last name`='$last',`email`='$email',`contact`='$contact',`date`='$date',`city`='$city',`state`='$state',`gender`='$gender',`service`='$service',`username`='$user',`password`='$newpassword' WHERE id='$id'";

                mysqli_query($con,$sql);

                header("Location: application.php");

                ob_end_flush();

                 	}
?>



























<?php 
 ?>
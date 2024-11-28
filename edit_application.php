

<?php 
session_start();
$_email=$_SESSION['email'];
$_pass=$_SESSION['password'];

?>



<?php 


ob_start();
$id=$_GET['id'];

$con=mysqli_connect('localhost','root','','datasight');

$sql="SELECT * FROM `form` WHERE   id='$id'";


$data=mysqli_query($con,$sql);

$array_data=mysqli_fetch_array($data);

?>

 <!DOCTYPE html>
<html>
<head>
	<title>Our services</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <nav class="navbar navbar-expand-sm navbar-primary bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="assets/images/image46.png" width="150px" height="80px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="btn btn-" class="nav-link" href="home.php">Register visitors</a>
        </li>
        <li class="nav-item">
          <a  class="btn btn-" class="nav-link" href="members.php">User</a>
        </li>
        <li class="nav-item">
          <a  class="btn btn-" class="nav-link" href="signup.php">Add User</a>
        </li>
                <li class="nav-item">
          <a  class="btn btn-" class="nav-link" href="record.php">Visitor Record</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary me-2" type="button">Search</button>
      </form>
      
       
       
    </div>
  </div>
</nav>
        
      </div>
       </div>
       <h2 style="text-align: right;" class="container">Welcome: <?php echo $_SESSION['email']; ?></h2>
 <div class="container"> 

    </div>
    
  </div>

  <div class="div1"><img src="assets/images/image30.jpg"  class="rounded rounded-circle"  class="float-start" width="400" >
<img src="assets/images/image9090.jpg" class="img-thumbnail" class="float-start" width="350">
<img src="assets/images/image59.jpg" class="img-thumbnail" class="float-start" width="470"><br><br><br></div> 
   


<div class="container-fluid">
		<div class="row">
			<div  class="col-md-4 mb-3" >
				<form  method="post">
					<fieldset>
				<legend>Edit the form below</legend>

				<label>First Name</label>
				<input type="text" value="<?=$array_data[1]?>"name="fname" class="form-control"><br>
				<label>Last Name</label>
				<input type="text" value="<?=$array_data[2]?>" name="lname" class="form-control"><br>
				<label>Email</label>
				<input type="email"  value="<?=$array_data[3]?>"name="email" class="form-control"> <br>
				<label>contact</label>
				<input type="text" name="phone" value="<?=$array_data[4]?>" class="form-control"><br>
				<label>Date</label>
				<input type="date" value="<?=$array_data[5]?>" name="dob" class="form-control"><br>
				<label>city</label>
				<input type="text" value="<?=$array_data[6]?>" name="town" class="form-control"><br>
				<label>state</label>
				<input type="text" value="<?=$array_data[7]?>" name="state" class="form-control"><br>
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
					<option>Computer system unit </option>
					<option>Access control system Unit</option>
					<option>Cctv system Unit</option>
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
        <input type="text"  value="<?=$array_data[10]?>"name="user" class="form-control"><br>
         <label>password</label>
        <input type="password" value="<?=$array_data[11]?>" name="pass" class="form-control"><br>



				<input type="submit" value="Edit" name="submit" class="btn btn-primary">
                 </fieldset>
					


              </form>


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



  $sql="UPDATE `form` SET `first name`='$first',`last name`='$last',`email`='$email',`contact`='$contact',`date`='$date',`city`='$city',`state`='$state',`gender`='$gender',`service`='$service',`username`='$user',`password`='$newpassword' WHERE   id='$id'";

                mysqli_query($con,$sql);

                header("Location: application.php");

                ob_end_flush();

                 	}
?>

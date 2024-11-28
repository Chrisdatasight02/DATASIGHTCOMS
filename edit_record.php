


<?php 
session_start();
$_email=$_SESSION['email'];
$_pass=$_SESSION['password'];

?>



<?php 

ob_start();
$id=$_GET['id'];

$con=mysqli_connect('localhost','root','','datasight');

$sql="SELECT * FROM `booking` WHERE   id='$id'";

$data=mysqli_query($con,$sql);

$array_data=mysqli_fetch_array($data);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit file</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link href="assets/css/style.css" rel="stylesheet">

</head>

<body >
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
        <button class="btn btn-light me-2" data-bs-toggle="modal" data-bs-target="#register" type="button">Register Visitor</button>
       <li class="nav-item">
         <li class="nav-item">
          <a class="btn btn-primary me-2"  class="nav-link" href="record.php">Visitors Record</a>
        </li>
       
        <li class="nav-item">
          <a    class="nav-link" href="members.php">View User</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="signup.php">Add User</a>
        </li>

         

        <li class="nav-item">
          <a  class="nav-link" href="application.php">Application record</a>
        </li>

        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        
        <a  class="btn btn- me-2" class="nav-link" href="logout.php">Sign out</a>
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
<img src="assets/images/image59.jpg" class="img-thumbnail" class="float-start" width="470"></div> 


	

<div class="container-fluid">
		<div class="row">

			<div class="col-sm-8" >
				<form  class="col-md-4 mb-3"   class="border border-1" method="post">
					<fieldset>
						<legend>Personal details</legend>
						<label>salutation</label>
						<select class="form-control" name="salutation">
							<option><?=$array_data[1]?></option>
							<option>None</option>
							<option>Mr.</option>
							<option>Mrs.</option>
						</select><br>
						<label>First name</label>
						<input type="text" value="<?=$array_data[2]?>" name="fname" class="form-control"><br>

						<label>Middle name</label>
						<input type="text" value="<?=$array_data[3]?>" name="mname" class="form-control"><br>

						<label>Last name</label>
						<input type="text" value="<?=$array_data[4]?>" name="lname" class="form-control"><br>

						<label>Identification</label>
						<input type="text" value="<?=$array_data[5]?>" name="identity" class="form-control"><br><br>
						<label>Gender</label><br>
						<select name="gender" class="form-control">
							<option><?=$array_data[6]?></option>
							<option>Male</option>
							<option>Female</option>
						</select><br>

						    
						<label>Employment</label>
						<select name="employment" class="form-control">
							<option><?=$array_data[7]?></option>
							<option>Staff</option>
							<option>Guest</option>
						</select><br>

						<label>contact</label>
						<input type="text" value="<?=$array_data[8]?>" name="phone" class="form-control"><br>

						<label>Email</label>
						<input type="Email" value="<?=$array_data[9]?>" name="email" class="form-control"><br>
						<label>Address</label><br>

						<textarea name="address">
						<?=$array_data[10]?>
				         </textarea><br>

						<label>Vehicle number plate</label>


				<input type="text" name="number" value="<?=$array_data[11]?>"  class="form-control"><br>


					 <label>purpose</label>

               <input type="text" name="reason" value="<?=$array_data[12]?>"  class="form-control"><br>

						

						<label>Department</label>

			<input type="text" value="<?=$array_data[13]?>" name="office" class="form-control"><br>
						
					    
						<label>Date</label>
						<input type="date" value="<?=$array_data[14]?>" name="time" class="form-control"><br>

						<label>sign in</label><br>
		<input type="time" value="<?=$array_data[15]?>"name="checkin" class="form-control">

						<label>sign out</label><br>
		<input type="time" value="<?=$array_data[16]?>"name="checkout" class="form-control">
						

						
                         <br><br>
	<input type="submit" value="Edit" name="submit" class="btn btn-success">


                     </fieldset>
					
                       </form>





                       <?php 
                      if (isset($_POST['submit']))

                 {  

                 	$sal=$_POST['salutation'];
                 	$first=$_POST['fname'];
                 	$mid=$_POST['mname'];
                 	$last=$_POST['lname'];
                 	$ident=$_POST['identity'];
                 	$gender=$_POST['gender'];
                 	$empl=$_POST['employment'];
                 	$contact=$_POST['phone'];
                 	$email=$_POST['email'];
                 	$address=$_POST['address'];
                 	$vehicle=$_POST['number'];
                 	$purpose=$_POST['reason'];
                 	$dept=$_POST['office'];
                 	$date=$_POST['time'];
                 	$signin=$_POST['checkin'];
                 	$signout=$_POST['checkout'];


     $con=mysqli_connect('localhost','root','','datasight');



  $sql="UPDATE `booking` SET `salutation`='$sal',`first name`='$first',`middle name`='$mid',`last name`='$last',`identification`='$ident',`gender`='$gender',`employment`='$empl',`contact`='$contact',`email`='$email',`address`='$address',`vehicle number plate`='$vehicle',`purpose`='$purpose',`department`='$dept',`date`='$date',`sign in`='$signin',`sign out`='$signout' WHERE  id='$id'";

                mysqli_query($con,$sql);

                header("Location: record.php");

                 	ob_end_flush();



                }












                        ?>
				


               <div class="col-sm-4"> <br>

 
					
				</div>
				
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








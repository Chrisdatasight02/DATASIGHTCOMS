

<?php 
session_start();
$_email=$_SESSION['email'];
$_pass=$_SESSION['password'];

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Signin Form Template Example</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->








  </head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="assets/css/style.css" rel="stylesheet">
 <link href="assets/css/style.css" rel="stylesheet">

  </head>
  </head>

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
          <li class="nav-item">
          <a    class="nav-link" href="members.php">View User</a>
        </li>
         <li class="nav-item">
          <a  class="nav-link" href="signup.php">Add User</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="application.php">Application record</a>
        </li>
          
      <li><a class="nav-link scrollto" href="index.php">Contact</a></li>
            <ul>
              
              
               
     
       
    </div>
  </div>
</nav>
        
      </div>
       </div>
       <h2 style="text-align: right;" class="container">Welcome: <?php echo $_SESSION['email']; ?></h2>
 <div class="container"> 

    </div>
    
  </div>



  

<div id="form">
  <div class="container">
<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">

<div id="userform">
        
          
         
        
        </ul> 
        <div class="tab-content">
          <div class="tab-pane fade active in" id="signup">
            <h2 class="text-uppercase text-center"> Sign Up</h2>
            <form id="signup"  method="post">
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group" >
                    <label>First Name<span class="req">*</span> </label>
            <input type="text" name="fname" class="form-control" id="first_name" required data-validation-required-message="Please enter your name." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label> Last Name<span class="req">*</span> </label>
                    <input type="text" name="lname" class="form-control" id="last_name" required data-validation-required-message="Please enter your name." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Your Phone<span class="req">*</span> </label>
                <input type="text" name="number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" name="pass" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top">
          <button  class="btn-larger" type="submit" name="signup" class="btn btn-larger btn-block">
                Sign up
                </button>
              </div>

              <div class="mrgn-30-top">
         <a  class="btn-larger" class="btn btn-larger btn-block" class="text-white" href="members.php">View User</a>   
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

</body>
</html>


<?php 
        if (isset($_POST['signup']))

                 {  

                  $first=$_POST['fname'];
                  $last=$_POST['lname'];
                  $email=$_POST['email'];
                  $phone=$_POST['number'];
                  $pass=$_POST['pass'];
                  $newpassword=md5($password);
                  

     $con=mysqli_connect('localhost','root','','datasight');



  $sql="INSERT INTO `register`(`id`, `first name`, `last name`, `email`, `phone`, `password`) VALUES ('','$first','$last','$email','$phone',' $newpassword')";

                mysqli_query($con,$sql);
                  


                }

                ?>














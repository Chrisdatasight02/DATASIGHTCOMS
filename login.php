
<?php 

ob_start();

 ?>s



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log in</title>

   <link rel="stylesheet" href="./style.css">

 <link rel="stylesheet" type="text/css" href="mystyle.css">

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

<body >

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
          
      <li><a class="nav-link scrollto" href="index.php">Contact</a></li>
            <ul>


              <li class="dropdown"><a href="#"><span>Welcome</span> <i class="bi bi-chevron-down"></i></a>
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
              
              
               
     
       
    </div>
  </div>
</nav> 
        
      </div>
      
    </div>
    
  </div>




<div style="background-color: white;color: black;font-weight: bolder;border-radius: 20px;height:30px;font-size: 20px;">
    <marquee>Welcome</marquee>
      </div>
      <br>






<center><div id="form" >
  <div class="container" >
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2" class="bg-dark">
      
    </ul>
        <div class="tab-content" >
          <div class="tab-pane fade active in" id="signup">
            <h2 class="text-uppercase text-center"> </h2>
            <form  method="post" >
              <div class="row">
                <div class="col-xs-12 col-sm-8">
                    
          
              <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" name="pass"  class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top"  >
               <button  class="btn btn-primary" type="submit" name="submit" class="btn btn-larger btn-block"/>
                Log in
                </button>








                
              </div>
              
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  </center>
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





 if (isset($_POST['submit']))
  {
                   

                 
                  $email=$_POST['email'];
                  $pass=$_POST['pass'];
                  $_pass=md5($pass);

                  //echo "$email";
                  //echo "$pass";
                  //connect to the database
    $con=mysqli_connect('localhost','root','','datasight');

    



 $query="SELECT * FROM `form` WHERE  username='$email' and password='$_pass'";

      $sql= mysqli_query($con,$query);

      $fetched=mysqli_fetch_array($sql);

      $rows=mysqli_num_rows($sql);
   //echo $rows;


       if ($rows>0) 

        {

        session_start();
      $_SESSION['email']=$email;
      $_SESSION['password']=$pass;




       	header("Location:record.php");

       }

       else{
       	header("Location:index.php");
         ob_end_flush();




            }

}      

           ?>




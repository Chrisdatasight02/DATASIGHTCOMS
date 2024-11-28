
<?php 
session_start();
$_email=$_SESSION['email'];
$_pass=$_SESSION['password'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>user sign up</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>

 <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>

 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

 <link href="assets/css/style.css" rel="stylesheet">


  
</head>
<body >
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <nav class="navbar navbar-expand-sm navbar-primary bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href=""><img src="assets/images/image46.png" width="150px" height="80px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
<button class="btn btn-light me-2" data-bs-toggle="modal" data-bs-target="#register" type="button">Register Visitor</button>
       <li class="nav-item">

        <li class="nav-item">
          <a class="btn btn- me-2"  class="nav-link" href="record.php">Visitors Record</a>
        </li>
         <li class="nav-item">
          <a class="btn btn-info me-2" class="btn btn-primary me-2"   class="nav-link" href="members.php">View User</a>
        </li>
        <li class="nav-item">
          <a class="btn btn- me-2" class="nav-link" href="signup.php">Add User</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="application.php">Application record</a>
        </li>


        </ul>
      <form class="d-flex" >
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-light me-2" type="button">Search</button>
        <a   class="nav-link" href="logout.php">Sign out</a>
      </form>
      
        </li>

       
    </div>
  </div>
</nav>
        
      </div>
        </div>
       <h2 style="text-align: right;" class="container">Welcome: <?php echo $_SESSION['email']; ?></h2>
 <div class="container"> 

    </div>
    
  </div>



<!-- The Modal -->
<div class="modal" id="register">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Check-in</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 <!--        create form for registering here with username,password,gender,email,phone number,date of birth etc -->
                   <form  method="post">
          <fieldset>
            <legend>Personal details</legend>
            <label>salutation</label>
          <select class="form-control" name="salutation">
              <option>None.</option>
              <option>Mr.</option>
              <option>Mrs.</option>
            </select><br>
            <label>First name</label>
            <input type="text" name="fname" class="form-control"><br>
            <label>Middle name</label>
            <input type="text" name="mname" class="form-control"><br>
            <label>Last name</label>
            <input type="text" name="lname" class="form-control"><br>
            <label>Identification</label>
            <input type="text" name="identity" class="form-control"><br>
            <label>Gender</label><br> 
                <select name="gender" class="form-control">
                <option>Male</option>
                <option>Female</option>
                </select>
        
            <label>Employment</label>
            <select name="employment" class="form-control">
              <option>Staff</option>
              <option>Guest</option>
            </select><br>
            <label>contact</label>
            <input type="text" name="phone" class="form-control"><br>
            <label>Email</label>
            <input type="Email" name="email" class="form-control"><br>
            <label>Address</label> <br>
            <textarea name="address">
               </textarea><br>
            <label>Vehicle number plate</label>
<input type="text" name="number" class="form-control"><br>
             <label>purpose</label>
        <input type="text" name="reason" class="form-control"><br>

            <label>Department</label>

        <input type="text" name="office" class="form-control"><br>
            
            <label>Date</label>
        <input type="date" name="time" class="form-control"><br>
        
            <label>sign in</label>
        <input type="time" name="checkin" class="form-control"><br>

            <label>sign out </label>
    <input type="time" name="checkout" class="form-control"><br><br>

            
    <input type="submit" name="submit" class="btn btn-success">


                     </fieldset>
          
                    </form>
        

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>




<!-- The Modal -->
<div class="modal" id="login">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
  <!--      //create a form with username and password and a button to login -->
  <form>
    <fieldset>
      
        Username: <input type="text" class="form-control"><br><br>
        Passwword: <input type="password" class="form-control">
    </fieldset>
  </form>



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


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



 $sql="INSERT INTO `booking`(`id`, `salutation`, `first name`, `middle name`, `last name`, `identification`, `gender`, `employment`, `contact`, `email`, `address`, `vehicle number plate`, `purpose`, `department`, `date`, `sign in`, `sign out`) VALUES ('','$sal','$first','$mid','$last','$ident','$gender','$empl','$contact','$email','$address','$vehicle','$purpose','$dept','$date','$signin','$signout')";

                mysqli_query($con,$sql);
                  


                }

                ?>



<div class="container-fluid">
<div class="row">
<div class="col-sm-2">

</div>
<div class="col-sm-12">

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" class="table table-bordered table-striped table-hover" class="btn btn-primary">
<thead class="alert alert-success">
<tr>
<th>id</th> <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Phone</th> <th>Password</th>

            <th>Action</th>
            <th>Action</th>
    </tr>

     <?php 

    $con=mysqli_connect('localhost','root','','datasight');



    $sql="SELECT * FROM `register`";

     mysqli_query($con,$sql);

     $data=mysqli_query($con,$sql);

     while($array_data=mysqli_fetch_array($data))
             {

 
                  ?>
</tr >
</thead>
<tbody> 
<tr class="table-primary">
<td> <?=$array_data[0]?></td> <td><?=$array_data[1]?></td> <td><?=$array_data[2]?></td><td><?=$array_data[3]?></td> <td><?=$array_data[4]?></td> <td><?=$array_data[5]?></td>  



               <td>
     <a class="btn btn-danger" href="delete_members.php?id=<?=$array_data[0]?>">Delete</a>
                    </td>

                   <td>
    <a class="btn btn-success" href="edit_members.php?id=<?=$array_data[0]?>">Edit</a>
                   </td>
                 </tr>
                 <?php 

                     }

                ?>


</tbody>
</table>
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
 

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>

      <script id="rendered-js" >
$(document).ready(function () {
  //Only needed for the filename of export files.
  //Normally set in the title tag of your page.
  document.title = 'User';
  // DataTable initialisation
  $('#example').DataTable(
  {
    "dom": '<"dt-buttons"Bf><"clear">lirtp',
    "paging": true,
    "autoWidth": true,
    "buttons": [
    'colvis',
    'copyHtml5',
    'csvHtml5',
    'excelHtml5',
    'pdfHtml5',
    'print'] });



});
//# sourceURL=pen.js
    </script>

--












<?php 
session_start();
$_email=$_SESSION['email'];
$_pass=$_SESSION['password'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>password</title>
   <link rel="stylesheet" href="./style.css">
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
     <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <li><a class="nav-link scrollto" href="index.php">Services</a></li>
          <li><a class="nav-link scrollto " href="index.php">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index.php">Pricing</a></li>
          <li><a class="nav-link scrollto" href="index.php">Team</a></li>
          <li class="dropdown"><a  href="#"><span>Register here</span> <i class="bi bi-chevron-down"></i></a>
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
           <a href="data.php" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger w-100">Reset password</a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
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
    
  </div>

  <div class="div1" ><img src="assets/images/image30.jpg"  class="rounded rounded-circle"  class="float-start" width="400" >
<img src="assets/images/image9090.jpg" class="img-thumbnail" class="float-start" width="350">
<img src="assets/images/image59.jpg" class="img-thumbnail" class="float-start" width="470">
</div> 



 <h6 class="text-primary"> Location:
</h6><br>
       

<div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31917.518803485866!2d34.088864753985746!3d0.4597936202841249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177fa140f465654f%3A0x68fa5e85fcab9513!2sBusia!5e0!3m2!1sen!2ske!4v1709306163050!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
              </div>


    <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100"><br>
    <h6 class="text-primary">Enter your email address and we'll send you an email with instructions to reset your password.
</h6><br>
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




  <!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary" style="color: white" >
        <h4 class="modal-title" id="exampleModalLabel" >Add New Student</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             
        
            <form id="frmProduct">
                
                        
                            
                                <label style="color: blue;font-weight:bolder">Student Name.</label>
                                <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Student Name" required="true" autocomplete="off">
                                <label style="color: blue;font-weight:bolder">Admission No</label>
                                <input type="text" class="form-control" id="admission_no" name="admission_no" placeholder="Admission Number" required="true" autocomplete="off">
                                <br>
                                <label style="color: blue;font-weight:bolder">Parent/Guardian Name</label>
                                <input type="text" class="form-control" id="parent_guardian_Name" name="parent_guardian_Name" placeholder="Parent/Guardian Name" required="true" autocomplete="off">
                                <br>
                                <label style="color: blue;font-weight:bolder">Parent/Guardian Contact</label>
                                <input type="text" class="form-control" id="parent_guardian_contact" name="parent_guardian_contact" placeholder="Parent/Guardian Contact" required="true" autocomplete="off">

                                <br>
                                 <label style="color: blue;font-weight:bolder">Gender</label>
                                <select class="form-control" id="the_gender" name="the_gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    
                                 </select>
                                 <br>

                                    <?php
                              $query = "SELECT * FROM classes ORDER BY id";
                              $result = mysqli_query($conn, $query);

                                      ?>
                                      <label style="color: blue;font-weight:bolder">Grade</label>
                             <select class="form-control" id="the_class" name="the_class">
                              <?php
                                     while ($rows=$result->fetch_assoc()){
                                         $teachers_list=$rows['class_name'];
                                         echo "<option value='$teachers_list'>$teachers_list</option>";
                                     }
                                 ?>       
                              </select>


                                   <?php
                              $query_stream = "SELECT * FROM streams ORDER BY id";
                              $result_stream = mysqli_query($conn, $query_stream);

                                      ?>
                                                 <label style="color: blue;font-weight:bolder">Stream</label>
                             <select class="form-control" id="the_stream" name="the_stream">
                              <?php
                                     while ($rows_stream=$result_stream->fetch_assoc()){
                                         $stream_list=$rows_stream['stream_name'];
                                         echo "<option value='$stream_list'>$stream_list</option>";
                                     }
                                 ?>       
                              </select>
                        
                            
                                <label style="color: blue;font-weight:bolder;display: none;">Class Id</label>
                                <input type="number" class="form-control" id="Product_id" name="Product_id" placeholder="Product Id" required="true"style="display: none;" readonly autocomplete="off">
                                
                            
                    
                 

               
            </form>
        
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="update" style="display: none;">Update</button>
        <button type="button" class="btn btn-primary" id="save">Save</button>
      </div>
    </div>
  </div>
</div>
<!--EDIT/ADD PRODUCT MODAL-->

 <div class="col-sm-12">
       <table class="table table-bordered" id="mytable">
                          <thead>  
                               <tr class="btn-primary">  
                                    <th >Student Name</th>
                                    <th >Gender</th> 
                                    <th >Addmission No</th> 
                                     <th >Parent/Guardian</th>
                                      <th >Parent/Guardian Contact</th> 
                                   <th style="display: none;">Action</th>
                                   <th style="display: none;">Action</th>

                                      
                               </tr>

                               </thead>
                               <tbody>   
                                
                                 <?php
                                 
   
                 $query = "SELECT * FROM students ORDER BY addmission_number DESC";  
                 $result = mysqli_query($conn, $query); 
                              
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                
                                 <td><?php echo $row["name"]; ?></td>
                                 <td><?php echo $row["gender"]; ?></td>
                                  <td><?php echo $row["real_admission_number"]; ?></td>
                                    <td><?php echo $row["parent_name"]; ?></td>
                                     <td><?php echo $row["parent_contact"]; ?></td>
                                    
                                    <td style="display: none;"><input type="button" name="edit" value="Edit" id="<?php echo $row["addmission_number"]; ?>" class="btn btn-primary btn-sm  EditHandler" /></td>  

                                    <td style="display: none;"><input type="button" name="delete" value="Delete" id="<?php echo $row["addmission_number"]; ?>" class="btn btn-danger btn-sm deleteHandler" /></td>  

                                    
                                    
                                    
                               </tr>  
                               <?php 

                               }  
                               // mysqli_close($conn);
                               ?>
                             
                               </tbody> 
                          </table>
                          <br>
                          <div>
                         
                          </div>
      
    </div>
<!--  -->













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






























































<?php  ?>
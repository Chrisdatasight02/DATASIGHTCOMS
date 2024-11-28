
<?php 
session_start();
$_email=$_SESSION['email'];
$_pass=$_SESSION['password'];

?>



<?php 

$id=$_GET['id'];

$con=mysqli_connect('localhost','root','','datasight');

$sql=" DELETE FROM `form` WHERE id=$id";

mysqli_query($con,$sql);

header("Location:application.php")


?>
 <h2 style="text-align: right;" class="container">Welcome: <?php echo $_SESSION['email']; ?></h2>
 <div class="container"> 


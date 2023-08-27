
<?php
session_start();
include "../include/connection.php";
$email=$_POST['email'];
$password=$_POST['password'];
$_SESSION['email']=$email;
$_SESSION['password']=$password;

 
if($email){
   
    $sql="SELECT * FROM `loginform` WHERE `email`='$email' and `password`='$password'";
    $run=mysqli_query($conn,$sql);
    $fet=mysqli_fetch_assoc($run);
   if( $fet){
   echo 1;
   }else{
    echo 2;
   }
}
  
 
?>

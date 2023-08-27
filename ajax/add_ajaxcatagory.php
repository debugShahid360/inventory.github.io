<?php

include "../include/connection.php";
  
    $cname=strtolower( mysqli_real_escape_string($conn,$_POST['cname']));
    $cdes=mysqli_real_escape_string($conn,$_POST['cdes']);
    $cdate=date("d-m-Y");
    date_default_timezone_set("Asia/Karachi");
    $ctime=date('h:i:s a');
  
    $csql="SELECT * FROM `catagories` WHERE `cname`='$cname'";
    $crun=mysqli_query($conn,$csql);
    $fet=mysqli_fetch_assoc($crun);
    
    if($fet){
      echo 3;
    }else{
      $sql="INSERT INTO `catagories` (`cname`,`cdes`,`cdate`,`ctime`)VALUES('$cname','$cdes','$cdate','$ctime')";
      $run=mysqli_query($conn,$sql);
      if($run){
        echo 1;
      }
    }
  
 
?>
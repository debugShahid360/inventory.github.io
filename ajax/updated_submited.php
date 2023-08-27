<?php

include "../include/connection.php";
    $cname=strtolower( mysqli_real_escape_string($conn,$_POST['cname']));
    $cdes=mysqli_real_escape_string($conn,$_POST['cdes']);
    $id=mysqli_real_escape_string($conn,$_POST['cids']);
    $cdate=date("d-m-Y");
    date_default_timezone_set("Asia/Karachi");
    $ctime=date('h:i:s a');
  
      $sql="UPDATE `catagories` SET `cname`='$cname',`cdes`='$cdes',`cdate`='$cdate',`ctime`='$ctime' WHERE `cid`='$id'";
      $run=mysqli_query($conn,$sql);
      if($run){
        echo 1;
        
      }else{
        echo 3;
      }
    
 

?>
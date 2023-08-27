<?php

include "../include/connection.php";
  
$subname=strtolower(mysqli_real_escape_string($conn,$_POST['subname']));
$subdes=mysqli_real_escape_string($conn,$_POST['subdes']);
$catagory=mysqli_real_escape_string($conn,$_POST['catagory']);
$subdate=date("d-m-Y");
date_default_timezone_set("Asia/Karachi");
$subtime=date('h:i:s a');
$chsql="SELECT * FROM `subcatagorys` WHERE `subname`='$subname' and `catagory`='$catagory'";
$chrun=mysqli_query($conn,$chsql);
$chfet=mysqli_fetch_assoc($chrun);
if(empty($subname) || !empty($chfet)){
    echo 3;
}else{
    if($chfet){
        echo 3;
    }else{
        $subsql="INSERT INTO `subcatagorys`(`subname`,`subdes`,`catagory`,`subdate`,subtime) VALUES('$subname','$subdes','$catagory','$subdate','$subtime')";
        $subrun=mysqli_query($conn,$subsql);
     if($subrun){
      echo 1;
     }
    }
   

}
  
 
?>
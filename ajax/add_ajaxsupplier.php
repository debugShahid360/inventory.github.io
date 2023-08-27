<?php
include "../include/connection.php";
$supname=strtolower(mysqli_real_escape_string($conn,$_POST['supname']));
 $supemail=mysqli_real_escape_string($conn,$_POST['supemail']);
 $supcontact=mysqli_real_escape_string($conn,$_POST['supcontact']);
 $supcompanyname=mysqli_real_escape_string($conn,$_POST['supcompanyname']);
 date_default_timezone_set("Asia/Karachi");
 $supdate=date("d-m-Y");
 $suptime=date("h:i:s a");
 $supsql="SELECT * FROM `supplier` WHERE `supname`='$supname' or `supcontact`='$supcontact' or `supcompanyname`='$supcompanyname'";
 $suprun=mysqli_query($conn,$supsql);
 $supfet=mysqli_fetch_assoc($suprun);
 if(empty($supname) || !empty($supfet)){
     echo 3;
 }else{
 $sql="INSERT INTO `supplier`(`supname`,`supemail`,`supcontact`,`supcompanyname`,`supdate`,`suptime`)VALUES('$supname','$supemail','$supcontact','$supcompanyname','$supdate','$suptime')";
 $run=mysqli_query($conn,$sql);
 if($run){
    echo 1;
 }else{
    echo 3;
 }

}
?>
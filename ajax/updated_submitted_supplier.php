<?php
include "../include/connection.php";
    $supname=mysqli_real_escape_string($conn,$_POST['supname']);
    $supemail=mysqli_real_escape_string($conn,$_POST['supemail']);
    $supid=mysqli_real_escape_string($conn,$_POST['supid']);
    $supcontact=mysqli_real_escape_string($conn,$_POST['supcontact']);
    $supcompanyname=mysqli_real_escape_string($conn,$_POST['supcompanyname']);
    date_default_timezone_set("Asia/Karachi");
    $supdate=date("d-m-Y");
    $suptime=date("h:i:s a");
   
    $sql="UPDATE `supplier`set `supname`='$supname',`supemail`='$supemail',`supcontact`='$supcontact',`supemail`='$supemail',`supcontact`='$supcontact',`supcompanyname`='$supcompanyname',`supdate`='$supdate',`suptime`='$suptime' WHERE `supid`=$supid";
    $run=mysqli_query($conn,$sql);
    if($run){
       echo 1;
     
    }else{
       echo 2;
    }
   
   

?>
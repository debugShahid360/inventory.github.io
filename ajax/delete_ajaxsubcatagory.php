<?php
include "../include/connection.php";
$delid=$_POST['deleted']; 

$desql="DELETE FROM `subcatagorys`WHERE `subid`='$delid'";
$derun=mysqli_query($conn,$desql);
if($derun){
   echo 1;
}else{
 echo 2;
}


?>
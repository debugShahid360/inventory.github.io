<?php
include "./include/connection.php";
 $del=$_GET['subid'];
 $desql="DELETE FROM `subcatagorys`WHERE `subid`='$del'";
 $derun=mysqli_query($conn,$desql);
 if($derun){
    echo "<script>alert('Your sub Catagory has been deleted ')</script>";
    header("Refresh:0,url=./view_sub-catagory.php");
 }

?>
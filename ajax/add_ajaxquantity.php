<?php
 include "../include/connection.php";
 $qname=strtolower(mysqli_real_escape_string($conn,$_POST['qname']));
    
    
 date_default_timezone_set("Asia/Karachi");
 $qdate=date("d-m-Y");
 $qtime=date("h:i:s a");

 
 

 $qsql="SELECT * FROM `Quantity_data` WHERE `qname`='$qname'";
 $qrun=mysqli_query($conn,$qsql);
 $qfet=mysqli_fetch_assoc($qrun);

 if(empty($qname)|| !empty($qfet)){
     echo 3;
 }else{
    
        $qsql="INSERT INTO `Quantity_data`(`qname`,`qdate`,`qtime`)VALUES('$qname','$qdate','$qtime')";
        $qrun=mysqli_query($conn,$qsql);
    }
 
 if($qrun){
    echo 1;
    
 }else{
    echo 3;
 }
?>
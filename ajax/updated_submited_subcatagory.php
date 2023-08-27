<?php

include "../include/connection.php";

// $upd=$_GET['subid'];
// $subsql="SELECT * FROM `subcatagorys` WHERE `subid`='$upd'";
// $subrun=mysqli_query($conn,$subsql );
// $subfet=mysqli_fetch_assoc($subrun);


$subname=mysqli_real_escape_string($conn,$_POST['subname']);
$subdes=mysqli_real_escape_string($conn,$_POST['subdes']);
$subid=mysqli_real_escape_string($conn,$_POST['subid']);
$catagory=mysqli_real_escape_string($conn,$_POST['catagory']);
$subdate=date("d-m-Y");
date_default_timezone_set("Asia/Karachi");
$subtime=date('h:i:s a');

if(empty($subname)){
    echo 3;
}else{

    $upsql="UPDATE `subcatagorys` SET `subname`='$subname',`subdes`='$subdes',`catagory`='$catagory',`subdate`='$subdate',`subtime`='$subtime' WHERE `subid`='$subid'";
    $uprun=mysqli_query($conn,$upsql);
    if($uprun){
        echo 1;
    }else{
        echo 3;
    }
   

}




    
 

?>
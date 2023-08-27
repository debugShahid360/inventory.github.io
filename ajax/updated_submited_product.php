<?php

include "../include/connection.php";


$cat1=strtolower(mysqli_real_escape_string($conn,$_POST['cat1']));
 $subcatagory=mysqli_real_escape_string($conn,$_POST['subcatagory']);
 $pname=mysqli_real_escape_string($conn,$_POST['pname']);
 $pcode=mysqli_real_escape_string($conn,$_POST['pcode']);
 $pid=mysqli_real_escape_string($conn,$_POST['pid']);
 $pprice=mysqli_real_escape_string($conn,$_POST['pprice']);
 $supply=mysqli_real_escape_string($conn,$_POST['supply']);
 $quantity=mysqli_real_escape_string($conn,$_POST['quantity']);
 @$pcompany=mysqli_real_escape_string($conn,$_POST['pcompany']);
 $supplier=mysqli_real_escape_string($conn,$_POST['supplier']);
 @$status=mysqli_real_escape_string($conn,$_POST['online']);
 
 $pimage=$_FILES['pimage']['name'];
 date_default_timezone_set("Asia/Karachi");
 $pdate=date("d-m-Y");
 $ptime=date("h:i:s a");

 $exe=strtolower(pathinfo($pimage,PATHINFO_EXTENSION));
 $arr=array("jpg","jpeg","png");

 $prosql="SELECT * FROM `product_data` INNER JOIN `catagories` ON `cat1`=`cid` INNER JOIN `subcatagorys` ON `subcatagory`=`subid` INNER JOIN `quantity_data` ON `quantity`=`qid` INNER JOIN `supplier` ON `supplier`=`supid` WHERE `pid`='$pid'";
$prorun=mysqli_query($conn,$prosql);
$profet=mysqli_fetch_assoc($prorun);

 $psql="SELECT * FROM `product_data` WHERE `pcode`='$pcode' and `pname`='$pname' ";
 $prun=mysqli_query($conn,$psql);
 $pfet=mysqli_fetch_assoc($prun);

 if(empty($pname)){
     echo 4;
 }else{
    if(empty($pimage)){
       
        $prsql="UPDATE `product_data` SET `cat1`='$cat1',`subcatagory`='$subcatagory',`supplier`='$supplier',`pname`='$pname',`pcode`='$pcode',`quantity`='$quantity=',`pcompany`='$pcompany',`pprice`='$pprice',`supply`=' $supply',`pdate`='$pdate',`ptime`=' $ptime',`status`='$status' WHERE `pid`='$pid' ";
        $prrun=mysqli_query($conn,$prsql);
        if($prrun){
            echo 2;
        }
       
    }else{
        if(in_array($exe,$arr)){
            $pimage=rand(1,1000000).".".$exe;
            $pimage=array($pimage);
            $pimage=implode(",",$pimage);
    
            $pimage=$profet['pimage'];
            unlink("../img/".$pimage);
    
            $prsql="UPDATE `product_data` SET `cat1`='$cat1',`subcatagory`='$subcatagory',`supplier`='$supplier',`pname`='$pname',`pcode`='$pcode',`quantity`='$quantity=',`pcompany`='$pcompany',`pprice`='$pprice',`supply`=' $supply',`pdate`='$pdate',`ptime`=' $ptime',`pimage`='$pimage',`status`='$status' WHERE `pid`='$pid' ";
            $prrun=mysqli_query($conn,$prsql);
        }else{
     echo 2;
        }
    }
    

 
 if($prrun){
    echo 1;

    move_uploaded_file($_FILES['pimage']['tmp_name'],"../img/".$pimage);
    
 }else{
    echo 3;
 }
}





    
 

?>
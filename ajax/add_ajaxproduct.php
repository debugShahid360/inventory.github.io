<?php
include "../include/connection.php";
$cat1=strtolower(mysqli_real_escape_string($conn,$_POST['cat1']));
 $subcatagory=mysqli_real_escape_string($conn,$_POST['subcatagory']);
 $pname=mysqli_real_escape_string($conn,$_POST['pname']);
 $pcode=mysqli_real_escape_string($conn,$_POST['pcode']);
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
 

 $psql="SELECT * FROM `product_data` WHERE `pcode`='$pcode' and `pname`='$pname' ";
 $prun=mysqli_query($conn,$psql);
 $pfet=mysqli_fetch_assoc($prun);

 if(empty($pname) || empty($status)){
    echo 3;
    
}else{

 if( !empty($pfet) ){
     echo 3;
    
 }else{
    if(in_array($exe,$arr)){
        $pimage=rand(1,1000000).".".$exe;
        $pimage=array($pimage);
        $pimage=implode(",",$pimage);
        $prsql="INSERT INTO `product_data`(`cat1`,`subcatagory`,`pname`,`pcode`, `quantity`,`pcompany`, `pprice`,`supply`,`pdate`,`ptime`,`pimage`,`supplier`,`status`)VALUES('$cat1','$subcatagory','$pname','$pcode','$quantity','$pcompany','$pprice','$supply','$pdate','$ptime','$pimage','$supplier','$status')";
        $prrun=mysqli_query($conn,$prsql);
    }else{
 echo 3;
    }
 
if(empty($pimage)){
    $prsql="INSERT INTO `product_data`(`cat1`,`subcatagory`,`pname`,`pcode`, `quantity`,`pcompany`, `pprice`,`supply`,`pdate`,`ptime`,`supplier`,`status`)VALUES('$cat1','$subcatagory','$pname','$pcode','$quantity','$pcompany','$pprice','$supply','$pdate','$ptime','$supplier','$status')";
        $prrun=mysqli_query($conn,$prsql);
        echo 3;
}
 
 if($prrun){
    echo 1;
    move_uploaded_file($_FILES['pimage']['tmp_name'],"../img/".$pimage);
 }else{
    echo 3;
 }
}

}
?>
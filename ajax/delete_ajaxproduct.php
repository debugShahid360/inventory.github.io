<?php

include "../include/connection.php";

$del=$_POST['deleted'];
$sql="DELETE FROM `product_data` WHERE `pid`='$del'";
$run=mysqli_query($conn,$sql);
if($run){
echo 1;

}else{
    echo 2;
}
?>
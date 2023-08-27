<?php
 include "../include/connection.php";
 $delid=$_POST['deleted']; 
$sql="DELETE FROM `Quantity_data` WHERE `qid`='$delid'";
$run=mysqli_query($conn,$sql);
if($run){
echo 1 ;

}else{
echo 2;
}

?>
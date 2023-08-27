<?php
    $conn=mysqli_connect("localhost","root","","project529");
    if($conn){
        // echo "<script>alert('Your connection has been connected ')</script>";
    }
    else{
        echo "<script>alert('Your connection has not been connected ')</script>";
    }
?>
<?php

include "../include/connection.php";

   
$sql="SELECT * FROM `catagories` INNER JOIN `subcatagorys` ON cid=catagory";
$run=mysqli_query($conn,$sql);
 
while($fet=mysqli_fetch_assoc($run)){


?>
<tr>
<td><?php echo $fet['cname'];?></td>
<td><?php echo $fet['subname'];?></td>
<td><?php echo $fet['subdes'];?></td>
<td><?php echo $fet['subdate'];?></td>
<td><?php echo $fet['subtime'];?></td>
<td><a class="btn btn-success" id="update" target="_blank" data-up="<?php echo $fet['subid']?>">Update</a>
</td>
<td><a class="btn btn-danger" id="deleted" target="_blank" data-del="<?php echo $fet['subid']?>">delete</a>
</td>
</tr>
<?php

}

 
?>
<?php
include "../include/connection.php";
$sql="SELECT * FROM `supplier`";
$run=mysqli_query($conn,$sql);
while($fet=mysqli_fetch_assoc($run)){

    ?>
<tr>
  <td><?php echo $fet['supname']?></td>
  <td><?php echo $fet['supemail']?></td>
  <td><?php echo $fet['supcontact']?></td>
  <td><?php echo $fet['supcompanyname']?></td>
  <td><?php echo $fet['supdate']?></td>
  <td><?php echo $fet['suptime']?></td>
  <td><a data-up="<?php echo $fet['supid']?>" id="update" class="btn btn-primary"> update</a></td>
  <td><a data-del="<?php echo $fet['supid']?>" id="deleted" class="btn btn-danger"> Deleted</a></td>
</tr>


<?php              
}
?>
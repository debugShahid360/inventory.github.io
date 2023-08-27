<?php

include "../include/connection.php";

    $sql="SELECT * FROM `catagories`";
    
    $run=mysqli_query($conn,$sql);
                                                  
    while($fet=mysqli_fetch_assoc($run)){
          ?>
  <tr>
      <td><?php echo $fet['cname'];?></td>
      <td><?php echo $fet['cdes'];?></td>
      <td><?php echo $fet['cdate'];?></td>
      <td><?php echo $fet['ctime'];?></td>
      <td><a class="btn btn-success  text-white" target="_blank" id="update" data-up="<?php echo $fet['cid']?>">Update</a>
      </td>
      <td><a class="btn btn-danger text-white  deleted" target="_blank" id="deleted"
              data-delet="<?php echo $fet['cid']?>">deleted</a>
      </td>
  </tr>
  <?php
  }
  
 
?>
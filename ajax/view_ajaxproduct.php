<?php

include "../include/connection.php";

$prsql="SELECT * FROM `product_data` INNER JOIN `catagories` ON `cat1`=`cid` INNER JOIN `subcatagorys` ON `subcatagory`=`subid` INNER JOIN `quantity_data` ON `quantity`=`qid` INNER JOIN `supplier` ON `supplier`=`supid`";
$prrun=mysqli_query($conn,$prsql);
while($prfet=mysqli_fetch_assoc($prrun)){
   $p=$prfet['pimage']; 
   

    ?>
<tr>
<td><?php echo $prfet['cname']?></td>
<td><?php echo $prfet['subname']?></td>
<td><?php echo $prfet['supname']?></td>
<td><?php echo $prfet['pname']?></td>
<td><img src="<?php echo "./img/".$p?>" alt="" width="100"></td>
<td><?php echo $prfet['pcode']?></td>
<td><?php echo $prfet['qname']?></td>
<td><?php echo $prfet['supcompanyname']?></td>
<td><?php echo $prfet['pprice']?></td>
<td><?php echo $prfet['supply']?></td>
<td><?php echo $prfet['status']?></td>

<td><a data-up="<?php echo $prfet['pid']?>" id="update" class="btn btn-primary"> update</a></td>
<td><a data-del="<?php echo $prfet['pid']?>" id="deleted" class="btn btn-danger"> Deleted</a></td>
</tr>
<?php
}  

